<h1>Getting string length</h1>
<?php

echo strlen("he")<3 ? 'you can':'try again';
?>

<h1>Getting Word Count</h1>
<?php
echo str_word_count('hello world Name');

?>

<h1>Compaing two strings</h1>

<!-- 
positive => str1 > str2
negative => str1 < str2
zero	 => equal to    -->

<?php
$str1="Mg Mg";
$str2="Mg Mgs";
echo strcasecmp($str2, $str1) >0 ? "big":"small";
?>

<h1>Transformation of String</h1>
<?php
	$str3="Happy World";
	//uppercase
	echo strtoupper($str3);

	echo "<br/>";

	//lowercase
	echo strtolower($str3);
?>

<h1>Cutting out of String</h1>
<?php
// minus--> leave count
// plus--> cutting count

$str4="photo.jpg";
$var1= substr($str4, -4);//.jpg
$myname="changephoto";
$finalName=$myname.$var1;

echo $finalName;

echo $str2;
?>

<h1>Replacing String</h1>
<?php
	
$str2=str_replace('Mgs', 'Aung',
				 $str2);
	echo $str2;
?>




























