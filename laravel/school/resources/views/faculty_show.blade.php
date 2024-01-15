<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Show Faculty</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Faculty ID: {{$faculty -> faculty_id}}</h1>
    <h2>Personal information</h2>
    <ul>
        <li>Full name: {{$faculty -> last_name}}, {{$faculty -> first_name}}</li>
        <li>Birthdate: {{date_format($faculty -> birthdate, 'Y-m-d')}}</li>
        <li>Gender: {{$faculty -> gender}}</li>
    </ul>
    <h2>Department information</h2>
    <ul>
        <li>Position: {{$faculty -> position}}</li>
        <li>Department: {{$faculty -> department}}</li>
        <li>Date entered: {{date_format($faculty -> date_entered, 'Y-m-d')}}</li>
    </ul>
    <h2>Contact information</h2>
    <ul>
        <li>Mobile number: {{$faculty -> mobile_number}}</li>
        <li>Email address: {{$faculty -> email_address}}</li>
</body>
</html>