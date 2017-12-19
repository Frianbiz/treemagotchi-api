<html>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.1.min.js"></script>
<style>
    #map {
        width: 100%;
        height: calc(100% - 37px);
        background-color: grey;
    }
</style>

<h1>TreeMapGotchi</h1>
<div id="map"></div>
<script>
    var currentMap;

    function initMap() {
        currentMap = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: new google.maps.LatLng(48.6887105, 2.2077153),
            mapTypeId: google.maps.MapTypeId.TERRAIN
        });
        refresh();
    }


    function refresh() {
        var markerArray = [];

        $.ajax({
            url: "/api/users",
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                for (i = 0; i < data['result'].length; i++) {
                    var user = data['result'][i]
                    markerArray[i] = addMarker( user.name, user.longitude, user.latitude, currentMap, user.average_impact);
                    console.log(markerArray[i]);
                }
            }
            ,
            error: function () {

            },
            async: true
        });
    }

    function addMarker(title, y, x, map, impact){

        var image = '{{ URL::to('/img/neutral.png') }}';
        if(impact < 200) {
            image = '{{ URL::to('/img/good.png') }}';
        }
        if(impact > 300) {
            image = '{{ URL::to('/img/bad.png') }}';
        }
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(x,y),
            map: map,
            title: title,
            icon: image
        });
        var contentString = title + '<br>' + impact + 'g CO<sub>2</sub>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
        return marker;
    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwLb9XeypXZIBwHkXBEmlnBoyWn8r8C4c&callback=initMap">
</script>
</html>