<h1>
	Arithmetic operation
</h1>
<?php 

$var1=12;
$var2=4;
echo "Addition =>".($var1+$var2)."<br/>";
echo "Subtraction =>".($var1-$var2)."<br/>";
echo "Multiplication =>".($var1*$var2)."<br/>";
echo "Division =>".($var1/$var2)."<br/>";
echo "Modules =>".($var1%$var2)."<br/>";

 ?>

 <h1>Comparison and Decision Making</h1>

<!-- if
if else
if elseif else
switch -->

<?php 
$myanmar=35;

if($myanmar>= 40 && 
	$myanmar<=80){
	echo "passed";
}elseif($myanmar>=80 &&
	$myanmar<=100)
{
	echo 'fly with colors';
}else{
	echo 'failed';
}

 ?>

 <h1>Assignment Operators</h1>
<?php
$var3=40;
$var4=60;
echo $var3."<br/>";//40
$var3 -= $var4;
echo $var3."<br/>";//100

$string1="welcome to may myo!";
$string1 .= "buy something for me";
echo $string1;

?>
<h1>Formatting</h1>
<?php
$var5=200.22;
$string2="I am so happy";
echo sprintf("My point is %d and %s",
		$var5,$string2);
echo "<br/>";
echo sprintf("My point is %0.2f and %s",
		$var5,$string2);

?>






















