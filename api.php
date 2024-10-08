<?php 
$dataString = file_get_contents('./db/discs.json');

header('Content-Type: application/json');

echo $dataString;


