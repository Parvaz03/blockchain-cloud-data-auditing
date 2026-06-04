<?php
session_start();
extract ($_POST);
include("dbconnect.php");
include("email.php");
$cdate=date("d-m-Y"); 
$uname=$_SESSION['uname'];
$q1=mysql_query("select * from op_register where uname='$uname'");
$r1=mysql_fetch_array($q1);
$pkey=$r1['public_key'];
$n_user=$r1['num_users'];
if(isset($btn))
{
mysql_query("update op_register set num_users='$num_user' where uname='$uname'");
header("location:user_info.php");
}

//////////////
if($_REQUEST['act']=="ok")
{
$uid=$_REQUEST['uid'];
$q1=mysql_query("select * from op_user_reg where id=$uid");
$r1=mysql_fetch_array($q1);
$email=$r1['email'];
//echo $email;

mysql_query("update op_user_reg set status='1' where id=$uid");
	
		$objEmail	=	new CI_Email();
		$objEmail->from('cloudservice@gmail.com', "Cloud Service");
		//$objEmail->from('cloudservice@projectone.in', "Cloud Service");
		$objEmail->to("$email");
		//$objEmail->cc($txt_cc);
		//$objEmail->bcc($txt_bcc);
		$objEmail->subject("New Public Key");
		
		$objEmail->message("Public Key: ".$pkey);
			if ($objEmail->send())
			{	
			//echo 'mail sent successfully';
			}
			else
			{	
			//echo 'failed';
			}
?>
<script language="javascript">
alert("Accepted");
window.location.href="user_info.php";
</script>
<?php			
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Cloudy by Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style6 {font-size: 12px}
-->
</style>
<style type="text/css">
<!--
.style4 {color: #FF0000}
.style5 {color: #003399}
-->
</style>
<script language="javascript">
  function viewKey(id)
  {
  window.open("viewkey.php?id="+id,"Key","width=300,height=300,toolbar=0,statusbar=0,menubar=0,scrollbars=1");
  }
  function del()
  {
  	if(!confirm("Are you sure want to Delete?"))
	{
	return false;
	}
	return true;
  }
  </script>
</head>
<body>
<script language="javascript">
	ert("Updated successfully");
	window.location.href="user_info.php";
	</script>
<div id="logo">
	<h1><a href="#"> CLOUD owner&nbsp;&nbsp; </a></h1>
       
	<p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style5">&nbsp; User: <?php echo $uname; ?></span><span class="end">&nbsp;<span class="style4">&nbsp;<a href="logout.php">Logout</a></span></span></p>
</div>
<div id="header">
	<div id="menu">
		<ul>
			<li><a href="user.php"><span><span>Home</span></span></a></li>
						<li><a href="viewfiles.php"><span><span>ViewFiles</span></span></a></li>
						<li><a href="user_req.php"><span><span>UserRequest</span></span></a></li>
						<li id="menu_active"><a href="user_info.php"><span><span>UserDetails</span></span></a></li>
			            <li class="last"></li>
		</ul>
	</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="page">
 <!-- <form id="form1" method="post" action="">
    <table width="347" height="104" border="1" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <th colspan="2" align="center" scope="col"><h3>User Limit </h3></th>
      </tr>
      <tr>
        <td>No. of Users </td>
        <td><input type="text" name="num_user" value="<?php //echo $n_user ?>" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="btn" value="Submit" /></td>
      </tr>
    </table>
  </form>-->
  <p>
    <!-- end sidebar -->
  </p>
  <h3 align="center" class="pad_bot1">User Information </h3>
  <p>&nbsp;</p>
  <table width="647" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <th align="center" class="bg3">Sno</th>
      <th align="center" class="bg3">Name</th>
      <th align="center" class="bg3">Contact No. </th>
      <th align="center" class="bg3">E-mail</th>
      <th align="center" class="bg3">Username</th>
      <th align="center" class="bg3">Date</th>
      <th align="center" class="bg3">Action</th>
    </tr>
    <?php
		 $sql= "select * from op_user_reg where owner='$uname'";
		 $result=mysql_query($sql);
		   $i=0;
		  while($row=mysql_fetch_array($result))
		  { 
		  $i++;
		 
		  ?>
    <tr>
      <td class="bg4"><?php echo $i;?></td>
      <td class="bg4"><?php echo $row['name'];?></td>
      <td class="bg4"><?php echo $row['contactno'];?></td>
      <td class="bg4"><?php echo $row['email'];?></td>
      <td class="bg4"><?php echo $row['uname'];?></td>
      <td class="bg4"><?php echo $row['rdate'];?></td>
      <td class="bg4"><?php 
	  if($row['status']=="0")
			{
			echo '<a href="user_info.php?act=ok&uid='.$row['id'].'">Accept</a>';
			}
			else
			{
			echo "Accepted";
			}
	  ?></td>
    </tr>
   	<?php
	}
	?>
  </table>
  
  <p>&nbsp;    </p>
</div>
<!-- end page -->
<!-- start footer -->
	
<div align=center>
  <!-- end footer -->
</div>
<div align=center><script type="text/javascript"> Cufon.now();</script>
  <div id="footer">
    <div align="center"> <a rel="nofollow" href="#" target="_blank">Cloud Data Owner</a><br />
        <a href="#" target="_blank">Services</a> provided by cloudservice.com
      <!-- {%FOOTER_LINK} -->
        </footer>
    </div>
  </div>
</div>
<!-- end footer -->

</div>
<!-- end footer -->
<div align=center></div>
</body>
</html>

