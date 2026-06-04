<?php
session_start();
extract($_POST);
include("dbconnect.php");
include("email.php");
$uname=$_SESSION['uname'];
$msg="";
$rdate=date("d-m-Y");

$qs4=mysql_query("select * from op_user_reg where uname='$uname'");
$rs4=mysql_fetch_array($qs4);
$owner=$rs4['owner'];

if(isset($btn))
{

$rand=rand(1000,9999);
$key=md5($rand);
$pkey=substr($key,0,8);

mysql_query("update op_user_reg set owner='$au',status='0' where uname='$uname'");
mysql_query("update op_register set public_key='$pkey' where uname='$owner'");
$q3=mysql_query("select * from op_register where uname='$owner'");
$r3=mysql_fetch_array($q3);
$email2=$r3['email'];


	$qs2=mysql_query("select * from op_user_reg where owner='$owner' && uname!='$uname'");
	while($rs2=mysql_fetch_array($qs2))
	{

	$email=$rs2['email'];
		$objEmail	=	new CI_Email();
		$objEmail->from('cloudservice@gmail.com', "Cloud Service");
		//$objEmail->from('cloudservice@projectone.in', "Cloud Service");
		$objEmail->to("$email");
		//$objEmail->cc($txt_cc);
		//$objEmail->bcc($txt_bcc);
		$objEmail->subject("Public Key Changed");
		
		$objEmail->message("Public Key: ".$pkey);
			if ($objEmail->send())
			{	
			//echo 'mail sent successfully';
			}
			else
			{	
			//echo 'failed';
			}
	}//while				
	
	////////////////////
	$objEmail2	=	new CI_Email();
		$objEmail2->from('cloudservice@gmail.com', "Cloud Service");
		//$objEmail->from('cloudservice@projectone.in', "Cloud Service");
		$objEmail2->to("$email2");
		//$objEmail->cc($txt_cc);
		//$objEmail->bcc($txt_bcc);
		$objEmail2->subject("Public Key Changed for User Elimination");
		
		$objEmail2->message("Public Key: ".$pkey);
			if ($objEmail2->send())
			{	
			//echo 'mail sent successfully';
			}
			else
			{	
			//echo 'failed';
			}
	//////////////////
?>
<script language="javascript">
alert("Chaneged Successfully");
window.location.href="logout.php";
</script>
<?php
}



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cloud User</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  
  <script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
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
  <style>
   table{
border:none;
font-size:18px;
}
td{padding:10px;}
tr{}
.backg{
background-color: #04a9e0;
border-radius: 31px;
padding: 10px;
margin-left:100px;
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
.style2 {color: #FFFFFF}
  </style>
</head>
<body>
<div class="main-out">
<div class="main">
<div class="page">
<div class="top">
<div class="header">
<div class="header-top">
<h1>Cloud <span>User</span></h1>

</div>
<div class="topmenu">
<ul>
  <li class="active"><a href="index.php">Home</a></li>
  <li><a href="view.php">View Request</a></li>
</ul>
</div>

</div>
<div class="content">
<div class="content-left"><br/><br/><br/><br/>
<div class="row1">

<div class="backg ">
  <h2 align="center">Change Data Owner </h2>
  <form id="form1" name="form1" method="post" action="">
    <p align="center">&nbsp;</p>
    <table width="297" height="78" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="57" scope="col"><span class="style2">Select</span></th>
        <th width="240" scope="col"><span class="style2">Data Owner </span></th>
      </tr>
      <?php
			$qs3=mysql_query("select * from op_register where uname!='".$owner."' && status=1");
			while($rs3=mysql_fetch_array($qs3))
			{
			?>
      <tr>
        <td><input name="au" type="radio" value="<?php echo $rs3['uname']; ?>" /></td>
        <td><?php echo $rs3['uname']; ?></td>
      </tr>
      <?php
			}
			?>
    </table>
    <p align="center">&nbsp;</p>
	<p align="center">
	  <input type="submit" name="btn" value="Submit" />
	</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
	
	
	<p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p align="center">&nbsp;        </p>
  </form>
</div> 
</div>
</div>
</div>
</div>
<div class="bottom">
<ul>
<li><a href="change.php">Change Data Owner</a></li>
  <li><a href="logout.php">Logout</a></li>
  

</ul>
</div>
<!--DO NOT Remove The Footer Links-->
</div>
</div>
</div>
   
</body>
</html>
