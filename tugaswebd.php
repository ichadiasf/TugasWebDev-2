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
  Lokasi Observasi : $location1 </br>
  Waktu Observasi : $time \n";
?>
