@extends('layouts.app')
@section('content')
<h1>Modifier employé</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="{{ url('employe/'. $employe->id) }}">
    @method('PATCH')
    @csrf
    <div class="form-group mb-3">
        <label for="nom">Nom:</label>
        <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom"
            value="{{ $employe->nom }}">
    </div>
    <div class="form-group mb-3">
        <label for="prénom">Prénom:</label>
        <input type="text" class="form-control" id="prenom" placeholder="Entrer prenom" name="prenom" value="{{ $employe->prenom 
}}">
    </div>
    <div class="form-group mb-3">
        <label for="company">Company:</label>
        <input type="text" class="form-control" id="societe" placeholder="Entrer Societe" name="societe" value="{{ $employe->societe 
}}">
    </div>
    <div class="form-group mb-3">
        <label for="fortune">SALAIRE (DH):</label>
        <input type="number" class="form-control" id="salaire" placeholder="Salaire" name="salaire"
            value="{{ $employe->salaire }}">
    </div>
    <div class="form-group mb-3">
        <label for="detail">Adresse:</label>
        <textarea class="form-control" id="ville" name="ville" rows="10"
            placeholder="Ville">{{ $employe->ville }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
@endsection