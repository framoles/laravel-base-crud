@extends('layout.master')
@section('show')
    <h1>DETAIL</h1>
    {{ $comic->title }}<br>
    {{ $comic->series }}<br>
    {{ $comic->type }}<br>
    <a href="{{ route('comics.index') }}">Back</a>
@endsection
