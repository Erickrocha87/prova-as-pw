<form action="{{ url('artworks') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Title" required>
    <input type="number" name="creation_year" placeholder="Creation year" required>
    <input type="text" name="category" placeholder="Category" required>
    <div>
        <label for="image">
            <input type="file" name="image" id="image"required>
        </label>
    </div>
    <div class="mb-2">
      <label for="artist_id">
        Artist
      </label>
      <select class="block text-gray-700 text-sm font-bold mb-2" name="artist_id">
        @forelse ($artists as $artist)
        <option value="{{$artist->id}}">{{$artist->name}}</option> 
        @empty
        <option disabled>Any registered artist</option>
        @endforelse
      </select>
    </div>

    <button type="submit">Create Artwork</button>
</form>