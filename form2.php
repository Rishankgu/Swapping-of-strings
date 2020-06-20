<!DOCTYPE html>
<html>
<head>
<title> swapping the 2 strings</title>
<link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
<h3 class="header"> Question 3</h3>
<a href="index.php">HOMEPAGE</a><br>
<div class="alignleft">
<div  class="centertext centered ">
<form action="" method="GET">
string1=<input type="text" name="value1">
string2=<input type="text" name="value2">
<input type=submit name="submit">
</form>
<?php
if(isset($_GET['submit']))
{
$a=$_GET["value1"];
$b=$_GET["value2"];
$temp;



 
 function callbyvalue($a,$b){
	$temp=$a;
    $a=$b;
    $b=$temp;
	echo"<h3>this is using the function call by value method to exchange the string:-<h3><br>";
    echo"<b>first string is<b> ".$a;
	echo'<br>';
    echo"<b>second string is <b> ".$b;
    echo'<br>';	
 }
 
 
callbyvalue($a,$b);


function callbyrefernce(&$a,&$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
	echo"<h4>this is using the function call by reference method to exchange the string:-<h4><br>";
    echo"<b>first string is<b> ".$a;
	echo'<br>';
    echo"<b>second string is <b> ".$b;		
}
callbyrefernce($a,$b);
}?>

</div>
<div  class="alignright  right">
<?php

show_source("form2.php");
?>
</div>
</body>
</html>
