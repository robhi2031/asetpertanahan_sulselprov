"use strict";
//Class Definition
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: -4.2247274,
            lng: 118.5274812
        },
        zoom: 7
    });

    var drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.MARKER,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: [
                google.maps.drawing.OverlayType.MARKER,
                google.maps.drawing.OverlayType.CIRCLE,
                google.maps.drawing.OverlayType.POLYGON,
                google.maps.drawing.OverlayType.POLYLINE,
                google.maps.drawing.OverlayType.RECTANGLE
            ]
        },
        markerOptions: {
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
        },
        circleOptions: {
            fillColor: '#ffff00',
            fillOpacity: 1,
            strokeWeight: 5,
            clickable: false,
            editable: true,
            zIndex: 1
        }
    });
    drawingManager.setMap(map);
    var dataLayer = new google.maps.Data();
    // from http://stackoverflow.com/questions/25072069/export-geojson-data-from-google-maps
    // from http://jsfiddle.net/doktormolle/5F88D/
    google.maps.event.addListener(drawingManager, 'overlaycomplete', function(event) {
        switch (event.type) {
            case google.maps.drawing.OverlayType.MARKER:
                dataLayer.add(new google.maps.Data.Feature({
                    geometry: new google.maps.Data.Point(event.overlay.getPosition())
                }));
            break;
            case google.maps.drawing.OverlayType.RECTANGLE:
                var b = event.overlay.getBounds(),
                    p = [b.getSouthWest(), {
                        lat: b.getSouthWest().lat(),
                        lng: b.getNorthEast().lng()
                    }, b.getNorthEast(), {
                        lng: b.getSouthWest().lng(),
                        lat: b.getNorthEast().lat()
                    }]
                dataLayer.add(new google.maps.Data.Feature({
                    geometry: new google.maps.Data.Polygon([p])
                }));
            break;
            case google.maps.drawing.OverlayType.POLYGON:
                dataLayer.add(new google.maps.Data.Feature({
                    geometry: new google.maps.Data.Polygon([event.overlay.getPath().getArray()])
                }));
            break;
            case google.maps.drawing.OverlayType.POLYLINE:
                dataLayer.add(new google.maps.Data.Feature({
                    geometry: new google.maps.Data.LineString(event.overlay.getPath()
                    .getArray())
                }));
            break;
            case google.maps.drawing.OverlayType.CIRCLE:
                dataLayer.add(new google.maps.Data.Feature({
                    properties: {
                        radius: event.overlay.getRadius()
                    },
                    geometry: new google.maps.Data.Point(event.overlay.getCenter())
                }));
            break;
        }

    });
}
// Class Initialization
jQuery(document).ready(function() {

});