<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://api.mapy.cz/loader.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>Loader.load()</script>
  
  <style>
body{
	margin:0;
    padding:0;
    background-color:grey;
}

h1{
text-align:center;
}

p{
  position:relative;
  background-color:#D3D3D3;
	box-sizing: border-box;
	border :1px solid rgba(0,0,0,.1);
  text-align: center;
  padding: 1px;
  display: block;
  width: 22%;
  margin-left: auto;
  margin-right: auto;
  border-radius: 25px;
}

</style>
</head>


<body>
<header>
<h1>Interaktivní mapa</h1>
</header>


  <div id="mapa" style="width:700px; height:600px; display:flex; margin: auto;"></div>
  <script type="text/javascript">
    var stred = SMap.Coords.fromWGS84(14.41, 50.08);
    var mapa = new SMap(JAK.gel("mapa"), stred, 10);
    mapa.addDefaultLayer(SMap.DEF_BASE).enable();
    mapa.addDefaultControls();	      	      
  </script>

<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql ="SELECT id, name, gpsX, gpsY from place";
$result = $conn -> query($sql);


if($result -> num_rows >0){
  while($row = $result -> fetch_assoc()) {
    echo "<p><tr><td><br>". $row ["id"] ."</td><td><br>". $row["name"] ."</td><td><br>". $row["gpsX"] ."</td><td><br>" .$row["gpsY"] ."</td></tr><br></p>";
  }
  echo "</table>";
}


?>
        <div id="map"></div>
      <script type="text/javascript">
            var gpsY = "14.5662";
            var gpsX = "50.9896";
            var middle = SMap.Coords.fromWGS84(gpsY, gpsX);
            var map = new SMap(JAK.gel("mapa"), middle, 10);

            map.addDefaultLayer(SMap.DEF_BASE).enable();
            map.addDefaultControls();

                            var pointerLayer = new SMap.Layer.Marker();
                map.addLayer(pointerLayer);
                pointerLayer.enable();

                gpsY = "14.557";
                gpsX = "50.9515";
                middle = SMap.Coords.fromWGS84(gpsY, gpsX);
                var options = {};
                var marker = new SMap.Marker(middle, "myMarker", options);
                pointerLayer.addMarker(marker);
                            var pointerLayer = new SMap.Layer.Marker();
                map.addLayer(pointerLayer);
                pointerLayer.enable();

                gpsY = "14.8446";
                gpsX = "50.8528";
                middle = SMap.Coords.fromWGS84(gpsY, gpsX);
                var options = {};
                var marker = new SMap.Marker(middle, "myMarker", options);
                pointerLayer.addMarker(marker);
                            var pointerLayer = new SMap.Layer.Marker();
                map.addLayer(pointerLayer);
                pointerLayer.enable();

                gpsY = "14.6182";
                gpsX = "50.9115";
                middle = SMap.Coords.fromWGS84(gpsY, gpsX);
                var options = {};
                var marker = new SMap.Marker(middle, "myMarker", options);
                pointerLayer.addMarker(marker);
                            var pointerLayer = new SMap.Layer.Marker();
                map.addLayer(pointerLayer);
                pointerLayer.enable();

            

  
    </script>


</body>

</html>
