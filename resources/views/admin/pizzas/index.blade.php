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
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza)
            <tr>
              <th scope="row">{{$pizza->nome}}</th>
              <td >{{$pizza->prezzo}}</td>
              <td >
                @forelse ($pizza->ingredients as $ingredient)
                    <span>{{$ingredient->nome}}</span>
                @empty
                     -
                @endforelse
              </td>
              <td >
                @if ($pizza->vegetariana == true)
                    <p>SI</p>
                @else
                    <p>NO</p>
                @endif
              </td>
              <td>
                  <a class="btn btn-outline-primary" href="{{route('admin.pizzas.show', $pizza)}}" >MOSTRA</a>
                  <a class="btn btn-outline-success" href="{{route('admin.pizzas.edit', $pizza)}}" >MODIFICA</a>
            </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      {{$pizzas->links()}}
</div>
@endsection
