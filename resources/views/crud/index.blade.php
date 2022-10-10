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
        <div class="col-md-6 col-md-offset-3" style="margin-top: 50px" >


            <form action="" method="post">
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
            <div class="form-group">
            <label for="country" class="form-label">Land</label>
            <input id="country"
                   type= "text"
                   name= "country"
                   placeholder="Enter country"
                   class="@error('country')is-invalid @enderror form-control"
                   value="{{ old ('country') }}" />
            @error('country')
            <span class="" style="color: red">{{ $message }}</span>
            @enderror
            </div>


                <div class="form-group">
                <label for="culture" class="form-label">Cultuur</label>
                <input id="culture"
                       type= "text"
                       name= "culture"
                       placeholder="Enter culture"
                       class="@error('culture')is-invalid @enderror form-control"
                       value="{{ old ('culture') }}" />
                @error('culture')
                <span class="" style="color: red">{{ $message }}</span>
                @enderror
                </div>

                    <div class="form-group">
                    <label for="holidays" class="form-label">Feestdagen</label>
                    <input id="holidays"
                           type= "text"
                           name= "holidays"
                           placeholder="Enter holidays"
                           class="@error('holidays')is-invalid @enderror form-control"
                           value="{{ old ('holidays') }}" />
                    @error('holidays')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                    </div>

                <div class="form-group">
                <label for="language" class="form-label">Taal</label>
                <input id="language"
                       type= "text"
                       name= "language"
                       placeholder="Enter language"
                       class="@error('language')is-invalid @enderror form-control"
                       value="{{ old ('language') }}" />
                @error('language')
                <span class="" style="color: red">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                <label for="religion" class="form-label">Geloof</label>
                <input id="religion"
                       type= "text"
                       name= "religion"
                       placeholder="Enter religion"
                       class="@error('religion')is-invalid @enderror form-control"
                       value="{{ old ('religion') }}" />
                @error('religion')
                <span class="" style="color: red">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                <label for="lifestyle" class="form-label">Levensstijl</label>
                <input id="lifestyle"
                       type= "text"
                       name= "lifestyle"
                       placeholder="Enter lifestyle"
                       class="@error('lifestyle')is-invalid @enderror form-control"
                       value="{{ old ('lifestyle') }}" />
                @error('lifestyle')
                <span class="" style="color: red">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                <label for="clothes" class="form-label">Kleding</label>
                <input id="clothes"
                       type= "text"
                       name= "clothes"
                       placeholder="Enter clothes"
                       class="@error('clothes')is-invalid @enderror form-control"
                       value="{{ old ('clothes') }}" />
                @error('clothes')
                <span class="" style="color: red">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                <label for="food" class="form-label">Gerecht</label>
                <input id="food"
                       type= "text"
                       name= "food"
                       placeholder="Enter food"
                       class="@error('food')is-invalid @enderror form-control"
                       value="{{ old ('food') }}" />
                @error('food')
                <span class="" style="color: red">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Toevoegen</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
