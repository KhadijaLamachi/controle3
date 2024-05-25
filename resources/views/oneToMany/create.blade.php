@extends('layouts.layout')

@section('title', 'ajouter Auteur')

@section('content')
 <form class="form" method='post' action="{{route('cars.store')}}">
  @csrf
  <label for="">id : </label>
  <input type="number" name="id"><br>
 
  <label for="">marque : </label>
  <input type="text" name="marque"><br>
 
  <label for="">matricule : </label>
  <input type="text" name="matricule"><br>
  
  


  <button type="submit" class="btn btn-primary">Envoyer</button>
 </form>
@endsection