<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'Étudiant</title>
</head>
<body>
    @auth
    <p>Welcome, {{ Auth::user()->name }}</p>
@endauth
    <p> <a href="{{ route('logout') }}">Logout</a> </p>
    <h1>Détails de l'Étudiant</h1>
    <p><strong>Nom:</strong> {{ $etudiant->nom }}</p>
    <p><strong>Prénom:</strong> {{ $etudiant->prenom }}</p>
    <p><strong>Sexe:</strong> {{ $etudiant->sexe }}</p>
    <p><strong>Filière:</strong> {{ $etudiant->filiere->nom }}</p>

    <a href="{{ route('etudiants.index') }}">Retour à la liste des Étudiants</a>

    <a href="{{ route('etudiants.edit', $etudiant->id) }}">Modifier</a>
    <a href="{{ route('etudiants.destroy', $etudiant->id) }}">Supprimer</a>

</body>
</html>
