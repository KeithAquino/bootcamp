<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Faculties</title>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/messages')
    <h1>Faculties List</h1>
    <p>Total faculties: {{$total_faculty -> total}} <a href="/faculties/create" class="btn btn-success"> + Add </a> </p>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Depatment</th>
            <th>Faculty ID</th>
            <th>More Info</th>
            <th>Edit Entry</th>
            <th>Delete Entry</th>
        </tr>
        @foreach ($faculties as $f)
        <tr>
            <td>{{$f -> last_name}}, {{$f -> first_name}}</td>
            <td>{{$f -> department}}</td>
            <td>{{$f -> faculty_id}}</td>
            <td><a href="/faculties/{{$f -> faculty_id}}" class="btn btn-primary">View</a></td>
            <td><a href="/faculties/edit/{{$f -> faculty_id}}" class="btn btn-warning">Edit</a></td>
            <td>
                <a data-bs-toggle="modal" data-bs-target="#delete_{{$f -> faculty_id}}" class="btn btn-danger">Delete</a>
            </td>

            <div class="modal fade" id="delete_{{$f -> faculty_id}}" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete {{$f -> last_name}}, {{$f -> first_name}}? ({{$f -> faculty_id}})</h5>
                            <button class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">Once this action is taken, it cannot be undone.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form action="/faculties/{{$f -> faculty_id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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