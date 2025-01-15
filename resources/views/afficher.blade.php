<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <header>
        <h1>Se connecter</h1>
    </header>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <label>Login</label>
        <input type="text" name="login">
    </br>
        <label>Password</label>
        <input type="password" name="password">
</br>
</br>
       <center> <input type="submit" value="Se connecter"></input></center>
    </form>
</body>
</html>