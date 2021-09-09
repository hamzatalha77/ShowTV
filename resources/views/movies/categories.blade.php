
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')

    {{-- @foreach($categories as $category)
    <div class="list-group">
        <a href="{{ route('category', $category->id) }}" class="list-group-item list-group-item-action">{{ $category->category }}</a>
    </div>
@endforeach --}}


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
