@foreach($artists as $artist)
    <div>
        <h3>{{ $artist->name }}</h3>
        <p>{{ $artist->biography }}</p>
        <p>{{ $artist->birth_year }}</p>
        <a href="{{ url('artists/'.$artist->id.'/edit') }}">Edit</a>
        <form action="{{ url('artists/'.$artist->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach