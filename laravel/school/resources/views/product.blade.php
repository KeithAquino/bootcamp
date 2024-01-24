<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Product</title>
</head>

<body>
    @include('layouts/navbar')
    <h1>Product Page</h1>
    <a href="/admin/products/create" class="btn btn-success">Add product</a>
    <table class="table">
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        @foreach ($products as $p)
        <tr>
            <td>{{$p -> product_id}}</td>
            <td>{{$p -> name}}</td>
            <td>{{$p -> price}}</td>
            <td>{{$p -> stock}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>