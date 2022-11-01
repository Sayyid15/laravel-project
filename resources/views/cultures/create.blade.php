
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 50px">

            @if(Session::get('status'))
                <div class="alert alert-success">
                    {{Session::get('status')}}
                </div>
            @endif
            <form action="{{route('cultures.store')}}" method="POST">
                <hr>

                @if(Session::get('succes'))
                    <div class="alert alert-success">
                        {{Session::get('succes')}}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif


                @csrf

                <div>
                    <input id="user_id"
                           type="hidden"
                           name="user_id"
                           value="{{auth()->id()}}"/>
                    @error('user_id')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <h1>Land</h1>
                <div class="form-group">
                    <input id="country"
                           type="text"
                           name="country"
                           placeholder="Enter country"
                           class="@error('country')is-invalid @enderror form-control"
                           value="{{ old ('country') }}"/>
                    @error('country')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

<h1>Cultuur</h1>
                <div class="form-group">

                    <input id="culture"
                           type="text"
                           name="culture"
                           placeholder="Enter culture"
                           class="@error('culture')is-invalid @enderror form-control"
                           value="{{ old ('culture') }}"/>
                    @error('culture')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <h1>Feestdagen</h1>
                <div class="form-group">

                    <input id="holidays"
                           type="text"
                           name="holidays"
                           placeholder="Enter holidays"
                           class="@error('holidays')is-invalid @enderror form-control"
                           value="{{ old ('holidays') }}"/>
                    @error('holidays')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <h1>Taal</h1>
                <div class="form-group">

                    <input id="language"
                           type="text"
                           name="language"
                           placeholder="Enter language"
                           class="@error('language')is-invalid @enderror form-control"
                           value="{{ old ('language') }}"/>
                    @error('language')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <h1>Religie</h1>
                <div class="form-group">

                    <input id="religion"
                           type="text"
                           name="religion"
                           placeholder="Enter religion"
                           class="@error('religion')is-invalid @enderror form-control"
                           value="{{ old ('religion') }}"/>
                    @error('religion')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <h1>Levensstijl</h1>
                <div class="form-group">

                    <input id="lifestyle"
                           type="text"
                           name="lifestyle"
                           placeholder="Enter lifestyle"
                           class="@error('lifestyle')is-invalid @enderror form-control"
                           value="{{ old ('lifestyle') }}"/>
                    @error('lifestyle')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>


                <h1>Kleding</h1>
                <div class="form-group">

                    <input id="clothes"
                           type="text"
                           name="clothes"
                           placeholder="Enter clothes"
                           class="@error('clothes')is-invalid @enderror form-control"
                           value="{{ old ('clothes') }}"/>
                    @error('clothes')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>


                <h1>Hoofdgerecht</h1>
                <div class="form-group">

                    <input id="food"
                           type="text"
                           name="food"
                           placeholder="Enter food"
                           class="@error('food')is-invalid @enderror form-control"
                           value="{{ old ('food') }}"/>
                    @error('food')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <form method="POST" action="">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Toevoegen</button>
                    </div>
                </form>

            </form>
        </div>
    </div>
</div>


@endsection

