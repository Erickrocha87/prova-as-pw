<form action="{{ url('artists/'.$artist->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name"value ="{{ $artist->name}}"
    required>
    <input type="text" name="biography" placeholder="Biography" value ="{{ $artist->biography}}"
    required>
    <input type="number" name="birth_year" placeholder="Birth year" value ="{{ $artist->birth_year}}"
    required>

    <button type="submit">Edit Artist</button>
</form>