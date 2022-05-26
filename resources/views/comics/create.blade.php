@extends('layout.master')
@section('create')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        Title<input name="title" type="text">
        Description<input name="description" type="text">
        Thumb<input name="thumb" type="text">
        Thumb<input name="price" type="text">
        Series<input name="series" type="text">
        Sale Date<input name="sale_date" type="text">
        Type<input name="type" type="text">

        <button type="submit">Submit</button>
    </form>
@endsection
