@extends('layouts.app')

@section('content')

    <div class="col-md-6 col-lg-6">

        <div class="panel panel-primary">

            <div class="panel-heading">
                Projects
                @if(Auth::check())
                    <a href="/projects/create" class="pull-right bg-primary" style="padding: 0px 5px;border-radius: 3px;" >
                        Create
                    </a>
                @endif
            </div>

            <div class="panel-body">

            <ul class="list-group">

                @foreach($projects as $project)
                    <li class="list-group-item">
                        <a href="/projects/{{$project->id}}">
                            {{$project->name}}
                        </a>
                    </li>
                @endforeach

            </ul>

          </div>

        </div>

    </div>

@endsection
