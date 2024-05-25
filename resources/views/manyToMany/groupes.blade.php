@extends('layouts.layout')

@section('title', 'Groupes')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Groupes de {{ $formateur->nom }}</h1>

    @if ($groupes->isEmpty())
        <div class="alert alert-warning">
            <p>Ce formateur n'a pas encore de groupes assignés.</p>
        </div>
    @else
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Intitulé</th>
                    <th>Nombre de Stagiaires</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($groupes as $groupe)
                    <tr>
                        <td>{{ $groupe->intitule }}</td>
                        <td>{{ $groupe->nbr_stagiaires }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
