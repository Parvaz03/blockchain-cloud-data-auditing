
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

	
		 $qry=mysql_query ("select * from admin where username='$un' && password='$pw'");
	    $num=mysql_num_rows($qry);
		if($num)
			
			{
			$_SESSION['uname']=$un;

			header("location:file_verify.php");
			}
			else
			{
			echo "Invalid User!";
			}
		
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
          <li><a href="file_verify.php">Home</a></li>
		  <li><a href="auditing.php">Auditing</a></li>
		  <li class="active"><a href="log_audit.php">Log</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <h2 align="center">Log Details </h2>
      <table width="509" border="1" align="center" cellpadding="00" cellspacing="0">
        <tr>
          <th width="88" align="center" class="bg3">Sno</th>
          <th width="205" align="center" class="bg3">Signature</th>
          <th width="156" align="center" class="bg3">Key</th>
          <th width="156" align="center" class="bg3">Date</th>
        </tr>
        <?php
		$sql= mysql_query ("select * from op_send_audit where status>=1 ");
		  $i=0;
		  while($row=mysql_fetch_array($sql))
		  	{ 
			$i++;
		  ?>
        <tr>
          <td class="bg4"><?php echo $i;?></td>
          <td class="bg4"><?php echo $row['hsign'];?></td>
          <td class="bg4"><?php echo $row['key_block'];?></td>
          <td class="bg4"><?php echo $row['rdate'];?></td>
         </tr>
        <?php
		  }
		  ?>
      </table>
      <h2 align="center">&nbsp;</h2>
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
	  <li><a href="file_verify.php">Home</a></li>
		  <li><a href="auditing.php">Auditing</a></li>
		  <li class="active"><a href="log_audit.php">Log</a></li>
       
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
