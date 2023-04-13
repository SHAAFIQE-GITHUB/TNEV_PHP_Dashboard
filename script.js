let mapOptions = {
    center:[10.8796374, 77.0216967],
    zoom:25
    
}


let map = new L.map('map' , mapOptions);

let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
map.addLayer(layer);

let marker = new L.Marker([10.8796374, 77.0216967]);
marker.addTo(map);
