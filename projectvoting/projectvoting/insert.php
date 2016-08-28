<?php
$server = 'localhost';
 $username = 'root'; 
 $password = '';
 $database = 'projectvoting';
 mysql_connect($server,$username,$password) or die(mysql_error());
 mysql_select_db($database) or die(mysql_error());
 $name = $_POST['uidno'];
 $grade = $_POST['fname']; 
 $sql = "INSERT INTO `prc` (`uid` ,`first_name`) VALUES ('".$uidno."', '".$fname."')";
 $result = mysql_query($sql) or die(mysql_error());
//header('Location: http://localhost/comp.php/');
?>