
@foreach($cultures as $culture)
    @if($culture->status)
        <div class="card" style="width: 18rem;">

            <div class="card-body">
                <p class="card-text">{{$culture->country}}</p>
                <p class="card-text">{{$culture->culture}}</p>
            </div>


            <form action="{{route('cultures.show', $culture->id)}}">
                @csrf
                <button class="btn btn-default" type="submit">View</button>
            </form>
        </div>
    @endif
@endforeach
