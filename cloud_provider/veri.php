<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>floral designer - free css template</title>
<meta name="keywords" content="floral designer, free css template, web design, CSS, HTML" />
<meta name="description" content="floral designer - HTML CSS, free css template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $(".carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
</script>
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
<style type="text/css">
<!--
.style4 {font-size: 24px}
-->
</style>
</head>

<body>
<style type="text/css">
<!--
.style1 {font-size: 36px}
-->
</style>
</head>
<body>
<?php

session_start();
extract ($_POST);
include("include/dbconnect.php");
$cdate=date("d-m-Y"); 
if(isset($btn))
	{
	$gid=$_POST['gid'];
	
		for($i=0;$i<count($gid);$i++)
		{
		  $qs3=mysql_query("select * from op_send_audit where id='".$gid[$i]."'");
		  $rs3=mysql_fetch_array($qs3);
		  $fid=$rs3['fid'];
		  $qs2=mysql_query("select * from op_user_files where status>=1 && id='".$fid."'");
		  $rs2=mysql_fetch_array($qs2);
		  
  
		  $fn=$rs2['upload_file'];
		  $modify2=$rs2['modify_time'];	
		  
		  //$modify_time=date("d-m-Y H:i:s",filemtime("upload/$fn"));
		   $modify_time=date ("d-m-Y, H:i:s", filemtime("../cloud_owner/uploads/$fn"));
		  $key1=$rs2['key1']; 
		  $key2=$rs2['key2'];
		  $key3=$rs2['key3'];
		  $key4=$rs2['key4'];
		  $kb=$rs3['key_block'];
		  $st="";
			//echo "$rs3[fname]==$fn<br>";
			//echo "$modify2==$modify_time";
			if($rs3['fname']==$fn)
			{
			
				if($kb==$key1 || $kb==$key2 || $kb==$key3 || $kb==$key4)
				{
						if($modify2==$modify_time)
						{
				mysql_query("update op_user_files set status='2',file_st='1' where id='".$fid."'");
						}
						else
						{
				//out.print("File found but modified");
				mysql_query("update op_user_files set status='2',file_st='3' where id='".$fid."'");		
						}
				}
				else
				{
				//out.print("File not found");
				mysql_query("update op_user_files set status='2',file_st='2' where id='".$fid."'");
				}
			}
			else
			{
			//out.print("File not found");
			mysql_query("update op_user_files set status='2',file_st='2' where id='".$fid."'");
			}
		mysql_query("update op_send_audit set status='1' where id='".$gid[$i]."'");
		}

	
	}
/*	if(isset($btn))
	{
	$i;
		for($i=0;$i<count($gid);$i++)
		{
		  $sql=mysql_query("select * from send_audit where id=$gid[$i]");
		  $qs=mysql_fetch_array($sql);
		  $fid=$qs['fid'];
		   $qs3=mysql_query("select * from user_files where status>=1 && id='$fid'");
		  $qs1= mysql_fetch_array($qs3);	  
           $fn=$qs1['upload_file'];
		  
          $modify_time=date ("d-m-Y H:i:s.", filemtime("../cloud_owner/uploads/$fn"));
			
$uk=$uname.$id;
$sk=md5($uk);
$key1=substr($sk,0,8);
$key2=substr($sk,8,8);
$key3=substr($sk,16,8);
$key4=substr($sk,24,8);
			
			if($qs1["fname"]==$fn)
			{
			
				if($kb==$key1 || $kb==$key2 || $kb==$key3 || $kb==$key4)
				{
						if($modify2==$modify_time)
						{
				//out.print("File found");
				$sql="update user_files set status='2',file_st='1' where id=$fid";
						}
						else
						{
				//out.print("File found but modified");
				$sql= "update user_files set status='2',file_st='3' where id=$fid";		
						}
			}
				else
				{
				//out.print("File not found");
				$sql= "update user_files set status='2',file_st='2' where id=$fid";
			}
			}
			else
			{
			//out.print("File not found");
			$sql= "update user_files set status='2',file_st='2' where id=$fid";
			}
		$sql= "update send_audit set status='1' where id=$gid[$i]";
		}

		}*/
?>
<p>&nbsp;</p>
<p align="center"><span class="style4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>CLOUD PROVIDER</strong></span> </p>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div id="templatemo_menu_wrapper">
  <div id="templatemo_menu">
    <ul>
      <li><a href="owner details.php" class="selected">Home</a></li>
      <li><a href="veri.php">Verification</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>
<p>&nbsp;</p>
<div id="templatemo_content_wrapper">

  <div id="templatemo_content">
    
      <div class="section_w950 section_one">
        
            <h1>&nbsp;</h1>
            <h1><strong>File Details</strong></h1>
            <p>&nbsp;</p>
            <form method="post" name="form1" id="form1">
              <div class="box">
                 <table width="811" border="1" align="center" cellpadding="00" cellspacing="0">
            <tr>
              <th width="50" align="center" class="bg3">&nbsp;</th>
              <th width="88" align="center" class="bg3">Sno</th>
              <th width="125" align="center" class="bg3">Owner</th>
              <th width="110" align="center" class="bg3">Filename</th>
              <th width="191" align="center" class="bg3">Signature</th>
              <th width="179" align="center" class="bg3">Key</th>
              <th width="163" align="center" class="bg3">Date</th>
              <th width="163" align="center" class="bg3">Checking</th>
            </tr>
            <?php
		  $qs=mysql_query("select * from op_send_audit order by id desc");
		  $i=0;
		  while($rs=mysql_fetch_array($qs))
		  { $i++;
		  $fid2=$rs['fid'];
		 $qs4=mysql_query("select * from op_user_files where id='".$fid2."'");
		  $rs4=mysql_fetch_array($qs4);
		  	
		  ?>
            <tr>
              <td class="bg4"><input type="checkbox" name="gid" value="<?php echo $rs['id']; ?>" /></td>
              <td class="bg4"><?php echo $i; ?></td>
              <td class="bg4"><?php echo $rs['uname']; ?></td>
              <td class="bg4"><?php echo $rs['fname']; ?></td>
              <td class="bg4"><?php echo $rs['hsign']; ?></td>
              <td class="bg4"><?php echo $rs['key_block']; ?></td>
              <td class="bg4"><?php echo $rs['rdate']; ?></td>
              <td class="bg4"><?php
			 			if($rs4['status']==2)
						{
							if($rs4['file_st']==1)
							{
							echo "File found";
							}
							else if($rs4['file_st']==2)
							{
							echo "File  found";
							}
							else if($rs4['file_st']==3)
							{
							echo "File found but modified";
							}
						}
						else
						{
						echo "File not verified";
						}
			  ?></td>
            </tr>
            <?php
		  }
		  ?>
          </table>
                 
          <p align="center">
            <input type="submit" name="btn" value="Submit" />
          </p>
              </div>
            </form>
        <p>&nbsp;</p>
            <p>&nbsp;</p>
      </div>
        
        <div class="cleaner"></div>
        
       <p><span class="sidebar_box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
       <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
        <p>&nbsp;</p>
</div>
	</div>
    </div>
<div id="templatemo_footer">
      	  <div align="center"><a rel="nofollow" href="#" target="_blank"> Cloud Data Owner</a><br>
	        <a href="#" target="_blank">Services</a> provided by cloudservice.com
            <!-- {%FOOTER_LINK} -->
            </footer>
            <!-- end of footer -->
          </div>
</div>
</div>
<div align=center><script type="text/javascript"> Cufon.now();</script></div>
</body>
</html>
</div>
</body>
</html>
</div>
<div align=center></div>
</body>
</html>