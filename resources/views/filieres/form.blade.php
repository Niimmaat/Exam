<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Filière</title>
</head>
<body>
    @auth
    <p>Welcome, {{ Auth::user()->name }}</p>
@endauth
    <p> <a href="{{ route('logout') }}">Logout</a> </p>
    <h1>Formulaire de Filière</h1>

    @if(isset($filiere))
        <form action="{{ route('filiere.update', $filiere->id) }}" method="POST">
            @method('PUT')
            <input type="hidden" name="id" value="{{ $filiere->id }}">
    @else
        <form action="{{ route('filiere.store') }}" method="POST">
    @endif
            @csrf
            <label for="nom">Nom de la Filière:</label>
            <input type="text" id="nom" name="nom" value="{{ isset($filiere) ? $filiere->nom : '' }}"><br>

            <input type="submit" value="{{ isset($filiere) ? 'Mettre à jour' : 'Ajouter' }}">
        </form>

    <a href="{{ route('filiere.index') }}">Retour à la liste des Filières</a>
</body>
</html>
