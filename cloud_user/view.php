z<?php
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

.style1 {font-size: 16px}
  .style2 {font-size: 18px}
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
  <li><a href="search.php">Home</a></li>
  <li class="active"><a href="view.php">viewrequest</a></li>
</ul>
</div>

</div>
<div class="content">
<div class="content-left"><br/><br/><br/>
<div class="row1">

<div class="backg ">
  <h2 align="center" class="style1">View Request </h2>
  <p align="center" class="style1">&nbsp;</p>
  <p align="center" class="style1">&nbsp;</p>
  <form action="" method="post" name="form1" class="style1" id="form1">
    <p align="center">
      
    </p>
    <table width="584" height="96" border="1" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <th width="48" scope="col"><span class="style2">Sno</span></th>
        <th width="130" scope="col"><span class="style2">Title</span></th>
        <th width="87" scope="col"><span class="style2">File</span></th>
        <th width="208" scope="col"><span class="style2">Action</span></th>
      </tr>
      <?php
			
						
				 $i=0;
               //echo "select * from request where uname='$uname'";
				$sql=mysql_query("select * from op_request where uname='$uname'");
				
				while($row=mysql_fetch_array($sql))
				{
				$i++;
                $fid=$row['fid'];               
		 $sql2=mysql_query("select * from op_user_files where id='$fid'");
		$row2=mysql_fetch_array($sql2);
		 
		 //echo "select * from user_files where id='$fid'";
		
				?>
				
      <tr>
        <td><span class="style2"><?php echo $i; ?></span></td>
        <td><span class="style2"><?php echo $row2['file_content']; ?></span></td>
        <td><span class="style2"><?php echo $row2['upload_file']; ?></span></td>
        <td><span class="style2">
          <?php
				 if($row['status']==2)
				  {
				 
				  
				  ?>
            <a href="key.php?rid=<?php echo $row['id']; ?>&fid=<?php echo $fid; ?>">Download</a>
            <?php
				  }
				  else if($row['status']==1)
				  {
				  echo  " wait for approval...";
				  }
				  
				  ?>        
            </span></td>
      </tr>
	  <?php
	  }
	  
	  ?>
    </table>
  </form>
</div> 


</div>

</div>

</div>
</div>




<div class="bottom">
<ul>

  <li><a href="logout.php">Logout</a></li>
  
</ul>

</div>
<!--DO NOT Remove The Footer Links-->
</div>
</div>
</div>
    
</body>
</html>
