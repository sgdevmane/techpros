<!DOCTYPE HTML>
<head>
<title>TechPros</title>
<link rel="icon" type="img/gif" href="../../images/logo.png">
<style>
.sign_1{height:100%; width:100%; margin-left:0px; margin-top:30px; border: 2px solid #1C8DFF;}
.sign_2{height:5%; width:100%; margin-left:0px; text-align:center; margin-top:0px;background-color:#1C8DFF;}
.sign_3{margin-left:0%; padding-top:15px;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../../css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../../css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="../../js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="../../js/nav.js"></script>
<script type="text/javascript" src="../../js/move-top.js"></script>
<script type="text/javascript" src="../../js/easing.js"></script>
<script type="text/javascript" src="../../js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
<script src="script1.js">
</script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		 <?php include('../../projects/School Projects/headertop.php');?>
	<?php include('../../projects/School Projects/menu.php');?>
    <center>
    <div class="sign_1">
<div class="sign_2">
<div class="sign_3">
<font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="5px"><b>SIGN UP</b></font><br><br>
</div>
</div>
<form name="signup" method="post" onSubmit="return Submit()"  action="signup_form_1.php" style="background-color:#999">
<br>
<font face="Arial, Helvetica, sans-serif" color="#000000" size="4px">Register New Account</font>
<br><br>

<table width="515" border="0" cellspacing="8" cellpadding="10">

  <tr>
    <td width="125" height="41" scope="col"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>User Name</b></font></td>
    <td width="326" scope="col"><input type="text" onChange="return nAme()" style="height:25px; width:300px; color:#1C8DFF;" required id="tx1" name="tx1" placeholder="Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = (placeholder="Name") ;}"/></td>
  <div id="nam" style="color:red; font-size:15px;"><br></div>
  </tr>
  <tr>
  <td height="41" ><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Emai-ID</b></font></td>
    <td><input type="email" required onChange="return eMail()" style="height:25px; width:300px; color:#1C8DFF;" id="tx2" name="tx2"  placeholder="Example@xyz.ab" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = (placeholder="Example@xyz.ab");}"/><div id="mail" style="color:red; font-size:15px;"><br></div></td>
   
  </tr>
  
  <tr>
    <td height="41"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Mobile Number</b></font></td>
    <td><input type="number" required onChange="return nUm()" style="height:25px; width:300px; color:#1C8DFF;" id="tx3" name="tx3"  placeholder="mobile no" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = (placeholder="Mobile no");}"/>
    <div id="num" style="color:red; font-size:15px;"><br></div>
    </td>
    
  </tr>
   
  <tr>
    <td height="41"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Password</b></font></td>
    <td><input type="password" required onChange="return pAss()" style="height:25px; width:300px; color:#1C8DFF;" id="tx4" name="tx4"  placeholder="password" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = (placeholder="Password");}"/>
    <div id="pass" style="color:red; font-size:15px;"><br></div>
    </td>
    
  </tr>

    <tr>
    <td height="41"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Re-Enter Password</b></font></td>
    <td><input type="password" required onChange="return rePass()" style="height:25px; width:300px; color:#1C8DFF;" id="tx5" name="tx5" placeholder="Re-entr passwrd" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = (placeholder="RE-entr passwrd");}"/>
    <div id="repass" style="color:red; font-size:15px;"><br></div>
    </td>
    </tr>
 
</table>
<br />
<center>
<input type="submit" id="tx10" name="Continue" value="Next" style="margin-left:0px; background-color:#06F; height:40px; width:150px; font-size:20px; font-family:Arial, Helvetica, sans-serif; color:#FFF;" />

</center>
</form>
<br>
<br>
</div>
</center>
</div>
</div>
</div>
   <?php include('../../projects/School Projects/footer.php');?>
    <script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>

