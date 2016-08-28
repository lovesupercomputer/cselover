<html>
<head>
<title>RESULT</title>
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
<center><img src="elecresult.jpg" width="1338" height ="200" /></center>
<?php     
         session_start();
         $name=$_SESSION['name'];     
        echo' <font color="green"; size="06">Welcome:&nbsp;'.$name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 </font>';
         echo'<a href="signout.php"><font color="red"; size="06"><strong>Signout</font></strong></a>';
?>
<br><br><br>
<h1 align="center" style="margin-top:0;"><font color="maroon"</font><b><u>Election Results !!!<u><b></h1>
<?php
 /*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "", "projectvoting");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution with order by clause
$sql = "SELECT * FROM voting ORDER BY vote";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<center><table></center>";
            echo "<tr>";
                echo'<font color="green"; size="05">Votes Per Id</font>';
				
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo '<td>' . $row['vote'] . '</td>';
				
            echo "</tr>";
        }
        echo "</table>";
		echo ' <font color="black"; size="05">The ID having maximum number of Votes is the Winner !!!</font>';
                
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

 


  
  
?>

</body>
<br><br><br>
<marquee behavior="alternate"><b>Designed & Developed By Deepak,Sahej,Suraj (DSS Group 2K13) Under the Guidance of Mr. Abhay Kumar (Assistant Professor BIT Mesra,Ranchi<b></marquee>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<center><p><b>Copyright &#169 2015 E-Matdaan<b><p><center>
</html>