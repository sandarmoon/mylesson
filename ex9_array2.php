<?php
	$student=[
			'name'=>'ACO',
			'age'=>23,
		'gender'=>'female',
'language'=>['design'=>'html',
			'script'=>'php',
			'framework'=>'laravel'
					]
			];
//array1 => $student
//array2 => temp array as student
foreach($student as $key=>$value){
	

	echo "key is $key and ";

	if(is_array($value)){
		foreach($value as $k=>$v){
			echo "key is $k and value is $v <br/>";
			}
		}else{
			echo $value;
			echo "<br/>";
		}

	

	}

echo "<br/>";
	$member=[
		'old'=>['name'=>'U Ba',
				'age '=>'30'],
		'young'=>['name'=>'Mg Sai',
				'age '=>'20'],
		];

		foreach($member as $key=>$m){
			echo "$key people info are <br/> ";
			foreach($m as $k=>$v){
				echo "the $k is $v!.<br/>";
			}
		}









?>