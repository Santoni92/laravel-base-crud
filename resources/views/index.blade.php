@extends('layouts.app')
@section('content')
    @forelse ($comics as $comic)
        <div class="container">
            <span>{{ $comic->title }}</span>
            <p>{{ $comic->description }}</p>
            <img src="{{ $comic->image }}" alt="">
            <span>{{ $comic->price }}</span>
            <span>{{ $comic->series }}</span>
            <span>{{ $comic->sale_date }}</span>
            <span>{{ $comic->type }}</span>
        </div>
    @empty
        non risultano esserci fumetti da visualizzare!!!
    @endforelse
@endsection
