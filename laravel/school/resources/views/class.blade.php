<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Classes</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Classes per department</h1>
    <table class="table">
        <tr>
            <th>Department</th>
            <th>Number of classes</th>
        </tr>
    @foreach ($classes_dept as $cd)
        <tr>
            <td>{{$cd -> department}}</td>
            <td>{{$cd -> total_classes}}</td>
        </tr>
    @endforeach
    </table>

    <h1>All Classes</h1>
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
</body>
</html>