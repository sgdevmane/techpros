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

function pAss(){
	var d=document.forms["login"]["tx4"].value;
	var letter=/[a-zA-Z]/;
	 var number=/[0-9]/;
	 
	if(d.length < 6 || !letter.test(d) || !number.test(d) ){
		document.getElementById('tx4').style.borderColor="#F03";
		//alert(' Password should not be blank and should contain at least one character and one digit . Length (6-12).');
		document.getElementById('pass').innerHTML="*password should contain at least one character and one digit . Length (6-12)";
		return false;
		}
		else{
			document.getElementById('tx4').style.borderColor="#6F3";
			document.getElementById('pass').innerHTML=" ";
			return true;

			}
	}

function Login(){
var b=document.forms["login"]["tx2"].value;
var d=document.forms["login"]["tx4"].value;
var allLetter = /^[a-zA-Z]+$/;
var letter=/[a-zA-Z]/;
var number=/[0-9]/;
var filter= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;	


if( !filter.test(b) ){
			document.getElementById('tx2').style.borderColor="#F03";
	        //alert('Email should not be blank and should be in form of abc@xyz.ab');
	        //document.getElementById('mail').innerHTML="*Email should be in form of abc@xyz.ab";
			return false;
			}
			

if(d.length < 6 || !letter.test(d) || !number.test(d) ){
		document.getElementById('tx4').style.borderColor="#F03";
		//alert(' Password should not be blank and should contain at least one character and one digit . Length (6-12).');
		return false;
		}

	
	
	else
	 {
		alert('Sucessfull logedin ');
		document.getElementById('tx2').style.borderColor="#6F3";
		document.getElementById('tx4').style.borderColor="#6F3";
		
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
<font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="5px"><b>Login</b></font><br><br>
</div>
</div>

<form name="login" method="post" onSubmit="return Login()" action='../my_acc/acc_home.php' style="background-color:#CCC">
<br>
<font face="Arial, Helvetica, sans-serif" color="#000000" size="4px">Exiting Account</font>
<br><br>
<table width="515" border="0" cellspacing="8" cellpadding="10">
  <tr>
    <td height="41" ><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Emai-ID</b></font></td>
    <td><input type="email" onChange="return eMail()" style="height:25px; width:300px; color:#000;" id="tx2" name="tx2" required placeholder="Example@xyz.ab" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Emai-ID';}"/>
    <div id="mail" style="color:red; font-size:15px;"></div></td>
  </tr>
    <tr>
    <td height="41"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Password</b></font></td>
    <td><input type="password" required onChange="return pAss()" style="height:25px; width:300px; color:#000;" id="tx4" name="tx4" value="Enter Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Password';}"/>
    <div id="pass" style="color:red; font-size:15px;"></div></td>
  </tr>
  
</table>
<font size="2px" face="Arial, Helvetica, sans-serif" color="#1C8DFF" style=" margin-left:-75px;"><a href="../forgot passward/forgot_password.php">Forgot Password</a></font>
<br>
<br>

<input type="submit" id="tx10" name="Continue" value="Login" style=" margin-left:-75px; background-color:#06F; height:40px; width:150px; font-size:20px; font-family:Arial, Helvetica, sans-serif; color:#FFF;" /></form>
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

