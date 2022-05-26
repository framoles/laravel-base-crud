@extends('layout.master')
@section('edit')
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf

        @method('PUT')

        Title<input name="title" type="text" value="{{ $comic->title }}">
        Description<input name="description" type="text" value="{{ $comic->description }}">
        Thumb<input name="thumb" type="text" value="{{ $comic->thumb }}">
        Thumb<input name="price" type="text" value="{{ $comic->price }}">
        Series<input name="series" type="text" value="{{ $comic->series }}">
        Sale Date<input name="sale_date" type="text" value="{{ $comic->sale_date }}">
        Type<input name="type" type="text" value="{{ $comic->type }}">

        <button type="submit">Submit</button>
    </form>
@endsection
