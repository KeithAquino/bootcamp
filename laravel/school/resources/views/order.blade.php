<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>My Orders</title>
</head>

<body>
    @include('layouts/messages')
    @include('layouts/navbar')
    <h1>My Orders</h1>
    @if (count($orders) > 0)
    <table class="table">
        <tr>
            <th>Order ID</th>
            <th>Time Placed</th>
            <th>Status</th>
            <th>View Items</th>
        </tr>
        @foreach ($orders as $o)
        <tr>
            <td>{{$o -> order_id}}</td>
            <td>{{$o -> time_placed}}</td>
            <td>{{$o -> status}}</td>
            <td><a href="/orders/{{$o -> order_id}}" class="btn btn-success">View</a></td>
        </tr>
        @endforeach
    </table>
    @else
    <p>No Orders yet! <a href="/cafeteria">Go to the cafeteria.</a></p>
    @endif
</body>

</html>