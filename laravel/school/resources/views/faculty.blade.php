<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Faculties</title>
</head>

<body>
    @include('layouts/navbar')
    <h1>Faculties List</h1>
    <a href="faculties/create" class="btn btn-success">+ Add</a>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Depatment</th>
            <th>Faculty ID</th>
            <th>Add Educ</th>
            <th>View Entry</th>
            <th>Edit Entry</th>
            <th>Delete Entry</th>
        </tr>
        @foreach ($faculties as $f)
        <tr>
            <td>{{$f -> last_name}}, {{$f -> first_name}}</td>
            <td>{{$f -> department}}</td>
            <td>{{$f -> faculty_id}}</td>
            <td><a href="/admin/faculties/educ/{{$f -> faculty_id}}" class="btn btn-dark">Add</a>
            <td><a href="/admin/faculties/{{$f -> faculty_id}}" class="btn btn-primary">View</a></td>
            <td><a href="/admin/faculties/edit/{{$f -> faculty_id}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="/admin/faculties/{{$f -> faculty_id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete" />
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <h1>Faculties Data</h1>
    <h2>Department</h2>
    <table class="table">
        <tr>
            <th>Department</th>
            <th>Total Faculty</th>
        </tr>
        @foreach ($faculties_dept as $fd)
        <tr>
            <td>{{$fd -> department}}</td>
            <td>{{$fd -> total_faculty}}</td>
        </tr>
        @endforeach
    </table>

    <h2>Promotions</h2>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Academe Points</th>
        </tr>
        @foreach ($faculties_points as $fp)
        <tr>
            <td>{{$fp -> last_name}}, {{$fp -> first_name}} {{$fp -> last_name . ", " . $fp -> first_name}}</td>
            <td>{{$fp -> academe_points}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>