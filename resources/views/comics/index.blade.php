@extends('layout.master')
@section('index')
    @foreach ($comics as $comic)
        {{ $comic->title }}
        {{ $comic->price }}
        <a href="{{ route('comics.show', $comic->id) }}">Detail</a>
        <a href="{{ route('comics.edit', $comic->id) }}">Update</a>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form><br>
    @endforeach
    <br><a href="{{ route('comics.create') }}">New</a><br>
@endsection
