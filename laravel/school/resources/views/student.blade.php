<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <link rel="stylesheet" href="css/styles.css"/>
    <title>Students</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Students</h1>
    <p>Total students: {{$total_student -> total}} <a href="/students/create" class="btn btn-success"> + Add </a></p>
    <table class="table">
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Year level</th>
            <th>Province</th>
            <th>More Info</th>
        </tr>
        @foreach ($students as $s)
        <tr>
            <td>{{$s -> first_name}}</td>
            <td>{{$s -> last_name}}</td>
            <td>{{$s -> year_level}}</td>
            <td>{{$s -> province}}</td>
            <td><a href="/students/{{$s -> student_id}}" class="btn btn-primary">View</a></td>
        </tr>
        @endforeach
    </table>
    <h2>Male students:</h2>
    <table class="table">
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Gender</th>
            <th>Province</th>
        </tr>
        @foreach ($students_male as $sm)
        <tr>
            <td>{{$sm -> first_name}}</td>
            <td>{{$sm -> last_name}}</td>
            <td>{{$sm -> gender}}</td>
            <td>{{$sm -> province}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>