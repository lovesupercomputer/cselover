<html>
<head>
<title>PRINT I-CARD</title>
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
		</NAV></div>
<form action="printing.php" method="post" >
<center><legend><span style="color:green" size="48px"><h1><u><strong>Login here to get your Id Card</strong></u></h1></span></legend></center>
<table style="width:50%" cellspacing='0' cellpadding="05" align='center' border="025" bgcolor="#94B9E2" class="grid" >
<tr><td width="39%" align="right"><strong>Electoral Number&nbsp;</strong><span style="color:red;" size="68">*</span></td>
<td><input type='text' name='eno' placeholder="User Name" maxlength="49" /></td></tr>
<tr><td width="39%" align="right"><strong>Password&nbsp;</strong><span style="color:red;" size="88">*</span></td>
<td><input type='password' name='pass2'  placeholder="Password" maxlength="12"/></td></tr>
<tr><td></td><td><input type='submit' style="color:green;font-size:18px;" name='submit' value='Submit'/></td></tr>
</table>

</form>
<?php
/*
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('127.0.0.1','root','') or die(mysql_error());
 mysql_select_db('projectvoting') or die(mysql_error());
 $eno=$_POST['eno'];
 $pass2=$_POST['pass2'];
 
 if($eno!=''&&$pass2!='')
 {
   $query=mysql_query("select * from register where eno='".$eno."' and pass2='".$pass2."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    //$_SESSION['eno']=$eno;
    //header('location:printing.php');
	echo "printing i card";
   }
   else
   {
    echo'<font color="red"; size="06">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  You entered Electoral Number or Password is Incorrect!!!</font>';
   }
 }
 else
 {
  echo'<font color="red"; size="06">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Enter both Electoral Number and Password!!!</font>';
 }
}
*/
?>
</body>
<br><br><br><br><br><br><br><br><br><br><br>
<marquee behavior="alternate"><b>Designed & Developed By Deepak,Sahej,Suraj (DSS Group 2K13) Under the Guidance of Mr. Abhay Kumar (Assistant Professor BIT Mesra,Ranchi<b></marquee>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<center><p><b>Copyright &#169 2015 E-Matdaan<b><p><center>
</html>