<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Edit Student</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Edit Student</h1>
    <form action="/admin/students/{{$student -> student_id}}" method="POST">
        @csrf
        @method('PUT')
        <label>First name:</label>
        <input type="text" name="first_name" value="{{$student -> first_name}}"/><br/>
        <label>Last name:</label>
        <input type="text" name="last_name" value="{{$student -> last_name}}"/><br/>
        <label>Birthdate:</label>
        <input type="date" name="birthdate" value="{{date_format($student -> birthdate, 'Y-m-d')}}"/><br/>
        <label>Year level:</label>
        <input type="number" name="year_level" value="{{$student -> year_level}}"/><br/>
        <label>Gender:</label>
        <select name="gender">
            <option value="{{$student -> gender}}">{{$student -> gender}}</option>
            <option disabled>-----------</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br/>
        <label>Mobile number:</label>
        <input type="text" name="mobile_number" value="{{$student -> mobile_number}}"/><br/>
        <label>Email address:</label>
        <input type="email" name="email_address" value="{{$student -> email_address}}"/><br/>
        <label>Province:</label>
        <select name="province">
            <option value="{{$student -> province}}">{{$student -> province}}</option>
            <option disabled>-----------</option>
            <option value="La Union">La Union</option>
            <option value="Pangasinan">Pangasinan</option>
            <option value="Ilocos Sur">Ilocos Sur</option>
        </select><br/>
        <input type="submit" class="btn btn-success">
    </form>
</body>
</html>