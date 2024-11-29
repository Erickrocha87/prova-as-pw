@foreach($artworks as $artwork)
    <div>
        <h3>{{ $artwork->title}}</h3>
        <p>{{ $artwork->creation_year }}</p>
        <p>{{ $artwork->category }}</p>
        <img src="{{ asset($artwork->image) }}" alt="{{ $artwork->name }}">
        <a href="{{ url('artworks/'.$artwork->id.'/edit') }}">Edit</a>
        <form action="{{ url('artworks/'.$artwork->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach