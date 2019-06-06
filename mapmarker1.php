<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyAVESA3O6ilWwM60YmumzwjbWDStUQbN6c&sensor=true" type="text/javascript"></script> 
<script type="text/javascript"> 
/* Developed by: Abhinay Rathore [web3o.blogspot.com] */ 
//Global variables 
var map; 
var bounds = new GLatLngBounds; //Circle Bounds 
var map_center = new GLatLng(-33.80010128657071, 151.28747820854187); 

var Circle; //Circle object 
var CirclePoints = []; //Circle drawing points 
var CircleCenterMarker, CircleResizeMarker; 
var circle_moving = false; //To track Circle moving 
var circle_resizing = false; //To track Circle resizing 
var radius = 1; //1 km 
var min_radius = 0.5; //0.5km 
var max_radius = 5; //5km 

//Circle Marker/Node icons 
var redpin = new GIcon(); //Red Pushpin Icon 
redpin.image = "http://maps.google.com/mapfiles/ms/icons/red-pushpin.png"; 
redpin.iconSize = new GSize(32, 32); 
redpin.iconAnchor = new GPoint(10, 32); 
var bluepin = new GIcon(); //Blue Pushpin Icon 
bluepin.image = "http://maps.google.com/mapfiles/ms/icons/blue-pushpin.png"; 
bluepin.iconSize = new GSize(32, 32); 
bluepin.iconAnchor = new GPoint(10, 32); 

function initialize() { //Initialize Google Map 
    if (GBrowserIsCompatible()) { 
        map = new GMap2(document.getElementById("map_canvas")); //New GMap object 
        map.setCenter(map_center); 

        var ui = new GMapUIOptions(); //Map UI options 
        ui.maptypes = { normal:true, satellite:true, hybrid:true, physical:false } 
        ui.zoom = {scrollwheel:true, doubleclick:true}; 
        ui.controls = { largemapcontrol3d:true, maptypecontrol:true, scalecontrol:true }; 
        map.setUI(ui); //Set Map UI options 

        addCircleCenterMarker(map_center); 
        addCircleResizeMarker(map_center); 
        drawCircle(map_center, radius); 
    } 
} 

// Adds Circle Center marker 
function addCircleCenterMarker(point) { 
    var markerOptions = { icon: bluepin, draggable: true }; 
    CircleCenterMarker = new GMarker(point, markerOptions); 
    map.addOverlay(CircleCenterMarker); //Add marker on the map 
    GEvent.addListener(CircleCenterMarker, 'dragstart', function() { //Add drag start event 
        circle_moving = true; 
    }); 
    GEvent.addListener(CircleCenterMarker, 'drag', function(point) { //Add drag event 
        drawCircle(point, radius); 
    }); 
    GEvent.addListener(CircleCenterMarker, 'dragend', function(point) { //Add drag end event 
        circle_moving = false; 
        drawCircle(point, radius); 
    }); 
} 

// Adds Circle Resize marker 
function addCircleResizeMarker(point) { 
    var resize_icon = new GIcon(redpin); 
    resize_icon.maxHeight = 0; 
    var markerOptions = { icon: resize_icon, draggable: true }; 
    CircleResizeMarker = new GMarker(point, markerOptions); 
    map.addOverlay(CircleResizeMarker); //Add marker on the map 
    GEvent.addListener(CircleResizeMarker, 'dragstart', function() { //Add drag start event 
        circle_resizing = true; 
    }); 
    GEvent.addListener(CircleResizeMarker, 'drag', function(point) { //Add drag event 
        var new_point = new GLatLng(map_center.lat(), point.lng()); //to keep resize marker on horizontal line 
        var new_radius = new_point.distanceFrom(map_center) / 1000; //calculate new radius 
        if (new_radius < min_radius) new_radius = min_radius; 
        if (new_radius > max_radius) new_radius = max_radius; 
        drawCircle(map_center, new_radius); 
    }); 
    GEvent.addListener(CircleResizeMarker, 'dragend', function(point) { //Add drag end event 
        circle_resizing = false; 
        var new_point = new GLatLng(map_center.lat(), point.lng()); //to keep resize marker on horizontal line 
        var new_radius = new_point.distanceFrom(map_center) / 1000; //calculate new radius 
        if (new_radius < min_radius) new_radius = min_radius; 
        if (new_radius > max_radius) new_radius = max_radius; 
        drawCircle(map_center, new_radius); 
    }); 
} 

//Draw Circle with given radius and center 
function drawCircle(center, new_radius) { 
    //Circle Drawing Algorithm from: http://koti.mbnet.fi/ojalesa/googlepages/circle.htm 

    //Number of nodes to form the circle 
    var nodes = new_radius * 40; 
    if(new_radius < 1) nodes = 40; 

    //calculating km/degree 
    var latConv = center.distanceFrom(new GLatLng(center.lat() + 0.1, center.lng())) / 100; 
    var lngConv = center.distanceFrom(new GLatLng(center.lat(), center.lng() + 0.1)) / 100; 

    CirclePoints = []; 
    var step = parseInt(360 / nodes) || 10; 
    var counter = 0; 
    for (var i = 0; i <= 360; i += step) { 
        var cLat = center.lat() + (new_radius / latConv * Math.cos(i * Math.PI / 180)); 
        var cLng = center.lng() + (new_radius / lngConv * Math.sin(i * Math.PI / 180)); 
        var point = new GLatLng(cLat, cLng); 
        CirclePoints.push(point); 
        counter++; 
    } 
    CircleResizeMarker.setLatLng(CirclePoints[Math.floor(counter / 4)]); //place circle resize marker 
    CirclePoints.push(CirclePoints[0]); //close the circle polygon 
    if (Circle) { map.removeOverlay(Circle); } //Remove existing Circle from Map 
    var fillColor = (circle_resizing || circle_moving) ? 'red' : 'blue'; //Set Circle Fill Color 
    Circle = new GPolygon(CirclePoints, '#FF0000', 2, 1, fillColor, 0.2); //New GPolygon object for Circle 
    map.addOverlay(Circle); //Add Circle Overlay on the Map 
    radius = new_radius; //Set global radius 
    map_center = center; //Set global map_center 
    if (!circle_resizing && !circle_moving) { //Fit the circle if it is nor moving or resizing 
        fitCircle(); 
        //Circle drawing complete trigger function goes here 
    } 
} 

//Fits the Map to Circle bounds 
function fitCircle() { 
    bounds = Circle.getBounds(); 
    map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds)); 
} 
</script>
<body onload="initialize()" onunload="GUnload()"> 
<div id="map_canvas" style="width:100%; height:450px"></div> 
</body>