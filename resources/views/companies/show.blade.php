@extends('layouts.app')

@section('content')


    <div class="blog-sidebar col-md-3 pull-right">
        <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
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
        <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </ol>
        </div>
    </div><!-- /.blog-sidebar -->


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

        <!-- Example row of columns -->
        <div class="row">
            @foreach($company->projects as $project)
                <div class="col-lg-4">
                    <h2>{{$project->name}}</h2>
                    <!-- <p class="text-danger">As of v9.1.2, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p> -->
                    <p>{{$project->description}}</p>
                    <p>
                        <a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View details &raquo;</a>
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

@endsection
