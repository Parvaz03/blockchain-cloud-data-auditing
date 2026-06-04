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
.style1 {font-size: 36px}
-->
</style>
</head>
<body>
<p>
  <?php
session_start();
extract ($_POST);
include("include/dbconnect.php");
$cdate=date("d-m-Y"); 


	if($_REQUEST['act']=="ok")
	{
	$uid=$_REQUEST['id'];	
		mysql_query("update op_register set status='1' where id=$uid");
		header("location:owner details.php");
	}
		
	
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CLOUD PROVIDER </p>
<p>&nbsp;</p>
<div id="templatemo_menu_wrapper">

	<div id="templatemo_menu">
    
	    <ul><li><a href="owner details.php" class="selected">Home</a></li>
            <li><a href="veri.php">Verification</a></li>
			<li><a href="logout.php">Logout</a></li>
      </ul>
    
    </div>

</div> 


<div id="templatemo_content_wrapper">
	
   <div align="left"></div>
  <div id="templatemo_content">
    <div class="margin_r50">
        <h1 align="center"><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Owner Details</strong></h1>
		 
        <form method="post" name="form1" id="form1">
		
          <div class="box">
            <div align="right">
              <table width="665" height="45" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <th width="29" class="bg3">Sno</th>
                  <th width="70" class="bg3">Name</th>
                  <th width="79" class="bg3">E-mail</th>
                  <th width="73" class="bg3">Contact No </th>
                  <th width="48" class="bg3">city</th>
                  <th width="72" class="bg3">Uname</th>
                  <th width="87" class="bg3">Signature</th>
                  <th width="59" class="bg3">Date</th>
                  <th width="176" class="bg3">Action</th>
                </tr>
                <?php
			    $qry=mysql_query ("select * from op_register");
				$num=mysql_num_rows($qry);
		 if($num)
		 {
							 	    $i=0;
		 
			  while($row=mysql_fetch_array($qry))
		  { 

		 $i++;
		 ?>
                <tr>
                  <td height="24" class="bg4"><?php echo $i;?></td>
                  <td class="bg4"><?php echo $row['name'] ;?></td>
                  <td class="bg4"><?php echo $row['email'];?></td>
                  <td class="bg4"><?php echo $row['conno'];?></td>
                  <td class="bg4"><?php echo $row['city'];?></td>
                  <td class="bg4"><?php echo $row['uname'];?></td>
                  <td class="bg4"><?php echo $row['sign'];?></td>
                  <td class="bg4"><?php echo $row['rdate'];?></td>
                  <td class="bg4"><?php
			  
		       	
			if($row['status']==1)
			{
			echo "Approved";
			}
			else
			{
			?>
                    <a href="owner details.php?act=ok&amp;id=<?php echo $row['id'];?>"> Click to Approval</a>
                    <?php
			}
			
			?></td>
                </tr>
                <?php
		  }
		  }
		?>
              </table>
            </div>
          </div>
	  </form>
        <p>&nbsp;</p>
    </div>
    <center>
      <p><span class="sidebar_box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
      <div align="justify"></div>
	      <p><span class="sidebar_box"><img src="image/approved.html" alt="Slider 01" width="247" height="251" /></span></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </center>
	    <span class="sidebar_box"></span></div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
            <p>&nbsp;</p>
</div>
	<div id="header_right">
	        <a href="logout.php"></a></div>
        <div class="cleaner"></div>
  </div> <!-- 
        
      <div class="section_w950">
        
            
            
          <div class="cleaner">
            <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
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