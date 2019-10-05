@if (isset($errors) && count($errors)>0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        @foreach ($errors->all() as $error)
            <li><strong>{!! $error !!}</strong></li>
        @endforeach
    </div>
    
@endif