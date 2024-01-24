<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()
            ->select('*')
            ->orderBy('name')
            ->get();
        return view('product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $p = new Product;
        $p->name = $r->input("name");
        $p->price = $r->input("price");
        $p->stock = $r->input("stock");
        if ($r->file('image')) {
            $file = $r->file('image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $p->image = $filename;
        }

        $p->save();
        return redirect("admin/products");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
