<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Profile</title>
</head>

<body>
    @include('layouts/navbar')
    <h1>Your Profile</h1>
    <p>Student ID: {{$student -> student_id}}</p>
    <h2>Personal information</h2>
    <ul>
        <li>Full name: {{$student -> last_name}}, {{$student -> first_name}}</li>
        <li>Birthdate: {{date_format($student -> birthdate, 'Y-m-d')}}</li>
        <li>Gender: {{$student -> gender}}</li>
        <li>Province: {{$student -> province}}</li>
    </ul>
    <h2>Enrollment information</h2>
    <ul>
        <li>Year level: {{$student -> year_level}}</li>
        <li>Date enrolled: {{date_format($student -> date_enrolled, 'Y-m-d')}}</li>
    </ul>
    <h2>Contact information</h2>
    <ul>
        <li>Mobile number: {{$student -> mobile_number}}</li>
        <li>Email address: {{$student -> email_address}}</li>
    </ul>
    <h1>Your Classes</h1>
    <table class="table">
        <tr>
            <th>Class ID</th>
            <th>Name of Subject</th>
            <th>Schedule</th>
            <th>Room</th>
        </tr>
        @foreach ($classes as $c)
        <tr>
            <td>{{$c -> class_id}}</td>
            <td>{{$c -> name}}</td>
            <td>{{$c -> schedule}}</td>
            <td>{{$c -> room}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>