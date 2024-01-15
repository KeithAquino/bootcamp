<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Add New Faculty</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Add New Faculty</h1>
    <form action="/faculties" method="POST">
        @csrf
        <label>First name:</label>
        <input type="text" name="first_name"/><br/>
        <label>Last name:</label>
        <input type="text" name="last_name"/><br/>
        <label>Birthdate:</label>
        <input type="date" name="birthdate"/><br/>
        <label>Gender:</label>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br/>
        <label>Mobile number:</label>
        <input type="text" name="mobile_number"/><br/>
        <label>Email address:</label>
        <input type="email" name="email_address"/><br/>
        <label>Position</label>
        <input type="text" name="position"/><br/>
        <label>Department:</label>
        <select name="department">
            <option value="Computer">Computer</option>
            <option value="English">English</option>
            <option value="Filipino">Filipino</option>
            <option value="History">History</option>
            <option value="MAPEH">MAPEH</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Science">Science</option>
            <option value="Social Science">Social Science</option>
        </select><br/>
        <input type="submit" class="btn btn-success">
    </form>
</body>
</html>