@extends('layouts.app')

@section('content')

    <!-- <pre><?php print_r($project)?>></pre> -->

    <div class="col-md-6 col-lg-6">

        <form method="post" action="/projects/{{$project->id}}" class="form-signin">

            {{csrf_field()}}

            {{method_field('PUT')}}

            <div class="form-group">
                <label for="project-name" class="sr-only">Name</label>
                <input
                    type="text"
                    id="project-name"
                    name="project-name"
                    class="form-control"
                    placeholder="Company Name"
                    required autofocus
                    value="{{$project->name}}"
                >
            </div>

            <div class="form-group">
                <label for="project-description" class="sr-only">Description</label>
                <textarea
                    type="text"
                    id="project-description"
                    name="project-description"
                    class="form-control"
                    placeholder="Company Description">{{$project->description}}</textarea>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        </form>

        <!-- <div class="panel panel-primary">

            <div class="panel-heading">Projects</div>

            <div class="panel-body">

            <ul class="list-group">

                <?php
                // @foreach($projects as $project)
                //     <li class="list-group-item">
                //         <a href="/projects/{{$project->id}}">
                //             {{$project->name}}
                //         </a>
                //     </li>
                // @endforeach
                ?>

            </ul>

          </div>

        </div> -->

    </div>

@endsection
