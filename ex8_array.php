<h1>Index Array with three dimensional</h1>
<?php
$number=[
		[11,22,33],
		2,
		3,4,
		[111,222,
		[1111,2222,4444]
		]
	];
echo $number[4][2][2];//index num call
?>

<h1>Associated Array</h1>
<?php
//key=>value
$student=[
			'name'=>'ACO',
			'age'=>23,
		'gender'=>'female',
// 'language'=>['design'=>'html',
// 			'script'=>'php',
// 			'framework'=>'laravel'
// 					]
			];

$teacher=array(
		'YTMN',
			22,
		'female',
		);

print_r($student);
echo "<br/>";
var_dump($teacher);
echo "<br/>";
echo $student['age'];
echo $student['name'];
echo $student['gender'];
echo $student['language']['framework'];
echo "<br/>";

echo array_key_exists('work', 
		$student)? $student['age']:'nothing found';

?>
<h1>Looping with Array</h1>
<?php
	// var_dump(count($teacher));
	for($i=0;$i<count($teacher);$i++){
		echo $teacher[$i];
	}
?>










