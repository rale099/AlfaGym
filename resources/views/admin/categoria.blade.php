@extends('adminlte::page')

@section('title', 'categoria')

@section('content_header')
    <h1>Listado de Categorias</h1>
@stop

@section('content')
    @livewire('categoria-component')
@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css"> -->
    @vite('resources/css/app.css')
@stop

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
    @vite('resources/js/app.js')
@stop
