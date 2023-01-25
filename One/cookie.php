<?php

if(!empty($_POST['ip'])){
$data = $_POST['ip'];


$file = fopen("ip.txt", 'w');//creates new file
fwrite($file, $data);
fclose($file);
}
