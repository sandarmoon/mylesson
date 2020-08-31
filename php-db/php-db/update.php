<?php
include 'dbconnect.php';


$name=$_POST['name'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$language_id=$_POST['language'];
$class_id=$_POST['class'];
$oldid=$_POST['oldid'];

 // echo "$name and $birthday and $gender and $language";

$profile=$_FILES['photo'];//array
$logo=$_FILES['logo'];//array

if($profile['size']>0){
	// echo "helo";
	unlink($_POST['oldProfile']);
	$profileName=$profile['name'];
$profileFilePath='images/'.time().$profileName;
move_uploaded_file($profile['tmp_name'], $profileFilePath);	
}else{
	$profileFilePath=$_POST['oldProfile'];
}

if($logo['size']>0){
	// echo "way";
	unlink($_POST['oldLogo']);
	$LogoName=$logo['name'];
	$LogoFilePath='images/logo/'.time().$LogoName;
	move_uploaded_file($logo['tmp_name'], 
 	$LogoFilePath);
	
}else{
	$LogoFilePath=$_POST['oldLogo'];
}

$query="UPDATE members SET photo=:photo,
				logo=:logo,name=:name,
				birthday=:birthday,
				gender=:gender,
				language_id=:language_id,
				class_id=:class_id
				 WHERE id=:id";

	$stmt=$conn->prepare($query);
	$stmt->bindParam(':photo',$profileFilePath);
	$stmt->bindParam(':logo',$LogoFilePath);
	$stmt->bindParam(':name',$name);
	$stmt->bindParam(':birthday',$birthday);
	$stmt->bindParam(':gender',$gender);
$stmt->bindParam(':language_id',$language_id);
	$stmt->bindParam(':class_id',$class_id);
	$stmt->bindParam(':id',$oldid);

	if($stmt->execute()){
		header('Location:index.php');
	}else{
		echo "something went wrong";
	}


















?>