@foreach($cultures as $culture)
    <div class="card" style="width: 18rem;">


        <form action="{{route('cultures.show', $culture->id)}}">
            @csrf
            <button class="btn btn-default" type="submit">Details</button>
        </form>
        <form action="{{ route('cultures.destroy', $culture->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-default" type="submit">Delete</button>
        </form>

        <input type="checkbox" class="toggle-class" data-toggle="toggle"
               data-id="{{$culture->id}}" data-on="Enabled" data-off="Disabled"
            {{$culture->status == true ? 'checked' : ''}}>


        <a class="btn btn-default" href="{{route('cultures.edit', $culture->id)}}">edit</a>

    </div>
@endforeach
