<?php 

header("Content-type: application/json");

$rawData = file_get_contents('./data.json');

$data = json_decode($rawData, true);

echo json_encode($data);
?>