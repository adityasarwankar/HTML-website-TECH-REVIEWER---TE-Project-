function addMarkersToMap(map) {
    var parisMarker = new H.map.Marker({lat:48.8567, lng:2.3508});
    map.addObject(parisMarker);
    var romeMarker = new H.map.Marker({lat:41.9, lng: 12.5});
    map.addObject(romeMarker);
    var berlinMarker = new H.map.Marker({lat:52.5166, lng:13.3833});
    map.addObject(berlinMarker);
    var madridMarker = new H.map.Marker({lat:40.4, lng: -3.6833});
    map.addObject(madridMarker);
    var londonMarker = new H.map.Marker({lat:51.5008, lng:-0.1224});
    map.addObject(londonMarker);
}

var platform = new H.service.Platform({
  'apikey': 'kvWNTuLiSY87feETLEq3ljCCFK6ek7k-Nk-gjp-dw6Q'
});
var defaultLayers = platform.createDefaultLayers();


var map = new H.Map(document.getElementById('map'),
  defaultLayers.vector.normal.map,{
  center: {lat:50, lng:5},
  zoom: 4,
  pixelRatio: window.devicePixelRatio || 1
});

window.addEventListener('resize', () => map.getViewPort().resize());


var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));


var ui = H.ui.UI.createDefault(map, defaultLayers);

window.onload = function () {
  addMarkersToMap(map);
}
