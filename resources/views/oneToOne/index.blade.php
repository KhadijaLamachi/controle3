@extends('layouts.layout')

@section('title', 'Voitures')

@section('content')

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show mx-5 mt-3" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="m-3">
  <table class="table table-striped" border="2px solid">
  <tr class="text text-center">
    <th>id</th>
    <th>marque</th> 
    <th>matricule</th>
    <th>action</th>    
   </tr>
   @foreach($cars as $car)
    <tr class="text text-center">
     <td>{{$car->id}}</td>
     <td>{{$car->marque}}</td>
     <td>{{$car->matricule}}</td>
     <td>
      
      <a href=""></a>
      <a href="{{route('cars.edit',$car->id)}}"><button class="btn btn-success">modiffier</button></a>
      <form class="d-inline-block" method="post" action="{{route('cars.destroy',$car)}}">
       @method('DELETE')
       @csrf
       <button class="btn btn-danger">supprimer</button>
      </form>
      <a href="{{route('cars.show',$car->id)}}"><button class="btn btn-warning">afficher owner</button></a>

    </td>
    </tr>
   @endforeach
  </table>

<a href="{{route('cars.create')}}"><button type="submit" class="btn btn-primary">ajouter</button></a>
</div>
@endsection