<!DOCTYPE html>
<html>
<head>
<center><h3><p style="color:black; background-color:#F0E68C; font-size:25px">BATAM</p></h3></center>
</head>
<br>
1. Conditions</br>
<body>
  <pre>
  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/2055f4ccf15515f1/conditions/q/indonesia/batam.json");
  $parsed_json = json_decode($json_string);
  $location= $parsed_json->current_observation->display_location->state_name;
  $city= $parsed_json->current_observation->display_location->city;
  $location1= $parsed_json->current_observation->observation_location->city;
  $time= $parsed_json->current_observation->observation_time;
  echo
  "Negara : $location </br>
  Kota : $city </br>
  Nama Bandara : $location1 </br>
  Update : $time \n";
?>
 </pre>
  </br>
2. History</br>
 <pre>
 <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/2055f4ccf15515f1/history_20160224/q/indonesia/batam.json");
  $parsed_json = json_decode($json_string);
  $date = $parsed_json->history->utcdate->pretty;
  $hour = $parsed_json->history->utcdate->hour;
  $min = $parsed_json->history->utcdate->min;
  echo
  "History pada : </br>
  Tanggal : $date </br>
  Jam : $hour </br>
  Menit ke : $min \n";
  ?>
  </br>
   </pre>
3. Satellite</br>
  <pre>
  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/2055f4ccf15515f1/satellite/q/indonesia/batam.json ");
  $parsed_json = json_decode($json_string);
  $version = $parsed_json->response->version;
  $features = $parsed_json->response->features->satellite;
  $satelit = $parsed_json->satellite->image_url;
 
  echo
  "Versi : $version </br>
  Satellite : $features </br>
  URL Satellite Batam : </br>
  $satelit \n";
  ?>
  </pre>
 </body>
</html>