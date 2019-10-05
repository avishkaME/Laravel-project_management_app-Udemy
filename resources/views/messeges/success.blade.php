@if (session()->has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        <li><strong>{!! session()->get('success') !!}</strong></li>
        
    </div>
    
@endif