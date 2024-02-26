@extends('layouts.principal')

@section('titulo', 'Cicles')

@section('contenido')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Sigles</th>
        <th scope="col">Nom</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cicles as $cicle)
      <tr>
        <th scope="row">{{ $cicle->getId() }}</th>
        <td>{{  $cicle->getSigles() }}</td>
        <td>{{  $cicle->getNom() }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
