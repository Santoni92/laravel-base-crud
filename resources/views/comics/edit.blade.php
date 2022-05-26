<form action="{{ route('comics.store') }}" method="POST">
    @csrf

    @method('PUT')
    <!--vado a sovrascrivere il metodo post !! Il form prevede solo due tipi di method e cioè get/post-->
    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $comic->title }}">

    <label for="description">Description:</label>
    <textarea name="description">{{ $comic->description }}</textarea>

    <label for="image">URL Immagine:</label>
    <input type="text" name="image" value="{{ $comic->image }}">

    <label for="price">Prezzo:</label>
    <input type="text" name="price" value="{{ $comic->price }}">

    <label for="series">Series:</label>
    <input type="text" name="series" value="{{ $comic->series }}">

    <label for="sale_date">Data:</label>
    <input type="text" name="sale_date" value="{{ $comic->sale_date }}">

    <label for="type">Tipo:</label>
    <input type="text" name="type" value="{{ $comic->type }}">

    <button type="submit">Invia</button>

</form>
