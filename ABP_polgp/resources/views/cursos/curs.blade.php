@extends('layouts.principal')

@section('titulo', 'Cursos')

@section('contenido')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Sigles</th>
        <th scope="col">Nom</th>
        <th scope="col">Cicle</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cursos as $curs)
      <tr>
        <th scope="row">{{ $curs->getId() }}</th>
        <td>{{  $curs->getSigles() }}</td>
        <td>{{  $curs->getNom() }}</td>
        <td>{{  $curs->getSiglesCicle() }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection