<form action="{{ url('artworks/'.$artwork->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name"value ="{{ $artwork->title}}"
    required>
    <input type="number" name="creation_year" placeholder="Creation year" value ="{{ $artwork->creation_year}}"
    required>
    <input type="text" name="category" placeholder="Category" value ="{{ $artwork->category}}"
    required>
    <img src="{{ asset($artwork->image) }}" alt="{{ $artwork->name }}">
    <div>
        <label for="image">
            <input type="file" name="image" id="image"required>
        </label>
    </div>

      <label for="artist_id">
        Artist
      </label>
      <select name="artist_id">
        @foreach ($artist as $entity)
        <option value="{{$entity->id}}">{{$entity->name}}</option> 
        @endforeach
      </select>

    <button type="submit">Edit Artwork</button>
</form>