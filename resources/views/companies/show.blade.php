@extends('layouts.app')

@section('content')

    <!-- <pre>{{print_r($company)}}</pre> -->

    <!-- <pre>{{print_r($company->projects)}}</pre> -->

    <!-- ================================== -->
    <div class="container">

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

    </div> <!-- /container -->

@endsection
