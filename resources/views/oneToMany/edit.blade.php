@extends('layouts.layout')

@section('title', 'modifier Auteur')

@section('content')
 <form class="form" method='post' action="{{route('cars.update',$car->id)}}">
  @csrf
  @method("patch")
  <label for="">id : </label>
  <input type="number" name="id" value="{{$car->id}}"><br>
 
  <label for="">marque : </label>
  <input type="text" name="marque" value="{{$car->marque}}"><br>
 
  <label for="">matricule : </label>
  <input type="text" name="matricule" value="{{$car->matricule}}"><br>
  
  


  <button type="submit" class="btn btn-primary">Envoyer</button>
 </form>
@endsection