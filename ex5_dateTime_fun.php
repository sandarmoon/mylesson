<h1>Getting Current Time</h1>
<?php
// Date
//Y -->year(2020)
//y -->year(20)
//M --> name of month(June or July)
//m--> number of month(01-12)
//D --> name of day(Monday or Tuesday)
//d --> number of day(01-30/31)

// Time
//h --> hour
//i --> minute
//s --> second
//a --> am/pm
echo date_default_timezone_get();
echo "<br/>";
date_default_timezone_set('Asia/Yangon');
echo date('y/m/d h:i:sa');
echo "<br/>";
echo date('Y/m/d',time());
echo "<br/>";

//string like tomorrow,.. to time
$tomorrow=strtotime('yesterday');//
echo date('Y/M/d h:i:sa',$tomorrow);







?>
