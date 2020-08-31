<h1>Sorting Array</h1>
<?php
$fruit=array('mango','dragon fruit',
		'stawberry','apple','banana');

 sort($fruit);//value ascending
echo "<h3>Sorting -> sort()</h3>";
 foreach($fruit as $value){
 	echo $value."<br/>";
 }

  rsort($fruit);//value descending
echo "<h3>Sorting -> rsort()</h3>";
 foreach($fruit as $value){
 	echo $value."<br/>";
 }

 $eating=[
 			'breakfast'=>['coffee',
 						 'cake'],
 			'lunch'=>['rice','egg'],
 			'dinner'=>['fried rice',
 					'cool drink']
 		];

 echo "<h3>Sorting->ksort()</h3>";
 //ascending with key		
 ksort($eating);
 foreach($eating as $key=>$value){
 	echo "$key are ";
 	foreach($value as $v){
 		echo "$v, ";
 	}
 	echo ".<br/>";
 }

echo "<h3>Sorting->ksort()</h3>";
 //descending with key	
 krsort($eating);
 foreach($eating as $key=>$value){
 	echo "$key are ";
 	foreach($value as $v){
 		echo "$v, ";
 	}
 	echo ".<br/>";
 }

$cloth=['shirt'=>'blue',
		'pant'=>'navy',
		'neck'=>'gucci'
		];

 echo "<h3>Associated Sorting->asort()</h3>";
 //ascending with value	
 asort($cloth);
 foreach($cloth as $key=>$value){
 	echo "$key are $value ";
 	
 	echo "<br/>";
 }

 echo "<h3>Associated Sorting->arsort()</h3>";
 //descending with value	
 arsort($cloth);
 foreach($cloth as $key=>$value){
 	echo "$key are $value ";
 	
 	echo "<br/>";
 }

















?>