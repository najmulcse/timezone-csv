<!-- <?php
$file = 'airports.json';
$csvfile  = 'timezones.csv';
$data = file_get_contents($file);
$airports = json_decode($data);
$arrs = array();
foreach ($airports as $key => $value) {
	
	$arr['code'] = $value->code;
	$arr['timezone'] = $value->timezone;
	$arrs[] = $arr;
	
}
echo "<pre>";
print_r($arrs);

?> -->

<?php

$file = fopen("timezones.csv","r");

while(! feof($file))
  {
  echo "<pre>";
  $row = fgetcsv($file);
  echo $row[0]. ' '. $row[1]; 
  	
  }

fclose($file);

?>