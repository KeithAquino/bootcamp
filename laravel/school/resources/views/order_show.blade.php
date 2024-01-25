<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Show Order</title>
</head>

<body>
    @include('layouts/messages')
    @include('layouts/navbar')
    <h1>Show Order</h1>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total Price</th>
            <th>Image</th>
        </tr>
        @foreach ($orders as $o)
        <tr>
            <td>{{$o -> name}}</td>
            <td>{{$o -> quantity}}</td>
            <td>₱{{$o -> price}}</td>
            <td>₱{{$o -> quantity * $o -> price}}</td>
            <td><img src="/img/products/{{$o -> image}}" style="height: 30px"></td>
        </tr>
        @endforeach
    </table>
    <h2>Grand total: ₱{{$grand_total -> grand_total}}</h2>
</body>

</html>