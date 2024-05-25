@extends('layouts.layout')

@section('title', 'Auteurs')

@section('content')
  <table class="table table-striped" border="2px solid">
  <tr class="text text-center">
    <th>id</th>
    <th>nom</th> 
    <th>date_naissance</th>
    <th>action</th>    
   </tr>
   @foreach($auteurs as $auteur)
    <tr class="text text-center">
     <td>{{$auteur->id}}</td>
     <td>{{$auteur->nom}}</td>
     <td>{{$auteur->date_naissance}}</td>
     <td>
      <a href=""><button class="btn btn-success">modiffier</button></a>
      <form class="d-inline-block" method="post" action="{{route('auteurs.destroy',$auteur->id)}}">
       @method('DELETE')
       @csrf
       <button class="btn btn-danger">supprimer</button>
      </form>
      <a href="{{route('auteurs.show',$auteur->id)}}"><button class="btn btn-warning">afficher livres</button></a>
    </td>
    </tr>
   @endforeach
  </table>

<a href=""><button type="submit" class="btn btn-primary">ajouter</button></a>

@endsection