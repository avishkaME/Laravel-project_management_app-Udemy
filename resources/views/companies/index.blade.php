@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-primary col-md-6 col-lg-6">
            <div class="panel-heading"><h3>Companies</h3></div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach ($companies as $company)
                       <li class="list-group-item d-flex justify-content-between align-items-center">
                       <a href="/companies/{{ $company->id }}">{{ $company->name}} </a>
                        </li> 
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
    
@endsection