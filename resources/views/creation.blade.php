<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <h1>Creation du compte</h1>
    <form method="POST" action="{{route('retraite.store')}}">
        @csrf
        <h2>Ajouter Compte</h2>
        <div>
            <label for="nom">Nom Complet</label>
            <input type="text"  name="name" required>
            @error('name')
            {{$message}}
        @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email"  name="email" required>
            @error('email')
            {{$message}}
        @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
            @error('password')
            {{$message}}
        @enderror
        </div>

        <div>
            <button type="submit">Creer mon compte</button>
        </div>
    </form>
</body>
</html>
