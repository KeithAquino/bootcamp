<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Add New Faculty</title>
</head>

<body>
    @include('layouts/navbar')
    <h1>Add New Faculty</h1>
    <form action="/faculties/{{$faculty -> faculty_id}}" method="POST">
        @csrf
        @method('PUT')
        <label>First name:</label>
        <input type="text" name="first_name" value="{{$faculty -> first_name}}" /><br />
        <label>Last name:</label>
        <input type="text" name="last_name" value="{{$faculty -> last_name}}"/><br />
        <label>Birthdate:</label>
        <input type="date" name="birthdate" value="{{date_format($faculty -> birthdate, 'Y-m-d')}}" /><br />
        <label>Gender:</label>
        <select name="gender">
        <option value="{{$faculty -> gender}}">{{$faculty -> gender}}</option>
            <option disabled>-----------</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br />
        <label>Mobile number:</label>
        <input type="text" name="mobile_number" value="{{$faculty -> mobile_number}}"/><br />
        <label>Email address:</label>
        <input type="email" name="email_address" value="{{$faculty -> email_address}}"/><br />
        <label>Position:</label>
        <select name="position">
            <option value="{{$faculty -> position}}">{{$faculty -> position}}</option>
            <option disabled>-----------</option>
            <option value="Lecturer 1">Lecturer 1</option>
            <option value="Lecturer 2">Lecturer 2</option>
            <option value="Professor 1">Professor 1</option>
            <option value="Professor 2">Professor 2</option>
        </select><br />
        <label>Department:</label>
        <select name="department">
            <option value="{{$faculty -> department}}">{{$faculty -> department}}</option>
            <option disabled>-----------</option>
            <option value="Computer">Computer</option>
            <option value="Science">Science</option>
            <option value="Social Science">Social Science</option>
            <option value="Filipino">Filipino</option>
            <option value="History">History</option>
            <option value="MAPEH">MAPEH</option>
            <option value="Mathematics">Mathematics</option>
            <option value="English">English</option>
        </select><br />
        <input type="submit" class="btn btn-success">
    </form>
</body>

</html>