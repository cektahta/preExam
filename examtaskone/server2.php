<?php

$name = isset($_POST['name']) ? $_POST['name'] : 0;
$arr = ["aaaaaaa","bbbbbb","ccccc","dddddddd","eeeeeeee","ffffffff"];
$newArr = [];
$nam = (int)$name;
$counter = 0;
for ($i = 0; $i < count($arr);$i++) {
    $counter++;
    $newArr[] = $arr[$i];
    if ($counter == $nam) {
        break;
    }

}

echo json_encode($newArr);
