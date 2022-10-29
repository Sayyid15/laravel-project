@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 50px">
                <div class="card-body">

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


                </div>
                <br>

                <table class="table table-hover">
                    <thead>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>email_verified_at</th>
                    <th>created_at</th>
                    <th>updated_at</th>



                    </thead>
                    <tbody>
                    @foreach($users as $user)


                        <tr>
                            <td>{{$user-> id}}</td>
                            <td>{{$user-> name}}</td>
                            <td>{{$user-> email}}</td>
                            <td>{{$user-> email_verified_at}}</td>
                            <td>{{$user-> created_at}}</td>
                            <td>{{$user-> updated_at}}</td>

                            <td>
                                @if(Auth::check())
                                    <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-success" type="submit">Delete</button>
                                    </form>
                            </td>


                            <td>
                                <a class="btn btn-success" href="{{route('users.show', $user->id)}}"> View</a>
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
