<div class="jumbotron">
    <h3>Comments</h3>
    <hr>
    <div class="container">
        @foreach ($comments as $comment)
        <div class="col-lg-6 col-md-6 col-sm-6 m-3" style="background: white;">
            <h2>{{ $comment->body}}</h2>
            <p> {{ $comment->url}}</p>
            <p>By: <a href="users/{{ $comment->user->id}}">{{ $comment->user->name }}</a> </p>
            <small>On: {{ $comment->created_at}}</small>
            <p><a class="btn btn-secondary mb-2" href="/projects/{{$project->id}}" role="button">project details »</a>
            </p>
        </div><!-- /.col-lg-4 -->
        @endforeach
    </div>
</div>