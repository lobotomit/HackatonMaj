@extends('layouts.app')
@section('title', 'Hackaton')

@section('content')
    <h3>A simple example of MarkerClusterer (100 markers)</h3>
    <p>
        <a href="?compiled">Compiled</a> |
        <a href="?">Standard</a> version of the script.
    </p>
    <!-- aqui va el mapa -->
    <div id="map-container"><div id="map"></div></div>
@endsection
@section('scripts')
    @include('layouts.scripts')
    //nuestros datos.
    <script src="https://googlemaps.github.io/js-marker-clusterer/examples/data.json"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="/js/markerclusterer.js"></script>

    <script>
        function initialize() {
            //definimos la variable centro.
            var center = new google.maps.LatLng(40.475402, -3.876050);
            //Nuevo objeto mapa.
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            //Los markers.
            var markers = [];
            for (var i = 0; i < 1000; i++) {
                //variable hasta el numero que tengamos.
                var dataPhoto = data.photos[i];
                //cojemos latitud y longitud.
                var latLng = new google.maps.LatLng(dataPhoto.latitude,
                        dataPhoto.longitude);
                //lo asignamos a una variable marker
                var marker = new google.maps.Marker({
                    position: latLng
                });
                //Los enviamos al array markers.
                markers.push(marker);
            }
            //en esta variable introducimos el mapa ya creado y el array de markadores.
            var markerCluster = new MarkerClusterer(map, markers);
        }
        //iniciamos el maps
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection