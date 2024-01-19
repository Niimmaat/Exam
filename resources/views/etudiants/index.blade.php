<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Étudiants</title>
</head>
<body>
    @auth
    <p>Welcome, {{ Auth::user()->name }}</p>
@endauth
    <p> <a href="{{ route('logout') }}">Logout</a> </p>
    <h1>Liste des Étudiants</h1>
    <ul>
        @foreach($data as $etudiant)
            <li>
               <a href="{{ route('etudiants.show', $etudiant->id) }}"> {{ $etudiant->nom }} {{ $etudiant->prenom }} </a>
            </li>
        @endforeach
    </ul>
    <h2><a href="{{ route('etudiants.create') }}">Ajouter un étudiant</a></h2>
    <h2><a href="{{ route('index') }}">Return vers page d'accueil </a></h2>
</body>
</html>
