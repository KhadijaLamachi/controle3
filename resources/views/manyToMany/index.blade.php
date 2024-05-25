@extends('layouts.layout')

@section('title', 'Formateurs')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Liste des Formateurs</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>CIN</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formateurs as $formateur)
                <tr>
                    <td>{{ $formateur->nom }}</td>
                    <td>{{ $formateur->cin }}</td>
                    <td>{{ $formateur->email }}</td>
                    <td>
                        <a href="{{ route('groupes', $formateur) }}" class="btn btn-primary">Afficher ses groupes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
