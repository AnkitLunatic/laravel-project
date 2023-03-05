<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="{{action([\App\Http\Controllers\PagesController::class,'store'])}}">
    @csrf
    <label for="">Name:</label>
    <input type="text" name="name" required>
    <label for="">Address</label>
    <input type="text" name="address" required>
    <label for="">Age:</label>
    <input type="number" name="age" required>
    <label for="">Image:</label>
    <input type="file" name="image" required>
    <input type="submit">
</form>
</body>
</html>

