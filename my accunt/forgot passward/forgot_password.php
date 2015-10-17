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
<script>

function eMail(){
	var b=document.forms["login"]["tx2"].value;
	var filter= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if( !filter.test(b) ){
			document.getElementById('tx2').style.borderColor="#F03";
	        //alert('Email should not be blank and should be in form of abc@xyz.ab');
	        document.getElementById('mail').innerHTML="*Email should be in form of abc@xyz.ab";
			return false;
			}
	else{
		document.getElementById('tx2').style.borderColor="#6F3";
			document.getElementById('mail').innerHTML=" ";
			return true;
		}
	}


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
<font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="5px"><b>Forgot Password</b></font><br><br>
</div>
</div>
<form name="login" method="post" onSubmit="return eMail()" action="forgot_password_1.php" style="background-color:#CCC">
<br>
<center>
<font face="Arial, Helvetica, sans-serif" color="#000000" size="4px">Enter your Email-ID</font>
<br><br>
<table width="515" border="0" cellspacing="8" cellpadding="10">
  <tr>
    <td height="41" ><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Emai-ID :</b></font></td>
    <td><input type="text" required onChange="return eMail()" placeholder="Example@xyz.ab" style="height:25px; width:300px; color:#000;" id="tx2" name="tx2" value="Enter your Emai-ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Emai-ID';}"/>
    <div id="mail" style="color:red; font-size:15px;"></div>
    </td>
  </tr>
  
</table>

<input type="submit" id="tx10" name="Continue" value="Submit" style=" margin-left:-15px; background-color:#06F; height:40px; width:150px; font-size:20px; font-family:Arial, Helvetica, sans-serif; color:#FFF;" />
</form>
</center>
<br>
<br>
<br />
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

