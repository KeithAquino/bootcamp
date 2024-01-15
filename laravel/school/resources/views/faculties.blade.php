<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Faculties</title>
</head>
<body>
    @include('layouts/navbar')
    <img src="https://external-preview.redd.it/p9_LBMMn22djOrg9XGS2wIcQh2zRyBELz6zhmSUZUSg.jpg?auto=webp&s=6ae3d505c2f1ff1b15122036003fee77b283615e" class="img-fluid" width="400px" alt="ISCP logo"/>
    <h1>Faculties List</h1>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Faculty ID</th>
        </tr>
    @foreach ($faculties as $f)
        <tr>
            <td>{{$f -> last_name}}, {{$f -> first_name}}</td>
            <td>{{$f -> department}}</td>
            <td>{{$f -> faculty_id}}</td>
        </tr>
    @endforeach
    </table>
    <h1>Faculty Data</h1>
    <h2>Departments</h2>
    <table class="table">
        <tr>
            <th>Department</th>
            <th>Total Faculty</th>
        </tr>
    @foreach ($faculty_data as $fd)
        <tr>
            <td>{{$fd -> department}}</td>
            <td>{{$fd -> total}}</td>
        </tr>
    @endforeach
    </table>
    <h2>Promotions</h2>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Academe Points</th>
        </tr>
    @foreach ($faculty_points as $fp)
        <tr>
            <td>{{$fp -> last_name}}, {{$fp -> first_name}}</td>
            <td>{{$fp -> academe_points}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>