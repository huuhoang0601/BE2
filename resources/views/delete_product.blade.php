<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="{{ url('/product/'.$id) }}" method="post">
        @method('DELETE')
        @csrf
        name <input type="text" name="" id=""> <br>
        <input type="submit" value="Delete Product">
    </form>
</body>
</html>