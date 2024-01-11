<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Classes</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Classes</h1>
    <table class="table">
        <tr>
            <th>Class ID</th>
            <th>Schedule</th>
            <th>Room</th>
            <th>Subject name</th>
        </tr>
    @foreach ($classes as $c)
        <tr>
            <td>{{$c -> class_id}}</td>
            <td>{{$c -> schedule}}</td>
            <td>{{$c -> room}}</td>
            <td>{{$c -> name}}</td>
        </tr>
    @endforeach
    </table>  
</body>
</html>