@extends('layouts.app')

@section('content')

    <!-- <pre><?php print_r($company)?>></pre> -->

    <div class="col-md-6 col-lg-6">

        <form method="post" action="/companies/{{$company->id}}" class="form-signin">

            {{csrf_field()}}

            {{method_field('PUT')}}

            <div class="form-group">
                <label for="company-name" class="sr-only">Name</label>
                <input
                    type="text"
                    id="company-name"
                    name="company-name"
                    class="form-control"
                    placeholder="Company Name"
                    required autofocus
                    value="{{$company->name}}"
                >
            </div>

            <div class="form-group">
                <label for="company-description" class="sr-only">Description</label>
                <textarea
                    type="text"
                    id="company-description"
                    name="company-description"
                    class="form-control"
                    placeholder="Company Description">{{$company->description}}</textarea>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        </form>

        <!-- <div class="panel panel-primary">

            <div class="panel-heading">Companies</div>

            <div class="panel-body">

            <ul class="list-group">

                <?php
                // @foreach($companies as $company)
                //     <li class="list-group-item">
                //         <a href="/companies/{{$company->id}}">
                //             {{$company->name}}
                //         </a>
                //     </li>
                // @endforeach
                ?>

            </ul>

          </div>

        </div> -->

    </div>

@endsection
