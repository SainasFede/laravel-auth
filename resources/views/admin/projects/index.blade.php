@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dash</h1>
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
             </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection
