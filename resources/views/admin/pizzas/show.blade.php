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

                {{-- <a class="btn btn-outline-dark" href="{{route('admin.posts.index')}}">BACK</a> --}}
                {{-- <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">DELETE</button>
                </form> --}}
              </td>
            </tr>

        </tbody>
      </table>
</div>

@endsection
