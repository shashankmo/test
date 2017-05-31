<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
<div style="height:300px; width:90%; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
 <table cellpadding="20" cellspacing="20" width="100%" height="200px"  style="margin:auto" >

   <tr><td colspan="7" align="center"><div><h1>Blood Avaliable Currently</h1></div></td></tr>

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:bisque" align="center" class="bold">            
		<td class="bold" align="center">Blood Bank Name</td>     
		<td class="bold" style="color:red"  >Avaliable A+ blood group (Units)</td>     
		<td class="bold" style="color:red"  >Avaliable A- blood group (Units)</td>     
		<td class="bold" style="color:red"  >Avaliable B+ blood group (Units)</td>     
		<td class="bold" style="color:red"  >Avaliable B- blood group (Units)</td>     
		<td class="bold" style="color:red"  >Avaliable AB+ blood group (Units)</td>     
		<td class="bold" style="color:red"  >Avaliable AB- blood group (Units)</td>     
		<td class="bold" style="color:red"  >Avaliable O+ blood group (Units)</td>     
		<td class="bold" style="color:red"  >Avaliable O- blood group (Units)</td>     

        <td class="bold"  >Address</td>
                   <td class="bold"  >Email</td>
                   <td class="bold"  >Phone</td>


        </tr>
                   



<?php

	
$cn=mysqli_connect("localhost","root","","blood_test");
$s="select * from bloodbanks";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	while($data=mysqli_fetch_array($result))
	{
	echo '<pre>';
	//var_dump($data);
		echo '</pre>';


				echo"<tr>
<td  style=' padding-left:10px'>$data[1]</td>
<td  style=' padding-left:20px'>$data[5]</td>
<td  style=' padding-left:20px'>$data[6]</td>
<td  style=' padding-left:20px'>$data[7]</td>
<td  style=' padding-left:20px'>$data[8]</td>
<td  style=' padding-left:20px'>$data[9]</td>
<td  style=' padding-left:20px'>$data[10]</td>
<td  style=' padding-left:20px'>$data[11]</td>
<td  style=' padding-left:20px'>$data[12]</td>
<td  style=' padding-left:20px'>$data[4]</td>
<td  style=' padding-left:20px'>$data[3]</td>
<td  style=' padding-left:20px'>$data[2]</td>


</tr>";
			}
			mysqli_close($cn);
			?>


</table>
</form>
        </div>
          
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>




			
			
	
</body>
</html>