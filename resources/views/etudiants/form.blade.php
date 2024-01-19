<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Étudiant</title>
</head>
<body>
    @auth
    <p>Welcome, {{ Auth::user()->name }}</p>
@endauth
    <p> <a href="{{ route('logout') }}">Logout</a> </p>
    <h1>Formulaire Étudiant</h1>

    @if(isset($etudiant))
        <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
            @method('PUT')
            <input type="hidden" name="id" value="{{ $etudiant->id }}">
    @else
        <form action="{{ route('etudiants.store') }}" method="POST">
    @endif
            @csrf

            <!-- Etudiant fields -->
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="{{ isset($etudiant) ? $etudiant->nom : '' }}"><br>

            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" value="{{ isset($etudiant) ? $etudiant->prenom : '' }}"><br>

            <label for="sexe">Sexe:</label>
            <select id="sexe" name="sexe">
                <option value="homme" {{ isset($etudiant) && $etudiant->sexe === 'homme' ? 'selected' : '' }}>Homme</option>
                <option value="femme" {{ isset($etudiant) && $etudiant->sexe === 'femme' ? 'selected' : '' }}>Femme</option>
            </select><br>

            <label for="filiere_id">Filière:</label>
            <select name="filiere_id" id="filiere_id">
                @foreach($filieres as $filiere)
                    <option value="{{ $filiere->id }}" @if(isset($etudiant) && $etudiant->filiere_id == $filiere->id) selected @endif>{{ $filiere->nom }}</option>
                @endforeach
            </select><br>

            
           
            
            

            <input type="submit" value="{{ isset($etudiant) ? 'Mettre à jour' : 'Ajouter' }}">
        </form>

    <a href="{{ route('etudiants.index') }}">Retour à la liste des Étudiants</a>
</body>
</html>
