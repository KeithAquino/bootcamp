<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Order Placed</title>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/messages')
    <h1>Order Placed</h1>
    Order ID: {{$order->order_id}}
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total Price</th>
        </tr>
        @foreach ($receipt as $r)
        <tr>
            <td>{{$r -> name}}</td>
            <td>{{$r -> quantity}}</td>
            <td>₱{{$r -> price}}</td>
            <td>₱{{$r -> quantity * $r -> price}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>