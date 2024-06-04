@extends('adminlte::page')

@section('title', 'Detalle de venta')

@section('content_header')
    <h1>Detalle de ventas</h1>
@stop

@section('content')
    @livewire('detalle-ventas-component')
@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css"> -->
    @vite('resources/css/app.css')
@stop

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
    @vite('resources/js/app.js')
@stop
