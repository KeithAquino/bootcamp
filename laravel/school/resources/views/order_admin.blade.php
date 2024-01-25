<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Orders</title>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/messages')
    <h1>Orders</h1>
    <table class="table">
        <tr>
            <th>Order ID</th>
            <th>Time Placed</th>
            <th>Status</th>
            <th>User ID</th>
            <th>Name</th>
        </tr>
        @foreach ($orders as $o)
        <tr>
            <td>{{$o -> order_id}}</td>
            <td>{{$o -> time_placed}}</td>
            <td>{{$o -> status}}</td>
            <td>{{$o -> user_id}}</td>
            <td>{{$o -> last_name}}, {{$o -> first_name}}</td>
            <td><a href="/admin/orders/{{$o -> order_id}}" class="btn btn-success">View</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>