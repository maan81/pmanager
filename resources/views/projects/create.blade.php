@extends('layouts.app')

@section('content')

    <!-- <pre><?php print_r($company);?></pre> -->


    <div class="col-md-6 col-lg-6">

        <form method="post" action="/projects" class="form-signin">

            {{csrf_field()}}

            <input type="hidden" name="company-id" value="{{$company->id}}">

            <div class="form-group">
                <label for="project-name" class="sr-only">Name</label>
                <input
                    type="text"
                    id="project-name"
                    name="project-name"
                    class="form-control"
                    placeholder="Project Name"
                    required autofocus
                    value=""
                >
            </div>

            <div class="form-group">
                <label for="project-description" class="sr-only">Description</label>
                <textarea
                    type="text"
                    id="project-description"
                    name="project-description"
                    class="form-control"
                    placeholder="Project Description"></textarea>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        </form>

    </div>

@endsection
