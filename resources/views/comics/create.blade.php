<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title">

    <label for="description">Description:</label>
    <textarea name="description"></textarea>

    <label for="image">URL Immagine:</label>
    <input type="text" name="image">

    <label for="price">Prezzo:</label>
    <input type="text" name="price">

    <label for="series">Series:</label>
    <input type="text" name="series">

    <label for="sale_date">Data:</label>
    <input type="text" name="sale_date">

    <label for="type">Tipo:</label>
    <input type="text" name="type">

    <button type="submit">Invia</button>

</form>
