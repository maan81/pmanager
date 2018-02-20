@extends('layouts.app')

@section('content')

    <div class="col-md-6 col-lg-6">

        <div class="panel panel-primary">

            <div class="panel-heading">
                Companies
                @if(Auth::check())
                    <a href="/companies/create" class="pull-right bg-primary" style="padding: 0px 5px;border-radius: 3px;" >
                        Create
                    </a>
                @endif
            </div>

            <div class="panel-body">

            <ul class="list-group">

                @foreach($companies as $company)
                    <li class="list-group-item">
                        <a href="/companies/{{$company->id}}">
                            {{$company->name}}
                        </a>
                    </li>
                @endforeach

            </ul>

          </div>

        </div>

    </div>

@endsection
