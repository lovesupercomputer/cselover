<html>
<head>
<head>
<script type="text/javascript">
function validateReqFields(thisform)
{
	var Eno=thisform.eno.value;
	
	if(Eno==null || Eno=="")
	{
		alert("Please Enter Your Electoral Number !!!");
		thisform.eno.focus();
		return false;
	}
	if(isNaN(Eno))
	{
		alert("Enter The Valid Electoral Number !!!");
		thisform.eno.focus();
		return false;
	}
	
	var Val=thisform.vote.value;
	
	if(Val==null || Val=="")
	{
		alert("Please Vote Your Favorite Leader  !!!");
		thisform.vote.focus();
		return false;
	}
	
	
	
return true;	
}


</script>
</head>
<title>VOTING</title>
<LINK REL=Stylesheet TYPE ="text/css" HREF="color.css">
<h1 style="margin-bottom:0;"><font color="maroon"</font><marquee onMouseOver="this.stop()" onMouseOut="this.start()"><b>Welcome to Election Commission of India !!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;भारतीय निर्वाचन आयोग आपका स्वागत करता है !!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   ಭಾರತದ ಚುನಾವಣಾ ಆಯೋಗ ಸ್ವಾಗತ  !!!  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ભારતના ચૂંટણી પંચે સ્વાગત છે !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ഇന്ത്യൻ തിരഞ്ഞെടുപ്പ് കമ്മീഷൻ സ്വാഗതം !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ভারতের নির্বাচন কমিশন স্বাগতম !!!   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ఎన్నికలసంఘం స్వాగతం ఉంది !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 भारतीय निवडणूक आयोगाच्या स्वागत आहे  !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; இந்திய தேர்தல் ஆணைக்குழு வரவேற்க !!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ਚੋਣ ਕਮਿਸ਼ਨ ਦਾ ਸੁਆਗਤ ਹੈ !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b></marquee></h1>
<body 
<div id="menu" style="background-color:#FFD600;height:175px;width:1340px;">
<NAV>
			<UL>
				<LI><a href="home.php" title="Go to the Home page"><b>Home<b></a></LI>
				<LI><a href="aboutus.php" title="About E-Matdaan"><b>About E-Matdaan<b></a></LI>
				<LI><a href="prc.php" title="PRC"><b>PRC<b></a></LI>
				<LI><a href="registration.php" title="Register"><b>Register<b></a></LI>
				<LI><a href="print.php" title="Print I-Card"><b>Print I-Card<b></a></LI>
				<LI><a href="vote.php" title="Vote" ><b>Vote<b></a></LI>
				<LI><a href="developers.php" title="About Developers"><b>About Developers<b></a></LI>
			</UL>
		</NAV>
</div>

<?php     
         session_start();
         $eno=$_SESSION['eno'];     
        echo' <font color="green"; size="05">Welcome:&nbsp;'.$eno.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 </font>';
         echo'<a href="signout.php"><font color="red"; size="05"><strong>Signout</font></strong></a>';
?>

<?php
$server = 'localhost';
 $username = 'root'; 
 $password = '';
 $database = 'projectvoting';
 mysql_connect($server,$username,$password) or die(mysql_error());
 mysql_select_db($database) or die(mysql_error());
?>
<img src="voting.jpg" width="1338" height ="200"/>
<center>

<div id="content" align="center" style="background-color:#0C9;height:1450px;width:1025px;float:center;">
<hr size="13" color="#300">
<font color="maroon" size="06"><b>Choose your leader&nbsp;!<b></font><br><br><br><br><br>

<form action="votingsuccess.php" method="post" onSubmit="return validateReqFields(this)">
<center>
<table border="0" cellspacing="0" cellpadding="35" align="Center">
<tbody><tr>
<td><b><font color="red">Party</font></b></td>
<td><b><font color="red">Leader</font></b></td>
<td><b><font color="red">Name</font></b></td>
<td><b><font color="red">Id</font></b></td>
</tr>

 <tr>
<td><img border="0" width="90px" height="90px" src="aap.jpg"></td>
<td><img border="0" width="90px" height="90px" src="kejriwal.jpg"></td>
<td><b> Sri Arvind Kejriwal</b></td>
<td>1</td>
</tr>
<tr>
<td><img border="0" width="90px" height="90px" src="bjp.jpg"></td>
<td><img border="0" width="90px" height="90px" src="raghubar.jpg"></td>
<td><b> Sri Raghubar Das</b></td>
<td>2</td>
</tr>
<tr>
<td><img border="0" width="90px" height="90px" src="congress.jpg"></td>
<td><img border="0" width="90px" height="90px" src="rahul.jpg"></td>
<td><b> Sri Rahul Gandhi</b></td>
<td>3</td>
</tr>

<tr>
<td><img border="0" width="90px" height="90px" src="tdp.jpg"></td>
<td><img border="0" width="90px" height="90px" src="chandrababu.jpg"></td>
<td><b>Shree N. Chandrababu Naidu</b></td>
<td>4</td>
</tr>
<tr>
<td><img border="0" width="90px" height="90px" src="rjd.png"></td>
<td><img border="0" width="90px" height="90px" src="lalu.jpg"></td>
<td><b>Sri Lalu Prasad</b></td>
<td>5</td>
</tr>
<tr>
<td><img border="0" width="90px" height="90px" src="dmk.jpg"></td>
<td><img border="0" width="90px" height="90px" src="jayalalitha.jpg"></td>
<td><b>Tirumathi J. Jayalalitha</b></td>
<td>6</td>
</tr>
<tr>
<td><img border="0" width="90px" height="90px" src="nota.png"></td>
<td><img border="0" width="90px" height="90px" src="nota.png"></td>
<td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOTA</b></td>
<td>7</td>
</tr>


</tbody></table>

<font color="maroon" size="05">Enter Your <b>Electoral Number</b> & <b>ID</b> of the <b>Leader</b> you want to Vote:- </font>
<table border="0" cellspacing="0" cellpadding="2" align="center">
<tbody><tr></tr>
<tr>
<td><b>Electoral Number</b><input type="text" name="eno" id="eno" maxlength="20" placeholder="Electoral Number"></td>
<td><b>ID</b><input type="text" name="vote" id="vote" maxlength="01" placeholder="ID"></td>
</td>
</tr>
</tbody></table>
</center>
<input type="submit" name="submit" value="Vote" id="submit" width="45" style="color:green;font-size:16px;" >
</form>
<hr size="13" color="#300">
</div>

</center>
</body>
<br><br>
<marquee behavior="alternate"><b>Designed & Developed By Deepak,Sahej,Suraj (DSS Group 2K13) Under the Guidance of Mr. Abhay Kumar (Assistant Professor BIT Mesra,Ranchi<b></marquee>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<center><p><b>Copyright &#169 2015 E-Matdaan<b><p><center>
</html>