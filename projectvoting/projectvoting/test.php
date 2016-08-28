<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/stylecss.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> PROJECT MANAGEMENT SYSYEM </title>

<style type="text/css">
.fadein { position:relative; height:332px; width:500px; }
.fadein img { position:absolute; left:0; top:0; }
</style>

<script type="text/javascript" src="js/datepickr.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>

<script src="js/jquery.min.js"></script>
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function()
	{
	$('.fadein :first-child')
	.fadeOut()
	.next('img').fadeIn()
	.end().
	appendTo('.fadein');
	}, 3000);
});

function abc()
{
$(function(){
	$('.fadein img:gt(0)').stop();
	
});
}
</script>

<link href="css/calender.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
</style>
<body background="image/back.jpg"  onload="myTimer();">
<p><br />
<center>
<img src="image/bgphoto.jpg" />
</center>
</p>
<table border="1" align="center" width="830" class="tab">
  
  <!----image start----->    
      <tr height="323">
        <td width="830" height="323" title="HOME"><img src="image/PROJECT1.jpg"  height="323" width="830"/></td>
       </tr>
  <!----image end----->
  <!----menu bar start----->
      <tr height="50">
        <td class="dd" width="800"><b><?php include "file/menu.php"; ?></b></td>
	  </tr>
  <!----menu bar end----->
  <!----date start----->
      <tr height="25">
        <td align="right"><?=date('d-M-Y')?> &nbsp;<p id="dd" style="padding:0; margin:0; float:right"></p></td>
        </tr>
  <!----date end----->
    <!----content start----->
      <tr>
        <td align="center">

<table width="830" border="0">
	<tr height="">
		<td  width="830"><div class="fadein">
  <img src="image/simple_img_1.jpg" title="image1" onmouseover="abc()">
  <img src="image/simple_img_2.jpg" title="image2" onmouseover="abc()">
  <img src="image/simple_img_3.jpg" title="image3" onmouseover="abc()">
  <img src="image/simple_img_4.jpg" title="image4" onmouseover="abc()">
  <img src="image/simple_img_5.jpg" title="image5" onmouseover="abc()">
  <img src="image/simple_img_6.jpg" title="image6" onmouseover="abc()">
  <img src="image/simple_img_7.jpg" title="image7" onmouseover="abc()">
  <img src="image/simple_img_8.jpg" title="image8" onmouseover="abc()">
  <img src="image/simple_img_9.jpg" title="image9" onmouseover="abc()">
</div></td>
			</tr>
</table>




  		</td>
      </tr>
  <!----content end----->
      <tr height="25">
        <td><?php include "file/back.php"; ?></td>
	  </tr>
  <!----footer start----->
      <tr height="110">
        <td align="center">
          <b><?php include "file/footer.php"; ?></b></td>
      </tr>
  <!----footer start----->
</table>
</body>
</html>
