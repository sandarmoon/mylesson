<?php
// echo "helo world";

//catching data at same file
// $data=$_POST;
// var_dump($data);

// $data=$_GET;
// var_dump($data);

// $file=$_FILES;
// var_dump($file);


// $data=$_SERVER['PHP_SELF'];
// var_dump($data);

$name=$_POST['name'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$language=$_POST['language'];

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

if(!$file_array){
	$file_array=[];//array create
}

array_push($file_array,$member);

//string trasform
$file_string=json_encode($file_array,JSON_PRETTY_PRINT);

//write file
file_put_contents('list.json', $file_string) ? header('Location:index.php'):
		print("failed to add");














	



















?>