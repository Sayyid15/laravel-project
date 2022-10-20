<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
</head>
<body>
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

            <br>

            <table class="table table-hover">
                <thead>
                <th>Land</th>
                <th>Cultuur</th>
                <th>Feestdagen</th>
                <th>Taal</th>
                <th>Religie</th>
                <th>Levensstijl</th>
                <th>Kleding</th>
                <th>Gerechten</th>
                <th>Actions</th>
                <th>edit</th>
                </thead>
                <tbody>


                    <tr>
                        <td>{{$culture-> country}}</td>
                        <td>{{$culture-> culture}}</td>
                        <td>{{$culture-> holidays}}</td>
                        <td>{{$culture-> language}}</td>
                        <td>{{$culture-> religion}}</td>
                        <td>{{$culture-> lifestyle}}</td>
                        <td>{{$culture-> clothes}}</td>
                        <td>{{$culture-> food}}</td>

{{--                            <form action="{{route('cultures.destroy', $culture->id)}}" method="POST">--}}
{{--                                @method('DELETE')--}}
{{--                                @csrf--}}
{{--                                <button class="btn btn-success" type="submit">Delete</button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                        <td>--}}

{{--                            <a class="btn btn-success" href="{{route('cultures.show', $culture->id)}}"> View</a>--}}

{{--                            <a class="btn btn-success" href="{{route('cultures.edit', $culture->id)}}">Edit</a>--}}
{{--                        </td>--}}




                    </tr>

                </tbody>


            </table>
            </form>
        </div>
    </div>
</div>

</body>
</html>

