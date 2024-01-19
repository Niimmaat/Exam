<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page d'accueil</title>
</head>
<body>
@auth
    <p>Welcome, {{ Auth::user()->name }}</p>
@endauth
    <p> <a href="{{ route('logout') }}">Logout</a> </p>
        <h1>page D'accueil</h1>
        <div>
            <a href="{{ route('filiere.index') }}">Liste des Filières</a>
        </div>
        <div>
            <a href="{{ route('etudiants.index') }}">Liste des Étudiants</a>
        </div>
</body>
</html>
