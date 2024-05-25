@extends('layouts.layout')

@section('title', 'owner')

@section('content')
  <div class="row m-5">
   <div class="col-sm-4 mb-3 mb-sm-0">
     <div class="card">
       <div class="card-body">
         <h5 class="card-title">{{$owner->id}}</h5>
         <h2 class="card-text">{{$owner->nom}}</h2>
         <p class="card-text">{{$owner->date_naissance}}</p>
         <a href="{{route('cars.index')}}" class="btn btn-primary">retour</a>
       </div>
     </div>
   </div>
  </div>

  @endsection