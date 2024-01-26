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
            <td><img src="/img/products/{{$o -> image}}" style="height: 30px" /></td>
        </tr>
        @endforeach
    </table>
    <h2>Grand total: ₱{{$grand_total -> grand_total}}</h2>
    <h2>Recipient Info</h2>
    <img src="/img/user_profiles/{{$user_info -> image}}" width="100px" />
    <ul>
        <li>Name: {{$user_info -> last_name}}, {{$user_info -> first_name}}</li>
        <li>Address: {{$user_info -> province}}</li>
        <li>Contact number: {{$user_info -> mobile_number}}</li>
    </ul>
    <h2>Update Order Status</h2>
    <p>Status: {{$user_info -> status}}</p>
    @if ($user_info -> status == "waiting")
    <form action="/admin/orders/accept/{{$orders[0] -> order_id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="submit" class="btn btn-success" value="Accept Order" />
    </form>
    @else
    <form action="/admin/orders/status/{{$orders[0] -> order_id}}" method="POST">
        @csrf
        @method('PUT')
        <select name="status">
            <option value="accepted">Accepted</option>
            <option value="preparing">Preparing</option>
            <option value="delivering">Delivering</option>
            <option value="delivered">Delivered</option>
        </select>
        <input type="submit" class="btn btn-success" value="Update Status" />
    </form>
    @endif
</body>

</html>