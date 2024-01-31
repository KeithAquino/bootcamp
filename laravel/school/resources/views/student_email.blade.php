<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Send Email</title>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/messages')
    <h1>Send Email to {{$student_email -> last_name}}, {{$student_email -> first_name}} ({{$student_email -> email_address}})</h1>
    <form action="/admin/students/send/{{$student_email -> student_id}}" method="POST">
        @csrf
        <label>Subject</label><br>
        <input type="text" class="form-control" name="email_subject">
        <label>Email contents:</label><br>
        <textarea class=" form-control" name="email_body" rows="4"></textarea>
        <input type="submit" class="btn btn-success">
    </form>
</body>

</html>