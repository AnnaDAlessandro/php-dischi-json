<?php
$string= file_get_contents("./src/data/dischi.json");
$list=json_decode($string,true);
header('Content-Type: application/json');
echo json_encode($list);


?>