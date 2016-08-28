<html>
<head>
<title>REG SUCCESS</title>
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
<center><legend><span style="color:green" size="48px"><h2><u><strong>Registration Success</strong></u></h2></span></legend></center>
<div id="content" align="center" style="background-color:#008080;height:635px;width:1335px;float:center;">
<?php
 error_reporting('E_ALL ^ E_NOTICE');
if(isset($_POST['submit']))
 {

  mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('projectvoting') or die(mysql_error());
   mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('projectvoting') or die(mysql_error());
  $eno = rand(1000000,10000000000);
 $fname = $_POST['fname']; 
 $lname = $_POST['lname']; 
 $prc	=$_POST['prc'];
 $pass2	=$_POST['pass2'];
 $photo	=$_POST['photo']; 
 
  
  $q=mysql_query("select * from register where prc='".$prc."' or fname='".$fname."' ") or die(mysql_error());
  $n=mysql_fetch_row($q);
   if($n>0)
  {
   {
   echo'<font color="red"; size="05">The PRC  Number &nbsp;&nbsp;'.$prc.'  &nbsp;or Name &nbsp;&nbsp;'.$fname.' is already present in our database !!!
    Please Register Again !!! </font><br> <h2><a href="registration.php"><h2><b>Register Again</b></a></td></h3>';
	
  }
  }
  else
  {
   $insert=mysql_query("insert into register values('".$eno."','".$fname."','".$lname."','".$prc."','".$pass2."','".$photo."')") or die(mysql_error());
   
   echo' <font color="#F90"; size="05"> Congratulations  !!!  You have successfully enrolled for voting !!! <br> Now you can Vote to your Favourite Leader<br>
Kindly note your auto generated Electoral number:-&nbsp;';
echo  $eno ;
echo'&nbsp; & Password:-  ';
echo  $pass2;
echo'<br> it will be required For Voting & Printing Your Identity Card <br></font>' ;
   
   

  }
 } 
?>

<img src="reg.jpg" width="1250" height ="375" />
</div>
</div>
</body>
<br><br><br><br><br>
<marquee behavior="alternate"><b>Designed & Developed By Deepak,Sahej,Suraj (DSS Group 2K13) Under the Guidance of Mr. Abhay Kumar (Assistant Professor BIT Mesra,Ranchi<b></marquee>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<center><p><b>Copyright &#169 2015 E-Matdaan<b><p><center>
</html>