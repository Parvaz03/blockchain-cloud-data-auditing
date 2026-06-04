<?php
session_start();
extract($_POST);
include("dbconnect.php");
$rdate=date("d-m-Y"); 
$uname=$_SESSION['uname'];


            $q=mysql_query("select max(id) from op_request");
			$r=mysql_fetch_array($q);
			$id=$r['max(id)']+1;

         
			$sql=mysql_query("select * from op_user_reg where uname='$uname' ");
	        $result=mysql_fetch_array($sql);
			$owner=$result['owner'];

if($_REQUEST['act']=="ok")
	{
		$did=$_REQUEST['did'];
	
	
	$sql="insert into op_request(id,uname,owner,fid,secret_key,status,rdate) values($id,'$uname','$owner','$did','','1','$rdate')";
	
	$result=mysql_query($sql);
					//echo $sql;
					
					if($result==1)
					
					{
									?>	
					
					<script language="javascript">
					alert("Request has been sent successfully...");
					window.location.href="view.php";
					</script>
										
      
<?php
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

.style1 {font-size: 18px}
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
  <li class="active"><a href="search.php">Home</a></li>
  <li><a href="view.php">View Request</a></li>
</ul>
</div>

</div>
<div class="content">
<div class="content-left"><br/><br/><br/><br/>
<div class="row1">

<div class="backg ">
  <h2 align="center">Search</h2>
  <form id="form1" name="form1" method="post" action="">
    <p align="center">&nbsp;</p>
    <p align="center">
      <input type="text" class="sbox" name="getval" />
      &nbsp;
      <input name="btn" type="submit" class="sbutt" value="Search" />
  
	</p>
	<?php
	if(isset($_REQUEST['btn']))
	{
	//echo "select * from user_files where uname='$owner' && file_content like '%$getval%'";
	$sql=mysql_query("select * from op_user_files where uname='$owner' && file_content like '%$getval%'");
	$n=mysql_num_rows($sql);
	if($n>0)
	{
	?>
	<p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
	
	
	<table width="573" height="93" border="1" align="center" cellpadding="5" cellspacing="0">
      	  <tr>
	          <th width="48" scope="col"><span class="style1">Sno</span></th>
        <th width="135" scope="col"><span class="style1">Title</span></th>
        <th width="90" scope="col"><span class="style1">File</span></th>
        <th width="194" scope="col"><span class="style1">Action</span></th>
      </tr>
      <?php
				
				$i=0;
				
				while($row=mysql_fetch_array($sql))
				{ 
				$i++;
				?>
      <tr>
        <td><span class="style1"><?php echo $i; ?></span></td>
        <td><span class="style1"><?php echo $row['file_content']; ?></span></td>
        <td><span class="style1"><?php echo $row['upload_file']; ?></span></td> 
        <td><a href="search.php?act=ok&did=<?php echo $row['id']?>" class="style1">Send Request</a></td>
      </tr>
	  <?php
	  }
	  ?>
          </table>
		  <p>
		    <?php
				
				
				}
				else
				{
				echo "No data";
				}
				
				
				}
				?>
		    </p>
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
