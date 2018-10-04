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
try {
        $conn = mysqli_connect("localhost", 'root', '', "ghurbo");
        //echo "Connected successfully"; 
    } catch (exception $e) {
        echo "Connection failed: " . $e->getMessage();
    }
while(! feof($file))
  {
  echo "<pre>";
  $row = fgetcsv($file);

    $sql = "INSERT into timezones 
                   values ('".$row[0]."','" . $row[1] . "','" . $row[2]. "')";
                $result = mysqli_query($conn, $sql);
  echo $row[0]. ' '. $row[1]; 
  	
  }

fclose($file);

?>