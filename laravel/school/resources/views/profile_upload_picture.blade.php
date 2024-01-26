<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Upload Profile Picture</title>
</head>

<body>
    @include('layouts/navbar')
    <h1>Upload Profile Picture</h1>
    <form action="/profile/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="profile_picture" /><br />
        <input type="submit" class="btn btn-success mt-3" />
    </form>
</body>

</html>