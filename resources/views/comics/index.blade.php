@extends('layout.master')
@section('index')
    @foreach ($comics as $comic)
        {{ $comic->title }}
        {{ $comic->price }}<br>
    @endforeach
@endsection
