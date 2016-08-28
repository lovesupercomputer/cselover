<html>
<head>
<title>PRC SUCCESS</title>
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

<center><legend><span style="color:green" size="48px"><h2><u><strong>PRC Success</strong></u></h2></span></legend></center>
<div id="content" align="center" style="background-color:##008080;height:635px;width:1335px;float:center;">
<?php
 error_reporting('E_ALL ^ E_NOTICE');
if(isset($_POST['submit']))
 {

  mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('projectvoting') or die(mysql_error());
  $prc = rand(1000000,10000000000);
 $uidno = $_POST['uidno']; 
 $fname = $_POST['fname']; 
 $lname = $_POST['lname']; 
 $sex = $_POST['sex']; 
 $fathername = $_POST['fathername']; 
 $bday = $_POST['bday']; 
 $houseno = $_POST['houseno']; 
 $at = $_POST['at']; 
 $po = $_POST['po']; 
 $ps = $_POST['ps']; 
 $const = $_POST['const']; 
 $pin = $_POST['pin']; 
 $state = $_POST['optone']; 
 $district = $_POST['opttwo']; 
 $mobile = $_POST['mobile']; 
 $email = $_POST['email']; 
 
 
 $q=mysql_query("select * from prc where uidno='".$uidno."' or email='".$email."' ") or die(mysql_error());
  $n=mysql_fetch_row($q);
   if($n>0)
  {
   {
   echo'<font color="red"; size="05">The UID Number &nbsp;&nbsp;'.$uidno.'  &nbsp;or Email &nbsp;&nbsp;'.$email.' is already present in our database !!!
    Please Register for PRC Again !!! </font><br> <h2><a href="prc.php"><h2><b>PRC</b></a></td></h3>';
	
  }
  }
  else
  {
   $insert=mysql_query("insert into prc values('".$prc."','".$uidno."','".$fname."','".$lname."','".$sex."','".$fathername."','".$bday."','".$houseno."','".$at."','".$po."','".$ps."',
   '".$const."','".$pin."','".$state."','".$district."','".$mobile."','".$email."')") or die(mysql_error());
   
   echo' <font color="green"; size="05"> Congratulations  !!!  your PRC has been successfully registered  ! <br> Now you can apply for the Voter ID card<br>
Kindly note your auto generated PRC number :-&nbsp;';
echo  $prc ;
echo'<br> it will be required while registering for Voter ID card <br></font>' ;
   
   echo'<h2><a href="registration.php"><h3><b>Register Now</b></a></h2>';

  }
 } 
?>

<img src="prc.jpg" width="1250" height ="375" />
</div>
</div>
</body>
<br><br><br><br><br>
<marquee behavior="alternate"><b>Designed & Developed By Deepak,Sahej,Suraj (DSS Group 2K13) Under the Guidance of Mr. Abhay Kumar (Assistant Professor BIT Mesra,Ranchi<b></marquee>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<center><p><b>Copyright &#169 2015 E-Matdaan<b><p><center>
</html>