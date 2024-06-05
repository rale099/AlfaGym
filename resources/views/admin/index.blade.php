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
    <script async  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxvNn7ZfiUUQgyQqXapbCOvChKJ_FMzgM&callback=initMap"></script>

    <!-- Script para inicializar el mapa -->
    <script>
        
            function initMap() {
    var map = new google.maps.Map(document.getElementById('map-container'), {
        center: { lat: -16.0704139, lng: -65.5969469 },
        zoom: 6
    });
}

        
    </script>
@stop
