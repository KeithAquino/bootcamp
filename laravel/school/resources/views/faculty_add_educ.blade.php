<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Add Education Background</title>
</head>

<body>
    @include('layouts/navbar')
    <h1>Add Education Background</h1>
    <form action="/admin/faculties/{id}" method="POST">
        @csrf
        @method('PUT')
        <h1>Undergraduate</h1>
        <label>Has undergraduate degree:</label>
        <input type="number" name="has_unders" /><br />
        <label>Undergraduate school:</label>
        <input type="text" name="unders_enrolled" /><br />
        <label>Year received:</label>
        <input type="number" name="unders_year_received" /><br />

        <h1>Masters</h1>
        <label>Has masters degree:</label>
        <input type="number" name="has_masters" /><br />
        <label>Masters school:</label>
        <input type="text" name="masters_enrolled" /><br />
        <label>Year received:</label>
        <input type="number" name="masters_year_received" /><br />

        <h1>Doctors</h1>
        <label>Has doctors degree:</label>
        <input type="number" name="has_doctors" /><br />
        <label>Doctors school:</label>
        <input type="text" name="doctors_enrolled" /><br />
        <label>Year received:</label>
        <input type="number" name="doctors_year_received" /><br />
        <input type="submit" class="btn btn-success">
    </form>
</body>

</html>