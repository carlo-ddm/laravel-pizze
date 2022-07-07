@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Index Crud</h1>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Ingredienti</th>
            <th scope="col">Vegetariana</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza)
            <tr>
              <th scope="row">{{$pizza->nome}}</th>
              <td >{{$pizza->prezzo}}</td>
              <td >{{$pizza->ingredienti}}</td>
              <td >{{$pizza->vegetariana}}</td>
              <td>
                  {{-- <a class="btn btn-outline-primary" href="{{route('admin.posts.show', $post)}}" >SHOW</a>
                  <a class="btn btn-outline-success" href="{{route('admin.posts.edit', $post)}}" >MODIFICA</a> --}}
            </td>
            </tr>
            @endforeach
        </tbody>
      </table>

</div>
@endsection
