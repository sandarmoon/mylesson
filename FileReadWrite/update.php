<?php
// $data=$_POST;
// var_dump($data);

// $files=$_FILES;
// var_dump($files);

$name=$_POST['name'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$language=$_POST['language'];
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


$member=[ 'profile'=>$profileFilePath,
		  'logo'=>$LogoFilePath,
		  'name'=>$name,
		  'birthday'=>$birthday,
		  'gender'=>$gender,
		  'language'=>$language
			];

	// read file
$file=file_get_contents('list.json');

//array transform
$file_array=json_decode($file,true);

$file_array[$oldid]=$member;

//string trasform
$file_string=json_encode($file_array,JSON_PRETTY_PRINT);

//write file
file_put_contents('list.json', $file_string) ? header('Location:index.php'):
		print("failed to update");









?>