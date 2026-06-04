<?php
session_start();
extract($_POST);
include("dbconnect.php");
$rdate=date("d-m-Y"); 
$uname=$_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cloud User</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  
  <script language="javascript">
  function validate()
  {
  	if(document.form1.skey.value=="")
	{
	alert("Enter the Secret Key");
	document.form1.skey.focus();
	return false;
	}
	return true;
  }
  </script>

  <style>
   table{
border:none;
font-size:24px;
}
td{padding:18px;}
tr{}
.backg{
background-color: #04a9e0;
border-radius: 31px;
adding: 51px;
margin-left:140px;
}
h1{color:#fff;}
input[type=text]
{padding:8px;}
input[type=password]
{padding:8px;}

input[type=submit]
{background-color: #fff;
border-radius: 7px;
color: #000;
font-family: times new roman;
font-size: 19px;
font-weight: bold;
padding: 4px;}

</style>
</head>
<body>

<div class="main-out">
<div class="main"><div class="page">
<div class="top">
<div class="header">
<div class="header-top">
<h1>Cloud <span>User</span></h1>

</div>
<div class="topmenu">
<ul>
  <li class="active"><a href="index.php">Home</a></li>
  <li><a href="view.php">viewrequest</a></li>
</ul>
</div>

</div>
<div class="content">
<div class="content-left">
<div class="row1">

<div class="backg ">
<?php
			
///////////////////
$uid=$_REQUEST['rid'];
$fid=$_REQUEST['fid'];


	if(isset($btn))
	{
	$skey=$_REQUEST['skey'];
	 $qs2=mysql_query("select * from op_request where id='".$uid."'");
	 $rs2=mysql_fetch_array($qs2);
	 $skey2=$rs2['secret_key'];
	 
	 $qs3=mysql_query("select * from op_user_files where id='".$fid."'");
	 $rs3=mysql_fetch_array($qs3);
	 	if($skey==$skey2)
	 	{
header("location:download.php?id=".$rs3['id']."&file1=".$rs3['upload_file']);
		}
		else
		{
		$msg="Invalid Secret Key!";
		}
	}




?>
                        
<form name="form1" method="post" action="">
  <h2 align="center">Receive File </h2>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  
  <table width="515" border="0" align="center">
    <tr>
      <td width="252">Enter the Secret Key </td>
      <td width="211"><input type="password" name="skey" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn" value="Download" onClick="return validate()" /></td></tr>
  </table>
  <p align="center"><?php echo $msg; ?></p>
</form></div> 


</div>

</div>

</div>
</div>




<div class="bottom">
<ul>

  <li><a href="logout.php">logout</a></li>
  
</ul>

</div>
<!--DO NOT Remove The Footer Links-->
</div>
</div>
</div>
    
</body>
</html>
