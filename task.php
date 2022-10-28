<?php

$x= 550;
$xy= 338;


//variable with global scope
function varglobal(){

global  $x;
    echo "Variable outside function is : $x";

    echo "<br>";

    global $x,$xy;
    $result= $x + $xy;

    echo "Output the new value : $result";
  

}
 varglobal();
 echo "<br>";


 //variable local scope

 function varlocal(){

$y= 7812000;


echo "variable inside function is : $y";

 }

 echo varlocal();

 echo "<br>";



 //variable static scope

 function varstatic($number){
 	static $x= 200;
 	$x+= $number;
 	echo $x. '</br>';



 }
varstatic(100);
varstatic(200);
varstatic(300);
varstatic(500);


//array
$name=[
	'user'=>'Prema',
	'phone num'=>'7897897897',
	'address'=> 'address here',
	'city' =>'Bangladesh'

];

echo "<pre>";
echo ($name['city']);
echo "</pre>";

$username= [
	'name'=>'Prema Chakraborty',
	'color'=>'red',
	'fruit'=>'Orange',
	'Country'=>[
		'bd'=>'Bangladesh',
		'can'=>'Canada',
		'Ind'=>'India',
	],




];
echo "<pre>";
echo ($username['Country']['can']);
echo "</pre>";



echo "<br>";

//strtoupper

$yz='Web Designer';

echo strtoupper($yz);
echo "<br>";


//strtolower


$three= "Web Developer";
echo strtolower($three);
echo "<br>";
//ucwords
echo ucwords($three);
echo "<br>";

//strrev
$x="Hello World";
echo strrev($x);
echo "<br>";


//str_shuffle

echo str_shuffle($x);
echo "<br>";

//strpos
$name= "Prema Chakraborty";
echo strpos($name,'Chakraborty');
echo "<br>";

//str_replace

$name=' My name is Priya Chakraborty';



echo str_replace('Prema', 'Priya', $name);

echo "<br>";

//password_hash

$pass="poujgjgoupu";

echo   password_hash($pass, PASSWORD_BCRYPT);





?>