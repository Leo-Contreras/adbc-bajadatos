var markers = [];
var map;
var markerCluster;
var iconBase = 'image/';
//var iconBase = $("#sectionMain").data("urlbase") + '/Content/images/';
var marker;
var bounds = new google.maps.LatLngBounds();


function initialize() {
    map = new google.maps.Map(document.getElementById('map'), {
        maxZoom:17,
        zoom: 8,
        center: new google.maps.LatLng(31.5401028, -116.260827),
        mapTypeId: google.maps.MapTypeId.ROADMAP,

    });


    function changeLoc(lat, lng) {
        map.setCenter(new google.maps.LatLng(lat, lng));
    }

    markerCluster = new MarkerClusterer(map, markers, { imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m' });
    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();
    fetchPlaces();
    map.fitBounds(bounds);
    google.maps.event.addListener(marker, "dragstart", function (event) {
        marker.setAnimation(3); // raise
    });
    google.maps.event.addListener(marker, 'dragend', function () {
        marker.setAnimation(4); // fall
        geocodePosition(marker.getPosition());
        updateMarkerPosition(marker.getPosition());
    });


}

google.maps.event.addDomListener(window, 'load', initialize);


function fetchPlaces() {
    places = _DATA_;

 
    var infowindow = new google.maps.InfoWindow({
        content: ''
    });

    var bindInfoWindow = function (marker, map, infowindow, html) {

        google.maps.event.addListener(marker, 'click', function () {
            infowindow.setContent(html);
            infowindow.open(map, marker);
            for (var i = 0; i < markers.length; i++) {

                markers[i].setAnimation(null);
                markers[i].setIcon(iconBase + '/mc.png');

            }
			
			
            marker.setIcon(iconBase + 'markerClic.png');


            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);

            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);

            }
			
			

        });
		
		
    };

    for (p in places) {

        tmpLatLng = new google.maps.LatLng(parseFloat(places[p].LATITUD), parseFloat(places[p].LONGITUD));
        var marker = new google.maps.Marker({

            map: map,
            position: tmpLatLng,
            title: places[p].NOMBRE,
            animation: google.maps.Animation.DROP,
            icon: iconBase + 'mc.png'
        });

        bounds.extend(marker.position);
        bindInfoWindow(marker,
            map,
            infowindow,
            '<b style="padding-left:0px">' + places[p].NOMBRE + '</b><br><p style="padding-left:0px">' + places[p].DIRECCION + '</p>');
        markers.push(marker);

    }
    markerCluster.addMarkers(markers);
}




DetalleEstadPostBackUrl = "Detalle";
function ShowDetailEstado(elem) {
    //var Detalle = document.getElementById('DetalleEstado');
    //var Detalle = $(elem);
    var Id = elem.id;
    
    var options = { "backdrop": "static", keyboard: true };
    $.ajax({
        type: "GET",
        url: DetalleEstadPostBackUrl,
        contentType: "application/json; charset=utf-8",
        data: { "Id": Id },
        datatype: "json",
        success: function (data) {
            $('#content_detail').html('');
            $('#content_detail').html(data);
            $('#myModal2').modal(options);
            $('#myModal2').modal('show');

        },
        error: function () {
            alert("Ha ocurrido un error al mostrar la información");
        }
    });

}





DetallePostBackUrl = "Detalle";
function ShowDetail() {
    var Detalle = document.getElementById('Detalle');
    var Id = Detalle.getAttribute('data-id');
    var options = { "backdrop": "static", keyboard: true };
    $.ajax({
        type: "GET",
        url: DetallePostBackUrl,
        contentType: "application/json; charset=utf-8",
        data: { "Id": Id },
        datatype: "json",
        success: function (data) {
            $('#content_detail').html('');
            $('#content_detail').html(data);
            $('#myModal2').modal(options);
            $('#myModal2').modal('show');

        },
        error: function () {
            alert("Ha ocurrido un error al mostrar la información");
        }
    });

}

$("#closbtn").click(function () {
    $('#myModal2').modal('hide');
});

$(".fade").click(function () {
    $('#myModal2').modal('hide');
});




function FiltrarObras() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("InputSearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("ObrasList");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function FiltrarObrasEstado() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("InputESearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("ObrasEstadoList");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}



function clearMarkers() {
    setMapOnAll(null);
}
// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
    clearMarkers();
    markers = [];
}


function toggleBounce() {
    if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
    } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
    }
}



function doIt(item, baseUrl) {
    window.location.href = baseUrl + '?municipioId=' + item.value;
    z = item.value;
}




