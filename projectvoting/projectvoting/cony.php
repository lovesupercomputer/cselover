<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'project';
 
 // some basic sanity checks
 if(true) {
     //connect to the db
     $link = mysql_connect("$host", "$user", "$pass")
     or die("Could not connect: " . mysql_error());
	 echo("connected successfully !!! Connection has been established with database");// connection established
	}
?>
 