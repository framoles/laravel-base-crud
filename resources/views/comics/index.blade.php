@extends('layout.master')
@section('index')
    @foreach ($comics as $comic)
        {{ $comic->title }}
        {{ $comic->price }}
        <a href="{{ route('comics.show', $comic->id) }}">Detail</a><br>
    @endforeach
@endsection
