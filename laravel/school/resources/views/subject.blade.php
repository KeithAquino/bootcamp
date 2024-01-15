<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Home</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Subjects</h1>
    <table class="table">
        <tr>
            <th>Subject ID</th>
            <th>Subject Name</th>
            <th>Department</th>
        </tr>
        @foreach ($subjects as $s)
        <tr>
            <td>{{$s -> subject_id}}</td>
            <td>{{$s -> name}}</td>
            <td>{{$s -> department}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>