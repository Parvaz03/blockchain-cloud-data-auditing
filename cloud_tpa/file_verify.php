
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
extract($_POST);
$un=$_SESSION['uname'];
if($_REQUEST['act']=="ok")
	{
	
	$fid=$_REQUEST['id'];
mysql_query("update op_user_files set status='1' where id=$fid");	
	header("location:file_verify.php");	
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
		 
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <h2 align="center">Welcome TPA </h2>
      <table width="656" border="1" align="center" cellpadding="00" cellspacing="0">
        <tr>
          <th align="center" class="bg3">Sno</th>
          <th align="center" class="bg3">Data Owner </th>
          <th align="center" class="bg3">Uploaded File</th>
          <th align="center" class="bg3">Key Status</th>
        </tr>
        <?php
		  $sql= "select * from op_user_files";
		  $result=mysql_query($sql);		 
		  $i=0;
		  while($row =mysql_fetch_array($result))
		  {
		  $i++;
		  ?>
        <tr>
          <td class="bg4"><?php echo $i;?></td>
          <td class="bg4"><?php echo $row ['uname'];?></td>
          <td class="bg4"><?php echo $row ['upload_file'];?></td>
          <td class="bg4"><?php
			if($row['status']==0)
			{
			?>
              <a href="file_verify.php?act=ok&id=<?php echo $row['id']; ?>" > Provide key</a>
			  
              <?php
			}
			else
			{
			echo "Provided";
			}
			?></td>
        </tr>
        <?php
		  }
		
		  ?>
      </table>
      <p>&nbsp;</p>
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
	  <li class="active"><a href="file_verify.php">Home</a></li>
		  <li><a href="auditing.php">Auditing</a></li>
		  <li><a href="log_audit.php">Log</a></li>
       
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
