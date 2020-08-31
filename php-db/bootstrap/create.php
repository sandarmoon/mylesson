<?php
include('../dbconnect.php');
$name=$_POST['name'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$language=$_POST['language'];
$class_id=$_POST['class'];
$languages="heo";


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

// INSERT INTO `members`(`id`, `name`, `photo`, `logo`, `birthday`, `gender`, `language`, `language_id`, `class_id`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
$query="insert into members (name, photo, logo, birthday, gender, language, language_id, class_id) values (:name,:photo,:logo,:birthday,:gender,:language,:language_id,:class_id)";

$stmt=$conn->prepare($query);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':photo',$profileFilePath);
$stmt->bindParam(':logo',$LogoFilePath);
$stmt->bindParam(':birthday',$birthday);
$stmt->bindParam(':gender',$gender);
$stmt->bindParam(':language',$languages);
$stmt->bindParam(':language_id',$language);
$stmt->bindParam(':class_id',$class_id);
if($stmt->execute()){
	header('Location:index.php');
}else{
	echo "failed to delete";
}

















	



















?>