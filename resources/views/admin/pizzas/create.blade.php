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

    <form id="crate" action="{{route('admin.pizzas.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nome">nome</label>
          <input type="text"
          class="form-control @error('nome') is-invalid @enderror"
          id="nome"
          name="nome"
          placeholder="La tua Pizza"
          value="{{old('nome')}}">
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
          value="{{old('prezzo')}}">
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
          rows="10"
          value="{{old('ingredienti')}}"></textarea>
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
          <button type="submit" class="btn btn-outline-primary">CREA</button>
        </div>

      </form>
  </form>
</div>

@endsection
