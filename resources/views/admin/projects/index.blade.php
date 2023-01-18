@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1>Dash</h1>
            <a class="my-1 btn btn-success" href="{{route('admin.projects.create')}}">Create</a>
        </div>
        <table class="table text-white">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Client_name</th>
                <th scope="col">Summary</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($projects as $project)
              <tr class="text-warning">
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->name}}</td>
                <td>{{$project->client_name}}</td>
                <td>{{$project->summary}}</td>
                <td><img class="thumb" src="{{$project->cover_image}}" alt=""></td>
                <td class="d-flex flex-column ">
                    <a class="my-1 btn btn-primary" href="{{route('admin.projects.show', $project)}}">Show</a>
                    <a class="my-1 btn btn-warning" href="{{route('admin.projects.edit', $project)}}">Edit</a>
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="my-1 btn btn-danger">Delete</button>
                    </form>
                </td>
             </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection
