<?php
include('dbconnect.php');
var_dump($conn);
// var_dump($_POST);
// echo "<br/>";
// var_dump($_FILES);


$name=$_POST['name'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$language_id=$_POST['language'];//id
$class_id=$_POST['class'];//id

// echo "$name and $birthday and $gender and $language";

$profile=$_FILES['photo'];//array
$logo=$_FILES['logo'];//array

if(sizeof($profile)>0){
	$profileName=$profile['name'];
$profileFilePath='images/'.time().$profileName;
move_uploaded_file($profile['tmp_name'], $profileFilePath);
	
}

if(sizeof($logo)>0){
	$LogoName=$logo['name'];
	$LogoFilePath='images/logo/'.time().$LogoName;
	move_uploaded_file($logo['tmp_name'], 
 	$LogoFilePath);
	
}


$query="INSERT INTO members 
(photo,logo,name,birthday,gender,
	language_id,class_id)
 VALUES 
 (:photo,:logo,:name,:birthday,:gender,
:language_id,:class_id)";


$stmt=$conn->prepare($query);
$stmt->bindParam(':photo',
	$profileFilePath);
$stmt->bindParam(':logo',$LogoFilePath);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':birthday',$birthday);
$stmt->bindParam(':gender',$gender);
$stmt->bindParam(':language_id',$language_id);
$stmt->bindParam(':class_id',$class_id);
if($stmt->execute()){
	header('Location:index.php');
}else{
	echo "something went wrong";
}
















?>