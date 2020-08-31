<?php
//
$id=$_GET['index'];
$file=file_get_contents('list.json');
$file_array=json_decode($file,true);   

unlink($file_array[$id]['profile']);

unlink($file_array[$id]['logo']);

unset($file_array[$id]);

$file_string=json_encode($file_array);

echo file_put_contents('list.json',$file_string) ?"success":'failed';



?>