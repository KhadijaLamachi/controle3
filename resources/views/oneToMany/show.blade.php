@extends('layouts.layout')

@section('title', 'Livres')

@section('content')
  <div class="row d-flex">
    @foreach($livres as $livre)
      <div class="col-sm-3 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{$livre->id}}</h5>
            <h2 class="card-text">{{$livre->titre}}</h2>
            <p class="card-text">{{$livre->date_publication}}</p>
            <p class="card-text">{{$livre->prix}}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <a href="{{route('auteurs.index')}}" class="btn btn-primary">retour</a>

  @endsection