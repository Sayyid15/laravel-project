@extends('layouts.app')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap-grid.min.css" integrity="sha512-a+PObWRxNVh4HZR9wijCGj84JgJ/QhZ8dET09REfYz2clUBjKYhGbOmdy9KEHilYKgbMSIHNQEsonv/r75mHXw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 50px">

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
                    <th>Id</th>
                    <th>Naam</th>
                    <th>Rol</th>
                    <th>Status</th>


                    </thead>
                    <tbody>
                    @foreach($users as $user)


                        <tr>
                            <td>{{$user-> id}}</td>
                            <td>{{$user-> name}}</td>
                            <td>{{$user-> role}}</td>
                            <td>{{$user-> status}}</td>
                            <td>
                                <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="succes"
                                data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Inactive"
                                       {{$user->status ? 'checked' : ''}}
                                >
                            </td>

                            <td>
                                @method('DELETE')
                                @csrf
                                <a class="btn btn-success" href="{{route('users.destroy', $user->id)}}"> Delete</a>
                            </td>

                            <td>
                                <a class="btn btn-success" href="{{route('users.show', $user->id)}}"> View</a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection
