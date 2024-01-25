<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Add Faculty Education</title>
</head>

<body>
    @include('layouts/navbar')
    <h1>Add Faculty Education</h1>
    <form action="/admin/faculties/educ/{{$faculty -> faculty_id}}" method="POST">
        @csrf
        <h2>Undergraduate</h2>
        <label>Has undergraduates:</label>
        <select name="has_unders">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select><br />
        <label>Unders enrolled:</label>
        <input type="text" name="unders_enrolled" /><br />
        <label>Unders year received:</label>
        <input type="text" name="unders_year_received" /><br />

        <h2>Masters</h2>
        <label>Has Masters:</label>
        <select name="has_masters">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select><br />
        <label>Masters enrolled:</label>
        <input type="text" name="masters_enrolled" /><br />
        <label>Masters year received:</label>
        <input type="text" name="masters_year_received" /><br />

        <h2>Doctors</h2>
        <label>Has doctors:</label>
        <select name="has_doctors">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select><br />
        <label>Doctors enrolled:</label>
        <input type="text" name="doctors_enrolled" /><br />
        <label>Doctors year received:</label>
        <input type="text" name="doctors_year_received" /><br />

        <input type="submit" class="btn btn-success">
    </form>
</body>

</html>