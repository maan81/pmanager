@extends('layouts.app')

@section('content')

    <!-- <pre><?php print_r($company)?>></pre> -->

    <div class="col-md-6 col-lg-6">

        <form method="post" action="/companies/{{$company->id}}/store" class="form-signin">

            <h2 class="form-signin-heading">Please sign in</h2>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
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
