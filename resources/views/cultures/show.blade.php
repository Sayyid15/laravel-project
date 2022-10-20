@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 50px">
                <div class="card-body">
                    <a href="{{route('cultures.index')}}" class="btn btn-success btn-sm" title="Add New Culture">
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
                    {{$culture-> country}}
                </div>

                <div>
                    {{$culture-> culture}}
                </div>

                <div>
                    {{$culture-> holidays}}
                </div>
                <div>
                    {{$culture-> language}}
                </div>

                <div>
                    {{$culture-> religion}}
                </div>

                <div>
                    {{$culture-> lifestyle}}
                </div>

                <div>
                    {{$culture-> clothes}}
                </div>

                <div>
                    {{$culture-> food}}
                </div>


                <br>


            </div>
        </div>
    </div>

@endsection
