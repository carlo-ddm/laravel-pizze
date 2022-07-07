@extends('layouts.app')
@section('content')
<div class="container">
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
            <tr>
                <th scope="row">{{$pizza->nome}}</th>
                <td >{{$pizza->prezzo}}</td>
                <td >{{$pizza->ingredienti}}</td>
                <td >
                  @if ($pizza->vegetariana == true)
                      <p>SI</p>
                  @else
                      <p>NO</p>
                  @endif
                </td>
                <td>
                    <form action="{{route('admin.pizzas.destroy', $pizza)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">CANCELLA</button>
                    </form>
              </td>
              </tr>
        </tbody>
      </table>
</div>

@endsection
