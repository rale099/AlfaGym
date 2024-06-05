@extends('adminlte::page')

@section('title', 'Ventas')

@section('content_header')
    <h1>Listado de Ventas</h1>
@stop

@section('content')
    @livewire('venta-component')
@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css"> -->
    @vite('resources/css/app.css')
@stop

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
    @vite('resources/js/app.js')
@stop