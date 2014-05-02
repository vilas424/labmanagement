<?php 
	session_start();
	include("connect.php");
	if(isset($_POST['b1']))
		{
$q = mysql_query("select * from ainfo
				   where uname = '".$_REQUEST['t1']."' 
					  and
				    upass = '".$_REQUEST['t2']."' ");	
 $num = mysql_num_rows($q);
	if($num>0)
		{
				$row = mysql_fetch_array($q);	
				$_SESSION['fid'] = $row['uname'];
				$_SESSION['uname'] = $row['upass'];
				header("location:admininbox.php");
				exit();
		}else{
echo "<blink>uname and Passwd Not Matched!! </blink>";	
		}
	}

  if(isset($_GET['todo']) && $_GET['todo']=="logout")
  	{
			@session_destroy();
	} 
?>






















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab Managment</title>
<link href="stylelog.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="layer01_holder">
  <div id="left"></div>
  <div id="center"></div>
  <div id="right">
  </div>
</div>

<div id="layer02_holder">
  <div id="left">
  </div>
  <div id="center"></div>
  <div id="right"></div>
</div>

<div id="layer03_holder">
  <div id="left"></div>
  <div id="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>SIGN IN HERE<br /><br /></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <label>Name  
        <input name="t1" type="text" id="t1" />
      </label>
      <label>Password  
      <input type="password" name="t2" id="t2" style="margin-top:5px;" />
      </label>
      <label>
       <input type="submit" name="b1" id="button" value="Login" />
      </label>
    </form>    </td>
  </tr>
</table>
  </div>
  <div id="right"></div>
</div>

<div id="layer04_holder">
  <div id="left"></div>
  <div id="center">
  
<a href="index.php"><img src="images/goback.jpg"; width="60" height="20"></a>
 
 </div>
  <div id="right"></div>
</div>

<div id="layer05_holder">
  <div align="left">Copyright © 2012 OTEF(online technical exam faundation)</div>
</div>
</body>
</html>