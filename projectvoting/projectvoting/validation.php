<?php
$server = 'localhost';
 $username = 'root'; 
 $password = '';
 $database = 'projectvoting';
 mysql_connect($server,$username,$password) or die(mysql_error());
 mysql_select_db($database) or die(mysql_error());
// Grab User submitted information
$uname = $_POST["uname"];
$pwd = $_POST["pwd"];

$result = mysql_query("SELECT uname, pwd FROM admin WHERE uname = $uname");

$row = mysql_fetch_array($result);

if($row["uname"]==$uname && $row["pwd"]==$pwd)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>