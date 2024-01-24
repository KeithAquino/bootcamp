<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Add New Product</title>
</head>

<body>
    @include('layouts/navbar')
    <h1>Add New Product</h1>
    <form action="/admin/products" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" /><br />
        <label>Price:</label>
        <input type="number" name="price" /><br />
        <label>Stock:</label>
        <input type="number" name="stock" /><br />
        <label>Upload photo:</label>
        <input type="file" name="image"><br>
        <input type="submit" class="btn btn-success">
    </form>
</body>

</html>