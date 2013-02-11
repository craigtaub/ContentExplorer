<?php 
header('Access-Control-Allow-Origin:*');
$array = array('first'=>'craig','second'=>'taub','section'=>$_GET['section']);
echo json_encode($array);

