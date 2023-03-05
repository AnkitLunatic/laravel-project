<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>
<body>
<form autocomplete='off' class='form' action="{{action([\App\Http\Controllers\PagesController::class,'loginForm'])}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="password">
    <input type="submit">

</form>
<a href="Member.php" ></a>
</body>
</html>
