
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by http://www.bluewebtemplates.com
Released for free under a Creative Commons Attribution 3.0 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TPA</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/georgia.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
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
  </script>
<!-- CuFon ends -->
</head>
<body>
<?php
session_start();
include("include/dbconnect.php");
extract ($_POST);

if(isset($btn))
{

	$qry=mysql_query("select * from admin where uname='$un' && pass='$pw'");
	    $num=mysql_num_rows($qry);
		if($num)
			{
				$_SESSION['uname']=$un;
		  header("location:file_verify.php"); 
			}
			
			else
			{
			//echo "Invalid User!";
			}
		}
		else
		{
		//echo "Invalid User!";
		}
		
?>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.php"><span>Third Party </span>Auditor<br />
        <small>Audit for Cloud Data.. </small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="htext">
        <h2>&nbsp;&nbsp;&nbsp;</h2>
        <p><strong>&nbsp;&nbsp;&nbsp;</a></p>
		 <p><strong>&nbsp;&nbsp;&nbsp;</a></p>
		  <p><strong>&nbsp;&nbsp;&nbsp;</a></p>
		  <p><strong>&nbsp;&nbsp;&nbsp;</a></p>
		  <p><strong>&nbsp;&nbsp;&nbsp;</a></p>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#">Support</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <form id="form1" name="form1" method="post" action="">
            <h2 align="center">Login</h2>
            <table width="388" height="151" border="0" align="center" cellpadding="5">
              <tr>
                <th colspan="2" align="left" scope="col"><span class="msg">
                  <?php
			  if($msg!="")
			  {
			  echo $msg;
			  }
			  ?>
                </span></th>
              </tr>
              <tr>
                <th align="left" scope="col">Username</th>
                <th align="left" scope="col"><input type="text" name="un" /></th>
              </tr>
              <tr>
                <th align="left" scope="col">Password</th>
                <th align="left" scope="col"><input type="password" name="pw" /></th>
              </tr>
              <tr>
                <th align="left" scope="col">&nbsp;</th>
                <th align="left" scope="col"><input type="submit" name="btn" value="Login" onclick="return validate()" /></th>
              </tr>
            </table>
            <p>&nbsp;</p>
          </form>
          <h2>&nbsp;</h2>
        </div>
        <div class="article">
          <h2>&nbsp;</h2>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><img src="images/Audit-checklist.jpg" width="258" height="159" /></h2>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg">
    <div class="fbg_resize">
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright Cloud <a href="#">Website Templates</a></p>
      <ul class="fmenu">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contacts</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
