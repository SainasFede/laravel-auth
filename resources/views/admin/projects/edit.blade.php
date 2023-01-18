@extends('layouts.app')

@section('content')
    <h1>Qui si modifica</h1>
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1 class="d-inline">Modifica Progetto</h1>
            <div>
                <a class="btn btn-success" href="{{route('admin.projects.index')}}">Torna all'elenco Progetti</a>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <h6>Errore</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
          </div>
        @endif

        <form action="{{route('admin.projects.update', $project)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name"class="form-label"><strong>Nome Progetto</strong></label>
                <input type="text"
                name="name"
                value="{{old('name', $project->name)}}"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                placeholder="Scrivi il titolo">
                @error('name')
                <div class="invalid-feedback">
                  <h6>{{$message}}</h6>
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="summary" class="form-label"><strong>Sommario</strong></label>
                <textarea class="form-control @error('summary') is-invalid @enderror"
                name="summary"
                id="summary"
                rows="5">{{old('summary', $project->summary)}}</textarea>
                @error('summary')
                <div class="invalid-feedback">
                  <h6>{{$message}}</h6>
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label"><strong>Immagine</strong></label>
                <input type="text"
                name="cover_image"
                value="{{old('cover_image', $project->cover_image)}}"
                class="form-control @error('cover_image') is-invalid @enderror"
                id="cover_image"
                placeholder="Inserisci percorso">
                @error('cover_image')
                <div class="invalid-feedback">
                  <h6>{{$message}}</h6>
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label"><strong>Nome Cliente</strong></label>
                <input type="text"
                name="client_name"
                value="{{old('client_name', $project->client_name)}}"
                class="form-control @error('client_name') is-invalid @enderror"
                id="client_name"
                placeholder="Quanto costa">
                @error('client_name')
                <div class="invalid-feedback">
                  <h6>{{$message}}</h6>
                </div>
                @enderror
            </div>
              <button type="submit" class="btn btn-primary mb-5">Modifica</button>
        </form>

    </div>
@endsection
