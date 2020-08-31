<?php
include('dbconnect.php');
$id=$_GET['id'];

$query="delete from members where id=:id";
$stmt=$conn->prepare($query);
$stmt->bindParam(':id',$id);
if($stmt->execute()){
	header('Location:index.php');
}else{
	echo "something went wrong";
}

?>