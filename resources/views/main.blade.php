<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>MarkerClusterer v3 Simple Example</title>
    <style >
        body {
            margin: 0;
            padding: 10px 20px 20px;
            font-family: Arial;
            font-size: 16px;
        }
        #map-container {
            padding: 6px;
            border-width: 1px;
            border-style: solid;
            border-color: #ccc #ccc #999 #ccc;
            -webkit-box-shadow: rgba(64, 64, 64, 0.5) 0 2px 5px;
            -moz-box-shadow: rgba(64, 64, 64, 0.5) 0 2px 5px;
            box-shadow: rgba(64, 64, 64, 0.1) 0 2px 5px;
            width: 600px;
        }
        #map {
            width: 600px;
            height: 400px;
        }
    </style>

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="/js/markerclusterer.js"></script>
    <!--aqui incluir mis datos-->
    <!--En el ejemplo estan ya dentro de una variable data.-->
    <script src="https://googlemaps.github.io/js-marker-clusterer/examples/data.json"></script>

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
    <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-12846745-20']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>
<body>
<h3>A simple example of MarkerClusterer (100 markers)</h3>
<p>
    <a href="?compiled">Compiled</a> |
    <a href="?">Standard</a> version of the script.
</p>
<!-- aqui va el mapa -->
<div id="map-container"><div id="map"></div></div>
</body>
</html>