<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrdersProduct;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function place_order(Request $r)
    {
        $order = new Order;
        $order->user_id = Session::get('user_id');
        $order->save();

        $menu = Product::query()
            ->select('*')
            ->where('stock', '>', '0')
            ->get();

        $order_products = [];
        for ($i = 0; $i < count($menu); $i++) {
            $num_ordered = $r->input('order_' . $menu[$i]->product_id);
            if ($num_ordered > 0) {
                $op = new OrdersProduct;
                $op->order_id = $order->order_id;
                $op->product_id = $menu[$i]->product_id;
                $op->quantity = $num_ordered;
                $op->save();
                array_push($order_products, $op);
            }
        }

        $receipt = Order::query()
            ->select('name', 'quantity', 'price')
            ->join('orders_products', 'orders.order_id', '=', 'orders_products.order_id')
            ->join('products', 'orders_products.product_id', '=', 'products.product_id')
            ->where('orders.order_id', '=', $order->order_id)
            ->get();

        return view('cafeteria_success', compact('order', 'order_products', 'receipt'));
    }
    public function index()
    {
        $menu = Product::query()
            ->select('*')
            ->where('stock', '>', '0')
            ->get();
        return view('cafeteria', compact('menu'));
    }
}
