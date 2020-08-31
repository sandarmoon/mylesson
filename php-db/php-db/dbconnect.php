<?php
$_Host="localhost";
$_DbName="Member_list";
$_User="root";
$_Password='';

// connection
try{
	$conn=new PDO("mysql:host=$_Host;dbname=$_DbName",$_User,$_Password);

 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
 echo $e->getMessage();
}

// read or retrieve

//echo "successfully connected";

// form language to members
 // $query="SELECT * FROM languages left join members on members.language_id=languages.id ";

 form member to language
 $query="SELECT * FROM members right join languages on members.language_id=languages.id ";

 //  $query="SELECT * FROM members as m right join languages as l on m.language_id=l.id left join languages as la   on m.language_id=la.id 

 //  ";
	
	// $stmt=$conn->prepare($query);//

	// $stmt->execute();

	// $row=$stmt->fetchAll();//get Data

	// var_dump($row);

	// $q1="SELECT * FROM languages";
	// $stmt=$conn->prepare($q1);

	// $stmt->execute();
	// $row=$stmt->fetchAll();
	// var_dump($row);


// $query="SELECT * from members
// 		 JOIN languages 
// 	ON members.language_id=languages.id";

// $query="SELECT members.name as memberName,
// 		languages.name as languageName,
// 		classes.name as className,
// 		members.*
		
//  from members
// 		 JOIN languages 
// 	ON members.language_id=languages.id
// 		JOIN classes
// 	ON members.class_id=classes.id";

$stmt=$conn->prepare($query);
$stmt->execute();
$row=$stmt->fetchAll();
var_dump($row);
























?>