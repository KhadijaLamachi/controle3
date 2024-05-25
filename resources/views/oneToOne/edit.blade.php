@extends('layouts.layout')

@section('title', 'Modifier Voiture')

@section('content')
<div class="container m-4">
    <h1 class="mb-4">Modifier Voiture</h1>
    <form class="form" method="post" action="{{ route('cars.update', $car->id) }}">
        @csrf
        @method("patch")
        <div class="mb-3">
            <label for="id" class="form-label">ID :</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $car->id }}" readonly>
        </div>
        <div class="mb-3">
            <label for="marque" class="form-label">Marque :</label>
            <input type="text" class="form-control" id="marque" name="marque" value="{{ $car->marque }}">
        </div>
        <div class="mb-3">
            <label for="matricule" class="form-label">Matricule :</label>
            <input type="text" class="form-control" id="matricule" name="matricule" value="{{ $car->matricule }}">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
@endsection
