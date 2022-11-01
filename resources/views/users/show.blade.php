@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 50px">
                <div class="card-body">
                    <a href="{{route('users.index')}}" class="btn btn-success btn-sm" >
                        Go Back
                    </a>
                </div>


                <hr>

                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif

                @csrf

                <div>
                    {{$user-> id}}
                </div>

                <div>
                    {{$user-> name}}
                </div>

                <div>
                    {{$user-> email}}
                </div>
                <div>
                    {{$user-> role}}
                </div>




                <br>


            </div>
        </div>
    </div>

@endsection
