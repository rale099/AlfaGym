@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lugar del establecimiento</h1>
@stop

@section('content')
    <div id="map-container" style="height: 400px; width: 100%; margin: 0 auto;"></div> <!-- Contenedor para el mapa -->
@stop

@section('js')
    <!-- Script para cargar la API de Google Maps -->
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxvNn7ZfiUUQgyQqXapbCOvChKJ_FMzgM&callback=initMap"></script>

    <!-- Script para inicializar el mapa -->
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map-container'), {
                center: { lat: 13.960088235421136, lng: -89.18612534860371 },
                zoom: 30
            });
        }
    </script>
@stop
