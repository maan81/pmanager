@extends('layouts.app')

@section('content')

    <div class="col-md-9">
        <!-- <pre>{{print_r($project)}}</pre> -->

        <!-- <pre>{{print_r($project->projects)}}</pre> -->

        <!-- Well -->
        <div class="well well-lg">
            <h1>{{$project->name}}!</h1>
            <p class="lead">{{$project->description}}</p>
            <!-- <p>
                <a class="btn btn-lg btn-success" href="#" role="button">Get started today</a>
            </p> -->
        </div>

        @if(Auth::check())
            <div class="pull-right">
                <a href="/projects/create" class="btn btn-default btn-sm">Add Project</a>
            </div>
        @endif

        <!-- Example row of columns -->
        <div class="row">
        </div>

    </div>

    <div class="blog-sidebar col-md-3">
        @if(Auth::check())
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/projects/create">Create Project</a></li>
                <li><a href="/projects/create">Create Company</a></li>
                <li><a href="/projects">My Project</a></li>
                <li><a href="/projects/{{$project->id}}/edit">Edit</a></li>
                @if(Auth::user()->id==$project->user_id)
                    <li>
                        <form method="post" action="/projects/{{$project->id}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-link"
                                style="padding: 0;margin: 0;"
                                name="delete" value="Delete"
                                onclick="if(!confirm('Are you sure delete project '+'{{$project->name}}'+'?')){return false;}"
                            />
                        </form>
                         <!--
                            <form method="post" action="{{route('projects.destroy',[$project->id])}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input type="submit" class="btn btn-link" style="padding: 0;margin: 0;" name="delete" value="Delete" />
                            </form>
                        -->
                        <!--
                            <form method="post" action="/projects/{{$project->id}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="button" class="btn btn-link" style="padding: 0;margin: 0;">Delete</button>
                            </form>
                        -->
                    </li>
                @endif
            </ol>
        </div>
        @endif
        <div class="sidebar-module">
            <h4>Memers</h4>
            <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
                <li><a href="#">February 2014</a></li>
                <li><a href="#">January 2014</a></li>
                <li><a href="#">December 2013</a></li>
                <li><a href="#">November 2013</a></li>
                <li><a href="#">October 2013</a></li>
                <li><a href="#">September 2013</a></li>
                <li><a href="#">August 2013</a></li>
                <li><a href="#">July 2013</a></li>
                <li><a href="#">June 2013</a></li>
                <li><a href="#">May 2013</a></li>
                <li><a href="#">April 2013</a></li>
            </ol>
        </div>
        <hr/>
        <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
                <li><a href="#">February 2014</a></li>
                <li><a href="#">January 2014</a></li>
                <li><a href="#">December 2013</a></li>
                <li><a href="#">November 2013</a></li>
                <li><a href="#">October 2013</a></li>
                <li><a href="#">September 2013</a></li>
                <li><a href="#">August 2013</a></li>
                <li><a href="#">July 2013</a></li>
                <li><a href="#">June 2013</a></li>
                <li><a href="#">May 2013</a></li>
                <li><a href="#">April 2013</a></li>
            </ol>
        </div>
    </div><!-- /.blog-sidebar -->

@endsection
