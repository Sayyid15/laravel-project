@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">



            </div>
            <div class="col-md-8">
                <h3>List of People</h3>
                <table class="table table-striped">
                    <tr>
                        <th>Land</th>
                        <th>Cultuur</th>
                        <th>Feestdagen</th>
                        <th>Taal</th>
                        <th>Religie</th>
                        <th>Levensstijl</th>
                        <th>Kleding</th>
                        <th>Hoofdgerecht</th>

                    </tr>
                    @foreach($cultures as $culture)
                        <tr>
                            <td>{{ $culture->country }}</td>
                            <td>{{ $culture->culture }}</td>
                            <td>{{$culture-> holidays}}</td>
                            <td>{{$culture-> language}}</td>
                            <td>{{$culture-> religion}}</td>
                            <td>{{$culture-> lifestyle}}</td>
                            <td>{{$culture-> clothes}}</td>
                            <td>{{$culture-> food}}</td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>





@endsection
