@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 50px">


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
                <form action="{{route('cultures.update', $cultures->id )}}" method="POST">
                    <hr>
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="country" class="form-label">Land</label>
                        <input id="country"
                               type="text"
                               name="country"
                               placeholder="Enter country"
                               class="@error('country')is-invalid @enderror form-control"
                               value="{{ $cultures-> country }}"/>
                        @error('country')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="culture" class="form-label">Cultuur</label>
                        <input id="culture"
                               type="text"
                               name="culture"
                               placeholder="Enter culture"
                               class="@error('culture')is-invalid @enderror form-control"
                               value="{{ $cultures-> culture }}"/>
                        @error('culture')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="holidays" class="form-label">Feestdagen</label>
                        <input id="holidays"
                               type="text"
                               name="holidays"
                               placeholder="Enter holidays"
                               class="@error('holidays')is-invalid @enderror form-control"
                               value="{{ $cultures-> holidays }}"/>
                        @error('holidays')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="language" class="form-label">Taal</label>
                        <input id="language"
                               type="text"
                               name="language"
                               placeholder="Enter language"
                               class="@error('language')is-invalid @enderror form-control"
                               value="{{ $cultures-> language }}"/>
                        @error('language')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="religion" class="form-label">Religie</label>
                        <input id="religion"
                               type="text"
                               name="religion"
                               placeholder="Enter religion"
                               class="@error('religion')is-invalid @enderror form-control"
                               value="{{ $cultures-> religion }}"/>
                        @error('religion')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="lifestyle" class="form-label">Levensstijl</label>
                        <input id="lifestyle"
                               type="text"
                               name="lifestyle"
                               placeholder="Enter lifestyle"
                               class="@error('lifestyle')is-invalid @enderror form-control"
                               value="{{ $cultures-> lifestyle }}"/>
                        @error('lifestyle')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="clothes" class="form-label">Kleding</label>
                        <input id="clothes"
                               type="text"
                               name="clothes"
                               placeholder="Enter clothes"
                               class="@error('clothes')is-invalid @enderror form-control"
                               value="{{ $cultures-> clothes }}"/>
                        @error('clothes')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="food" class="form-label">Gerecht</label>
                        <input id="food"
                               type="text"
                               name="food"
                               placeholder="Enter food"
                               class="@error('food')is-invalid @enderror form-control"
                               value="{{ $cultures-> food }}"/>
                        @error('food')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <form method="POST" action="">
                        <div class="form-group">
                            <button action="{{route('cultures.update', $cultures->id)}}" type="submit"
                                    class="btn btn-primary btn-block"> Update
                            </button>
                        </div>
                    </form>


                </form>
            </div>
        </div>
    </div>
@endsection
