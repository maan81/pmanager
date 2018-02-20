@extends('layouts.app')

@section('content')

    <div class="col-md-6 col-lg-6">

        <form method="post" action="/companies" class="form-signin">

            {{csrf_field()}}

            <div class="form-group">
                <label for="company-name" class="sr-only">Name</label>
                <input
                    type="text"
                    id="company-name"
                    name="company-name"
                    class="form-control"
                    placeholder="Company Name"
                    required autofocus
                    value=""
                >
            </div>

            <div class="form-group">
                <label for="company-description" class="sr-only">Description</label>
                <textarea
                    type="text"
                    id="company-description"
                    name="company-description"
                    class="form-control"
                    placeholder="Company Description"></textarea>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        </form>

    </div>

@endsection
