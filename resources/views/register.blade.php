<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    <title>Register </title>
</head>
<body>
<div class="container">
    <p class="login-text">Resister</p>
    <form class="login-email" action="{{action([\App\Http\Controllers\PagesController::class,'register'])}}" method="POST" >
        @csrf
        <div class="input-group">
            <input type="text" name="name" placeholder="username" required>
        </div>
        <div class="input-group">
            <input name="email" type="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input name="password" type="password" placeholder="Password" required>
        </div>
        <div class="input-group" name="password">
            <input name="c_password" type="password" placeholder="Confirm Password" required>
        </div>
        <div class="input-group">
            <button class="btn">Sign in</button>
        </div>
    </form>
</div>
</body>
</html>
