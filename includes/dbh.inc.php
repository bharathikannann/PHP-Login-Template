<?php

$servername="localhost";
$dbusername="root";
$password="";
$dBName="loginsystem";

$conn=mysqli_connect($servername,$dbusername,$password,$dBName);

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
