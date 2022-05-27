<h2>Dettaglio del fumetto</h2>
<div>
    {{ $comic->description }}
    <a href="{{ route('comics.index') }}">BACK</a>
</div>

<form action="{{ route('comics.destroy', $comic) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="cancella">
</form>
