<?php

$arr = [];
for ($i=0; $i < 5;$i++) {

    $arr[] = rand(0,200);
}
header('Content-Type:aplication/json');

echo json_encode($arr);

