<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Home</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Login</h1>
    <form>
        <label>Email address: </label>
        <input type="email" name="email"/><br/>
        <label>Password: </label>
        <input type="password" name="pw"/><br/>
        <input type="submit" class="btn btn-primary"/>
    </form>
</body>
</html>