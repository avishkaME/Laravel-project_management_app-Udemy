@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-primary col-md-6 col-lg-6">
            <div class="panel-heading d-flex justify-content-between pb-2"><h3>projects</h3><a href="/projects/create" class="btn-sm btn btn-success">Add new project</a></div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach ($projects as $project)
                       <li class="list-group-item d-flex justify-content-between align-items-center">
                       <a href="/projects/{{ $project->id }}">{{ $project->name}} </a>
                        </li> 
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
    
@endsection