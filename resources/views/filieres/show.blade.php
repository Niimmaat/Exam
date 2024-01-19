<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Détails de la Filière</title>
</head>
<body>
    @auth
    <p>Welcome, {{ Auth::user()->name }}</p>
@endauth
    <p> <a href="{{ route('logout') }}">Logout</a> </p>
    <h1>Détails de la Filière</h1>

    <p><strong>Nom:</strong> {{ $filieres->nom }}</p>

    <a href="{{ route('filiere.index') }}">Retour à la liste des Filières</a>
    <a href="{{ route('filiere.edit', $filieres->id) }}">Modifier</a>
    <a href="{{ route('filiere.destroy', $filieres->id) }}">Supprimer</a>
</body>
</html>
