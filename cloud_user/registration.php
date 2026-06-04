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
	
       $sql=mysql_query("select * from op_register where uname='$owner'");
	    $result=mysql_fetch_array($sql);
	   	   $num=$result['num_users'];
		   
								/*$sql=mysql_query("select * from op_user_reg where owner='$owner'");
								$rr=mysql_num_rows($sql);
								if($rr<$num)
								{*/
                    $sql = "insert into op_user_reg(id,uname,contactno,name,email,owner,pass,status,rdate)
					 values ($id,'$uname','$conno','$name','$email','$owner','$pass',0,'$rdate')";
					 echo $sql;
					    $result= mysql_query($sql);
                   	if($result)
					{					
			
					header("location:index.php");                                      
					}
					else 
					{
					//echo "successfully inserted";
					}
				/*}
				else
				{
				?>
				<script language="javascript">
				alert("User Limit over!");
				</script>
				<?php
				}*/

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
font-size:16px;
}

td{padding: 9px 29px;}
tr{}
.backg{
background-color: #04a9e0;
border-radius: 31px;
padding: 51px;
margin-left:140px;
}
h1{color:#fff;}
input[type=text]
{padding:8px;width:214px;}
input[type=password]
{padding:8px;width:214px;}
input[type=email]
{padding:8px;width:214px;}
textarea{padding:8px;width:214px;}
input[type=submit]
{background-color: #fff;
border-radius: 7px;
color: #000;
font-family: times new roman;
font-size: 14px;
font-weight: bold;
padding: 6px;}
td:first-child{color:#fff;font-weight:bold;}

  .style1 {
	font-size: 24px;
	font-weight: bold;
}
  </style>

 <script type="text/javascript">
     
function numbersonly(e){
    var unicode=e.charCode? e.charCode : e.keyCode
    if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
        if (unicode<48||unicode>57) //if not a number
            return false //disable key press
    }
}
function onlyAlphabets(e, t) {

            try {

                if (window.event) {

                    var charCode = window.event.keyCode;

                }

                else if (e) {

                    var charCode = e.which;

                }

                else { return true; }

                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)|| (charCode==08)|| (charCode==32)|| (charCode==224))

                    return true;

                else

                    return false;

            }

            catch (err) {

                alert(err.Description);

            }

        } 
</script>

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
  <li ><a href="index.php">Home</a></li>
  <li class="active"><a href="registration.php">Registration</a></li>
  
</ul>
</div>

</div>
<div class="content">
<div class="content-left">
  <div align="center"><br/>
    <span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REGISTER</span><br/>
    <br/>
    <br/>
  </div>
  <div class="row1">

<div class="backg ">

<form name="form1" method="post" action="">

<table align="center" ><br>
<br>
<tr>
<td>Data Owner </td>
<td><select name="owner">
  <?php
			  $sql=mysql_query("select * from op_register");
			  
			  while($row=mysql_fetch_array($sql))
			  {
			  echo "<option>".$row['uname']."</option>";
			  }
			  ?>
</select></td>
</tr>

<tr>
<td>Name</td>
<td>
<input type="text" name="name" ></td>
</tr>
<tr>
<td>Contact no </td>
<td>
<input type="text" name="conno" ></td>
</tr>
<tr>
<td>E-mail</td>
<td>
<input  type="text"  name="email" ></td>
</tr>
<tr>
<td>Username</td>
<td>

<input type="text" name="uname"></td>
</tr>
<tr>
  <td>Password</td>
  <td><input type="password" name="pass"></td>
</tr>
<tr>
<td>ConPass </td>
<td><input type="password" name="conpass"></td>
</tr>
<tr>
  <td colspan="2" style="text-align:center" ><input type="submit" name="btn" value="register" onClick="return validate()"></td>
</tr>
</table>
</form></div>


</div>

</div>

</div>
</div>




<div class="bottom">
<ul>

  <li><a href="index.php">Login</a></li>
  <li><a href="#">Registration</a></li>
  
</ul>

</div>
<!--DO NOT Remove The Footer Links-->
</div>
</div>
</div>

</body>
</html>
