@extends('layouts.app')
@section('content')
    <div class="container">
        @forelse ($comics as $comic)
            <span>{{ $comic->title }}</span>
            <p>{{ $comic->description }}</p>
            <div>
                <img src="{{ $comic->image }}" alt="">
            </div>
            <span>{{ $comic->price }}</span>
            <span>{{ $comic->series }}</span>
            <span>{{ $comic->sale_date }}</span>
            <span>{{ $comic->type }}</span>
            <a href="{{ route('comics.show', $comic->id) }}">Guarda dettaglio</a>
        @empty
            non risultano esserci fumetti da visualizzare!!!
        @endforelse
    </div>
@endsection
