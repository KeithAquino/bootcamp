<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Add New Student</title>
</head>

<body>
    @include('layouts/navbar')
    <h1>Add New Student</h1>
    <form action="/admin/students" method="POST">
        @csrf
        <label>First name:</label>
        <input type="text" name="first_name" /><br />
        <label>Last name:</label>
        <input type="text" name="last_name" /><br />
        <label>Birthdate:</label>
        <input type="date" name="birthdate" /><br />
        <label>Year level:</label>
        <input type="number" name="year_level" /><br />
        <label>Gender:</label>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br />
        <label>Mobile number:</label>
        <input type="text" name="mobile_number" /><br />
        <label>Email address:</label>
        <input type="email" name="email_address" /><br />
        <label>Province:</label>
        <select name="province">
            <option value="La Union">La Union</option>
            <option value="Pangasinan">Pangasinan</option>
            <option value="Ilocos Sur">Ilocos Sur</option>
        </select><br />
        <input type="submit" class="btn btn-success">
    </form>
</body>

</html>