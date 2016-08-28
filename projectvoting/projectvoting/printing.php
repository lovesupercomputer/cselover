<html>
<head>
<script language="javascript">

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</head>

<title>PRINTING</title>
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

$eno=$_POST['eno'];
$pass2=$_POST['pass2'];

 @mysql_connect('localhost','root','') or die("cannot connect con"); 
   mysql_select_db('projectvoting') or die("cannot connect"); 
   
    if($eno!=''&&$pass2!='')
 {
   $query=mysql_query("select * from register where eno='".$eno."' and pass2='".$pass2."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['eno']=$eno;
    
	$sql = "SELECT * FROM register where eno='$eno'";
$result = mysql_query($sql);
$row1 = mysql_fetch_row($result);
if(!$result)
	echo 'Invalid Electoral number!';

$prc=$row1[3];
$sql = "SELECT * FROM prc where prc='$prc'";
$result = mysql_query($sql);
$row2 = mysql_fetch_row($result);


   }
   else
   {
    echo'<font color="red"; size="06">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <b>You entered Electoral Number or Password is Incorrect!!!</b></font>';
   }
 }
 else
 {
  echo'<font color="red"; size="06">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<b>Enter both Electoral Number and Password!!!</b></font>';
 }
   
   
 
?>



<?php     
         session_start();
       
        echo' <font color="green"; size="05">Welcome:&nbsp;'.$eno.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 </font>';
         echo'<a href="signout.php"><font color="red"; size="05"><strong>Signout</font></strong></a>';
?>
<center><img src="voter.jpg" width="1338" height ="240" /></center>
<h1 align="center" style="margin-top:0;"><font color="maroon"></font><b><u>Get Voter Id-Card here <u><b></h1>
<div id="content" style="height:500px;width:1225px;float:left;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><img src="pp.jpg" width="360" height="186" />
                    </td>
                </tr>
              </table>
              <table width="350" border="0" bordercolor="#000000" cellspacing="0" cellpadding="0" align="center" style="margin-top:-200px;font-family:Arial; font-size:12px; color:#000">
                      <tr>
                        <td colspan="4" height="60" style="font-size:15px; color:#FFFFFF; font-weight:bold; padding-left:50px; text-transform:uppercase"> Election Commission of India</td>
                      </tr>
                      <tr>
                        <td colspan="4" height="5">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="84" rowspan="5"><img src="<?=$row1[5]?>" width="75" height="90" border="1" /></td>
                        <td width="50"><strong>Electoral No.</strong></td>
                        <td width="8" align="center"><strong>:</strong></td>
                        <td width="175"><?=$row1[0]?></td>
                      </tr>
                      <tr>
                        <td><strong>Name</strong></td>
                        <td width="8" align="center"><strong>:</strong></td>
                        <td style="text-transform:uppercase"><?=$row2[2]?> <?=$row2[3]?></td>
                      </tr>
                      <tr>
                        <td valign="top"><strong>Father's Name</strong></td>
                        <td align="center" valign="top"><strong>:</strong></td>
                        <td valign="top"><?=$row2[5]?></td>
                      </tr>
                      <tr>
                        <td><strong>Gender</strong></td>
                        <td align="center"><strong>:</strong></td>
                        <td><?=$row2[4]?></td>
                      </tr>
                      <tr>
                        <td><strong>DOB</strong></td>
                        <td align="center"><strong> </strong><strong>:</strong></td>
                        <td><?=$row2[6]?></td>
                      </tr>
                       <tr>
                        <td></td>
                        <td height="60px"></td>
                        <td></td>
                      </tr>
                    </table><br />
					
					<table border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><img src="pp.jpg" width="360" height="186" />
                    </td>
                </tr>
              </table>
              <table width="350" border="0" bordercolor="#000000" cellspacing="0" cellpadding="0" align="center" style="margin-top:-200px;font-family:Arial; font-size:12px; color:#000">
                      <tr>
                        <td colspan="4" height="60" style="font-size:15px; color:#FFFFFF; font-weight:bold; padding-left:50px; text-transform:uppercase"> Election Commission of India</td>
                      </tr>
                      <tr>
                        <td colspan="4" height="5">&nbsp;</td>
                      </tr>
                      <tr>
                        
                        <td width="50"><strong>PRC No.</strong></td>
                        <td width="8" align="center"><strong>:</strong></td>
                        <td width="175"><?=$row1[3]?></td>
                      </tr>
                      <tr>
                        <td><strong>House No.</strong></td>
                        <td width="8" align="center"><strong>:</strong></td>
                        <td style="text-transform:uppercase"><?=$row2[7]?></td>
                      </tr>
                      <tr>
                        <td valign="top"><strong>At</strong></td>
                        <td align="center" valign="top"><strong>:</strong></td>
                        <td valign="top"><?=$row2[8]?></td>
                      </tr>
                      <tr>
                        <td><strong>District</strong></td>
                        <td align="center"><strong>:</strong></td>
                        <td><?=$row2[14]?></td>
                      </tr>
                      <tr>
                        <td><strong>State</strong></td>
                        <td align="center"><strong> </strong><strong>:</strong></td>
                        <td><?=$row2[13]?></td>
                      </tr>
					   <tr>
                        <td><strong>Contact No.</strong></td>
                        <td align="center"><strong> </strong><strong>:</strong></td>
                        <td><?=$row2[15]?></td>
                      </tr>
                       <tr>
                        <td></td>
                        <td height="60px"></td>
                        <td></td>
                      </tr>
                    </table>
					<center><input type="button"  onclick="printDiv('content')" value="Print"/></center>

</div>

</body><br><br><br><br><br><br><br><br>
<marquee behavior="alternate"><b>Designed & Developed By Deepak,Sahej,Suraj (DSS Group 2K13) Under the Guidance of Mr. Abhay Kumar (Assistant Professor BIT Mesra,Ranchi<b></marquee>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<center><p><b>Copyright &#169 2015 E-Matdaan<b><p><center>
</html>