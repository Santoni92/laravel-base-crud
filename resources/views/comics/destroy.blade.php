<form action="{{ route('comics.destroy', ['id' => $comic->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="cancella">
</form>
