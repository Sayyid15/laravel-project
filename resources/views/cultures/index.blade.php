@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 50px">
                <div class="card-body">
                    <a href="{{route('cultures.create')}}" class="btn btn-success btn-sm" title="Add New Culture">
                        Add new
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



                <table class="table table-hover">
                    <thead>
                    <th>Country</th>
                    <th>Culture</th>
                    <th>Holidays</th>
                    <th>Language</th>
                    <th>Religion</th>
                    <th>Lifestyle</th>
                    <th>Clothes</th>
                    <th>Food</th>


                    </thead>
                    <tbody>
                    @foreach($cultures as $culture)


                        <tr>
                            <td>{{$culture-> country}}</td>
                            <td>{{$culture-> culture}}</td>
                            <td>{{$culture-> holidays}}</td>
                            <td>{{$culture-> language}}</td>
                            <td>{{$culture-> religion}}</td>
                            <td>{{$culture-> lifestyle}}</td>
                            <td>{{$culture-> clothes}}</td>
                            <td>{{$culture-> food}}</td>
                            <td>
                                @if(Auth::check())
                                    <form action="{{route('cultures.destroy', $culture->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-success" type="submit">Delete</button>
                                    </form>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{route('cultures.edit', $culture->id)}}">Edit</a>
                            </td>

                            <td>
                                <a class="btn btn-success" href="{{route('cultures.show', $culture->id)}}"> View</a>
                            </td>
                            @endif

                        </tr>

                    @endforeach
                    </tbody>


                </table>
                </form>
            </div>
        </div>
    </div>

@endsection
