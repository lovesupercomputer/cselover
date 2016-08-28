<html>
<head>
<script type="text/javascript">
function validateReqFields(thisform)
{
	var FirstName=thisform.fname.value;
	var PRC=thisform.prc.value;
	var Password1=thisform.pass1.value;
	var Password2=thisform.pass2.value;
	var Photo=thisform.photo.value;
	var terms=thisform.terms.value;
	
	if(FirstName==null || FirstName=="")
	{
		alert("Enter The First Name !!!");
		thisform.fname.focus();
		return false;
	}
	if(PRC==null || PRC=="")
	{
		alert("Enter The PRC Number !!!");
		thisform.prc.focus();
		return false;
	}
	if(Password1=="")
	{
		alert("Enter The Password!!!");
		thisform.pass1.focus();
		return false;
	}
	if(Password1.length<8)
	{
		alert("Password must contain atleast 8 digits!!!");
		thisform.pass1.focus();
		return false;
	}
	
	if(Password2=="")
	{
		alert("Please confirm The Password!!!");
		thisform.pass2.focus();
		return false;
	}
	if(Password2.length<8)
	{
		alert("Password must contain atleast 8 digits!!!");
		thisform.pass2.focus();
		return false;
	}
	if(Password1.length>=8 && Password2.length>=8)
	{
		if(Password1!=Password2)
		{
		alert("Password mismatched   Please Enter Correct Password!!!");
		return false;
		}
	}
	
	if(Photo=="")
	{
		alert("Please upload your Passport size Photo!!!");
		thisform.photo.focus();
		return false;
	}
	if(!thisform.terms.checked)
	{
		alert("Please Tick on Checkbox!!!");
		return false;
	}
	
return true;	
}


</script>

</head>

<title>ELECTORIAL REGISTRATION FORM</title>
<LINK REL=Stylesheet TYPE ="text/css" HREF="color.css">
<h1 style="margin-bottom:0;"><font color="maroon"</font><marquee onMouseOver="this.stop()" onMouseOut="this.start()"><b>Welcome to Election Commission of India !!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;भारतीय निर्वाचन आयोग आपका स्वागत करता है !!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   ಭಾರತದ ಚುನಾವಣಾ ಆಯೋಗ ಸ್ವಾಗತ  !!!  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ભારતના ચૂંટણી પંચે સ્વાગત છે !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ഇന്ത്യൻ തിരഞ്ഞെടുപ്പ് കമ്മീഷൻ സ്വാഗതം !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ভারতের নির্বাচন কমিশন স্বাগতম !!!   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ఎన్నికలసంఘం స్వాగతం ఉంది !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 भारतीय निवडणूक आयोगाच्या स्वागत आहे  !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; இந்திய தேர்தல் ஆணைக்குழு வரவேற்க !!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ਚੋਣ ਕਮਿਸ਼ਨ ਦਾ ਸੁਆਗਤ ਹੈ !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b></marquee></h1>
<body  onload="document.regform.fname.focus();"
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
$server = 'localhost';
 $username = 'root'; 
 $password = '';
 $database = 'projectvoting';
 mysql_connect($server,$username,$password) or die(mysql_error());
 mysql_select_db($database) or die(mysql_error());
?>
<img src="register.jpg" width="1338" height ="210" />

<form name="regform"action="http://localhost/projectvoting/regsuccess.php" method="post" onSubmit="return validateReqFields(this)"><center>

<legend><span style="color:maroon" size="48px"><h2><u><strong>Registration Form</strong></u></h2></span></legend>
<table style="width:50%" align="center" border="025" cellspacing="0" cellpadding="05" bgcolor="#94B9E2" class="grid">
<tr>
<td width="39%" align="right"><strong>First Name&nbsp;</strong><span style="color:red;" size="68">*</span></td>
<td width="61%"> <input type="text" name="fname" id="fname" placeholder="First Name" maxlength="14" style="width: 150px;"></td></tr>
<tr>
<td align="right" ><strong>Last Name</strong><span style="color:red;" size="88">*</span></td>
<td> <input type="text" name="lname" id="lname"  placeholder="Last Name" maxlength="14" style="width: 150px;"></td></tr>
<tr>
<td align="right" ><strong>PRC Number</strong><span style="color:red;" size="88">*</span></td>
<td> <input type="text" name="prc" id="prc" placeholder="PRC Number" maxlength="14" style="width: 150px;"></td></tr>
<tr>
<td align="right" ><strong>Choose Your Password</strong><span style="color:red;" size="88">*</span></td>
<td> <input type="password" name="pass1" id="pass1" placeholder="Password" maxlength="12" style="width: 150px;"></td></tr>
<tr>
<td align="right" ><strong>Re-Enter your Password</strong><span style="color:red;" size="88">*</span></td>
<td> <input type="password" name="pass2" id="pass2" placeholder="Password" maxlength="12" style="width: 150px;"></td></tr>
<tr>
<td align="right" ><strong> Upload Photo</strong><span style="color:red;" size="88">*</span></td>
<td> <input type="file" name="photo" id="photo" ></td></tr>
<tr>
<td align="right" ><strong>I agree to the<span style="color:red;" size="88">*</span><strong> </td>
<td> <input type="checkbox" name="terms" id="terms"> <a href="http://localhost/projectvoting/term.php"><strong>Terms &amp; Conditions</strong></a>
</td></tr>
<tr>
<td><p align="right"> <a href="http://localhost/projectvoting/forgetprc.php"><strong>Forget Your PRC?</strong></a></p>
  <p></p></td>
<td><p align="left">
<button type="submit" name="submit" id="submit" style="color:green;font-size:16px;" ><b>Submit</b>
</tr>
</table>
</form>
</body>
<br><br><br><br>
<marquee behavior="alternate"><b>Designed & Developed By Deepak,Sahej,Suraj (DSS Group 2K13) Under the Guidance of Mr. Abhay Kumar (Assistant Professor BIT Mesra,Ranchi<b></marquee>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<center><p><b>Copyright &#169 2015 E-Matdaan<b><p><center>
</html>