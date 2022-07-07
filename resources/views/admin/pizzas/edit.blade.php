@extends('layouts.app')
@section('content')
<div class="container">
    <div>
        @if ($errors->any())
            <div class="col-8 offset-2 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <form id="edit" action="{{route('admin.pizzas.update', $pizza)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nome">nome</label>
          <input type="text"
          class="form-control @error('nome') is-invalid @enderror"
          id="nome"
          name="nome"
          placeholder="La tua Pizza"
          value="{{old('nome', $pizza->nome)}}">
          @error('nome')
          <p class="error-msg">{{$message}}</p>
          @enderror
        </div>

        <div class="form-group">
          <label for="prezzo">prezzo</label>
          <input type="text"
          class="form-control @error('prezzo') is-invalid @enderror"
          id="prezzo"
          name="prezzo"
          placeholder="Prezzo"
          value="{{old('prezzo', $pizza->prezzo)}}">
          @error('prezzo')
          <p class="error-msg">{{$message}}</p>
          @enderror
        </div>

        <div class="form-group">
          <label for="ingredienti">ingredienti</label>
          <textarea class="form-control @error('ingredienti') is-invalid
          @enderror"
          id="ingredienti"
          name="ingredienti"
          cols="30"
          rows="10">
          {{old('ingredienti', $pizza->ingredienti)}}</textarea>
          @error('ingredienti')
          <p class="error-msg">{{$message}}</p>
          @enderror
        </div>


        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              vegetariana
            </label>
          </div>
          {{-- @error('prezzo')
          <p class="error-msg">{{$message}}</p>
          @enderror --}}
          <button type="submit" class="btn btn-outline-primary">MODIFICA</button>
        </div>

      </form>
  </form>
</div>
@endsection

{{-- //@extends('layouts.app')
// @section('content')
// <div class="container">
//     <h1 class="mt-3 mb-4">Modifica Post</h1>
//     <div class="w-50">
//         <form action="{{ route('admin.posts.update', $post)}}" method="POST">
//             @csrf
//             @method('PUT')
//             <div class="mb-3">
//                 <label for="name" class="form-label sc-label">Titolo </label>
//                 <input type="text" id="name" name="title"
//                 value="{{$post->title }}"
//                 class="form-control"
//                 placeholder="Titolo">
//             </div>
//             <div class="mb-3">
//                 <label for="content" class="form-label">Contenuto</label>
//                 <textarea
//                 class="form-control"
//                 name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>
//             </div>
//             <button type="submit" class="btn btn-primary">Modifica</button>
//         </form>
//     </div>
// </div>
// @endsection --}}
