@extends('adminlte::page')

@section('title', 'Detalle de Membresias')

@section('content_header')
    <h1>Membresia asignada</h1>
@stop

@section('content')
    @livewire('detalle-membresia-component')
@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css"> -->
    @vite('resources/css/app.css')
@stop

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
    @vite('resources/js/app.js')
@stop
