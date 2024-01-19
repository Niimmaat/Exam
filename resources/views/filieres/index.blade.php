<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des Filières</title>
</head>
<body>
    @auth
    <p>Welcome, {{ Auth::user()->name }}</p>
@endauth
    <p> <a href="{{ route('logout') }}">Logout</a> </p>
    <h1>Liste des Filières</h1>

    <ul>
        @foreach($filieres as $filiere)
            <li>
                <a href="{{ route('filiere.show', $filiere->id) }}">
                    {{ $filiere->nom }}
                </a>
            </li>
        @endforeach
    </ul>
    <h2><a href="{{ route('filiere.create') }}">Ajouter un filiere</a></h2>
    <h2><a href="{{ route('index') }}">Return vers page d'accueil </a></h2>
</body>
</html>
