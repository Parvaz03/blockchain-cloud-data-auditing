<?php
session_start();
extract($_POST);
include("dbconnect.php");
$rdate=date("d-m-Y"); 
if(isset($btn))
{
            $q=mysql_query("select max(id) from op_user_reg");
			$r=mysql_fetch_array($q);
			$id=$r['max(id)']+1;

		$qry=mysql_query("select * from op_user_reg where uname='$un' && pass='$pw' && status=1");
	    $num=mysql_num_rows($qry);
		
			if($num==1)
			{
			$row=mysql_fetch_array($qry);
			$owner=$row['owner'];
			echo "select * from op_register where uname='$owner' && public_key='$pbkey'";
			$q2=mysql_query("select * from op_register where uname='$owner' && public_key='$pbkey'");
			$n2=mysql_num_rows($q2);
				if($n2==1)
				{
					$_SESSION['uname']=$un;
					header("location:search.php"); 
				}
				else
				{
				?>
					<script language="javascript">
					alert("Invalid Public Key!");
					</script>
					<?php
				}
			}
			
			else
			{
		    $msg="Invalid User!";
			}
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
padding: 51px;
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

.style1 {font-size: 24px}
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
  <li><a href="registration.php">Registration</a></li>
</ul>
</div>

</div>
<div class="content">
<div class="content-left">
  <div align="center"><br/>
      <br/>
    <br/>
    <span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGIN    </strong></span><br/>
    <br/>
  </div>
  <div class="row1">

<div class="backg ">
                        
<form name="form1" method="post" action="">
<table align="center" >
<tr>
<td>User Name </td>
<td>
<input type="text" name="un"></td>
</tr>
<tr>
<td>Password</td>
<td>
<input type="password" name="pw"></td>
</tr>
<tr>
  <td>Public Key </td>
  <td><input type="password" name="pbkey"></td>
</tr>
<tr>
<td colspan="2" style="text-align:center"><label>

<input type="submit" name="btn" value="Submit" onClick="return validate()">

</label></td>
</tr>
<tr>
  <td colspan="2" class="msg" style="text-align:center"><?php echo $msg; ?></td>
</tr>
</table>
</form></div> 


</div>

</div>

</div>
</div>




<div class="bottom">
<ul>

  <li><a href="index.php">Home</a></li>
  <li><a href="#">Registration</a></li>
  
</ul>

</div>
<!--DO NOT Remove The Footer Links-->
</div>
</div>
</div>
    
</body>
</html>
