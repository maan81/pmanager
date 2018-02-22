@extends('layouts.app')

@section('content')

    <div class="col-md-9">
        <!-- <pre>{{print_r($company)}}</pre> -->

        <!-- <pre>{{print_r($company->projects)}}</pre> -->

        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>{{$company->name}}!</h1>
            <p class="lead">{{$company->description}}</p>
            <!-- <p>
                <a class="btn btn-lg btn-success" href="#" role="button">Get started today</a>
            </p> -->
        </div>

        @if(Auth::check())
            <div class="pull-right">
                <a href="/projects/create/{{$company->id}}" class="btn btn-default btn-sm">Add Project</a>
            </div>
        @endif

        <!-- Example row of columns -->
        <div class="row">
            @foreach($company->projects as $project)
                <div class="col-lg-4">
                    <h2>{{$project->name}}</h2>
                    <!-- <p class="text-danger">As of v9.1.2, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p> -->
                    <p>{{$project->description}}</p>
                    <p>
                        <a class="btn btn-primary" href="/projects/{{$company->id}}" role="button">View details &raquo;</a>
                    </p>
                </div>
                <!-- <div class="col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p>
                        <a class="btn btn-primary" href="#" role="button">View details &raquo;</a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                    <p>
                        <a class="btn btn-primary" href="#" role="button">View details &raquo;</a>
                    </p>
                </div> -->
            @endforeach
        </div>

    </div>

    <div class="blog-sidebar col-md-3">
        @if(Auth::check())
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/projects/create/{{$company->id}}">Create Project</a></li>
                <li><a href="/companies/create">Create Company</a></li>
                <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
                <li>
                    <form method="post" action="/companies/{{$company->id}}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input type="submit" class="btn btn-link"
                            style="padding: 0;margin: 0;"
                            name="delete" value="Delete"
                            onclick="if(!confirm('Are you sure delete company '+'{{$company->name}}'+'?')){return false;}"
                        />
                    </form>
                     <!--
                        <form method="post" action="{{route('companies.destroy',[$company->id])}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-link" style="padding: 0;margin: 0;" name="delete" value="Delete" />
                        </form>
                    -->
                    <!--
                        <form method="post" action="/companies/{{$company->id}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="button" class="btn btn-link" style="padding: 0;margin: 0;">Delete</button>
                        </form>
                    -->
                </li>
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
