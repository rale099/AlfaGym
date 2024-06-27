@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Listado de Proveedores</h1>
@stop

@section('content')
    @livewire('proveedor-component')
@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css"> -->
    @vite('resources/css/app.css')
@stop

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
    @vite('resources/js/app.js')
@stop