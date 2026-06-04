<?php
session_start();
extract ($_POST);
include("include/dbconnect.php");
if(isset($btn))
{

 $qry=mysql_query("select * from admin where uname='$un' && pass='$pw'");
	   $num=mysql_num_rows($qry);
		
		if($num)
		
			{
				$_SESSION['uname']=$un;
		  header("location:owner details.php"); 
			}
			
			else
			{
			echo "successfully inserted!";
			}
			}
	
		else
		{							
		//echo "Invalid User!";
		}
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>floral designer - free css template</title>
<meta name="keywords" content="floral designer, free css template, web design, CSS, HTML" />
<meta name="description" content="floral designer - HTML CSS, free css template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $(".carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
</script>
<script language="javascript">
  function validate()
  {
  	if(document.form1.uname.value=="")
	{
	alert("Enter the Username");
	document.form1.uname.focus();
	return false;
	}
	if(document.form1.pass.value=="")
	{
	alert("Enter the Password");
	document.form1.pass.focus();
	return false;
	}
	
return true;
  }
  </script><style type="text/css">
<!--
body {
	background-image: url(../cloud_owner/images/GEN1WHiteCutoutCloudsBlueBackground.jpg);
}
-->
  </style>
<style type="text/css">
<!--
.style1 {font-size: 40px}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
.style5 {font-size: 36px}
-->
</style>
</head>
<body><br /><center>
<p class="style1">Cloud Provider <br /><br /></p></center>
</div>


<div id="templatemo_menu_wrapper">

	<div id="templatemo_menu">

      <div align="left">
	          <ul>
	            <li>
	              <a href="index.php" class="selected">Home</a></li>
	            
        </ul>
      </div>
  </div>
</div> 

<div id="templatemo_content_wrapper">
 
<div id="templatemo_content">
	      <div class="section_w450 fr"><font color="blue" /font>
	        <div align="center"><span class="style5">LOGIN</span><br />
	              <span class="style2"></span></div>
	        <center>
		  <div align="center">

        <form method="post" name="form1" id="form1">
         
            <table width="361" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td colspan="2" class="red"><?php
			  if(msg!="")
			  {
			  //echo "msg";
			  }
			  ?></td>
              </tr>
              <tr>
                <td width="141" align="left">Username</td>
                <td width="200" align="left"><input type="text" name="un" /></td>
              </tr>
              <tr>
                <td align="left">Password</td>
                <td align="left"><input type="password" name="pw" /></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><div align="left"></div></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="btn" value="Login" onclick="return validate()" /></td>
              </tr>
              <tr>
                <td colspan="2" align="center">&nbsp;</td>
              </tr>
            </table></form>
	    </div></center>
  </div>
      
        <p>&nbsp;</p>
        <p><img src="image/cloud.jpg" "width="402" height="185" align="center" /></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div id="templatemo_footer">
      	  <div align="center"><a rel="nofollow" href="#" target="_blank"> Cloud Data Owner</a><br>
	        <a href="#" target="_blank">Services</a> provided by cloudservice.com
            <!-- {%FOOTER_LINK} -->
            </footer>
            <!-- end of footer -->
          </div>
      </div>
</div>
<div align=center><script type="text/javascript"> Cufon.now();</script></div>
</body>
</html>