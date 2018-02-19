<!-- <pre><?php var_dump(session()->has('errors'))?></pre> -->
@if(session()->has('errors'))

    <div class="alert alert-dissimissable alert-danger show">

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        @foreach($errors->all() as $error)
            <li>
                <strong>{{$error}}</strong>
            </li>
        @endforeach
    </div>

@endif
