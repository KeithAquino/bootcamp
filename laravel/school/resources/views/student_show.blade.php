<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Show Student</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Student ID: {{$student -> student_id}}</h1>
    <h2>Personal information</h2>
    <ul>
        <li>Full name: {{$student -> last_name}}, {{$student -> first_name}}</li>
        <li>Birthdate: {{date_format($student -> birthdate, 'Y-m-d')}}</li>
        <li>Gender: {{$student -> gender}}</li>
        <li>Province: {{$student -> province}}</li>
    </ul>
    <h2>Enrollment information</h2>
    <ul>
        <li>Year Level: {{$student -> year_level}}</li>
        <li>Date enrolled: {{date_format($student -> date_enrolled, 'Y-m-d')}}</li>
    </ul>
    <h2>Contact information</h2>
    <ul>
        <li>Mobile number: {{$student -> mobile_number}}</li>
        <li>Email address: {{$student -> email_address}}</li>
    </ul>
</body>
</html>