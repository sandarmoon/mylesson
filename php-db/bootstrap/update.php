<?php
include('../dbconnect.php');
// $data=$_POST;
// var_dump($data);

// $files=$_FILES;
// var_dump($files);

$name=$_POST['name'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$language=$_POST['language'];
$oldlanguage=$_POST['oldlanguage'];
$class_id=$_POST['class'];
$oldid=$_POST['oldid'];

 // echo "$name and $birthday and $gender and $language";

$profile=$_FILES['photo'];//array
$logo=$_FILES['logo'];//array

if($profile['size']>0){
	
	unlink($_POST['oldProfile']);
	$profileName=$profile['name'];
$profileFilePath='images/'.time().$profileName;
move_uploaded_file($profile['tmp_name'], $profileFilePath);	

}else{
	$profileFilePath=$_POST['oldProfile'];
}

if($logo['size']>0){
	echo "heo";
	unlink($_POST['oldLogo']);
	$LogoName=$logo['name'];
	$LogoFilePath='images/logo/'.time().$LogoName;
	move_uploaded_file($logo['tmp_name'], 
 	$LogoFilePath);
	
}else{
	$LogoFilePath=$_POST['oldLogo'];
}

$query="UPDATE members SET name=:name,photo=:photo,logo=:logo,birthday=:birthday,gender=:gender,language=:language,language_id=:language_id,class_id=:class_id WHERE id=:id";

$stmt=$conn->prepare($query);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':photo',$profileFilePath);
$stmt->bindParam(':logo',$LogoFilePath);
$stmt->bindParam(':birthday',$birthday);
$stmt->bindParam(':gender',$gender);
$stmt->bindParam(':language',$oldlanguage);
$stmt->bindParam(':language_id',$language);
$stmt->bindParam(':class_id',$class_id);
$stmt->bindParam(':id',$oldid);
if($stmt->execute()){
	header('Location:index.php');
}else{
	echo "failed to delete";
}















?>