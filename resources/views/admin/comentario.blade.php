@extends('adminlte::page')

@section('title', 'Comentarios')

@section('content_header')
    <h1>Listado de Comentarios</h1>
@stop

@section('content')
    @livewire('comentario-component')
@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css"> -->
    @vite('resources/css/app.css')
@stop

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
    @vite('resources/js/app.js')
@stop
