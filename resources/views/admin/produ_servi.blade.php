@extends('adminlte::page')

@section('title', 'Productos y Servicios')

@section('content_header')
    <h1>Listado de Productos y servicios</h1>
@stop

@section('content')
    @livewire('producto-servicio-component')
@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css"> -->
    @vite('resources/css/app.css')
@stop

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
    @vite('resources/js/app.js')
@stop