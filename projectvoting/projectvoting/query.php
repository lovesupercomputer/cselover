<table> <tr><td>User</td><td>Password</td></tr>
<?php
$server = 'localhost';
 $username = 'root'; 
 $password = '';
 $database = 'projectvoting';
 mysql_connect($server,$username,$password) or die(mysql_error());
 mysql_select_db($database) or die(mysql_error());
 $sql = "SELECT uname,pwd FROM `admin` WHERE uname=\'officer\'";
 $result = mysql_query($sql);
 

	 
 ?>