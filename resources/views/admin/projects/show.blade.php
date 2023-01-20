@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Qui si mostra</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ $project->cover_image ? asset('storage/' . $project->cover_image) : 'https://img.freepik.com/free-vector/illustration-data-folder-icon_53876-6329.jpg?w=2000'}}" class="card-img-top" alt="{{$project->name}}">
            <div class="card-body">
              <h5 class="card-title">{{$project->name}}</h5>
              <p class="card-text">{{$project->summary}}</p>
              <a class="my-1 btn btn-primary" href="{{route('admin.projects.show', $project)}}">Show</a>
                <a class="my-1 btn btn-warning" href="{{route('admin.projects.edit', $project)}}">Edit</a>
              <form onsubmit="return confirm('Vuoi eliminare : {{$project->name}}')"
                class="d-inline"
                action="{{route('admin.projects.destroy', $project)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                title="Delete">Delete</button>
            </form>
            </div>
          </div>
    </div>
@endsection
