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
<script src="script2.js">
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
<form name="add" method="post" onSubmit="return Signup()"style="background-color:#999" action="../my_acc/acc_home.php">
<br>
<font face="Arial, Helvetica, sans-serif" color="#000000" size="4px">Register New Account</font>
<br><br>
<table width="515" border="0" cellspacing="8" cellpadding="10">
  <tr>
    <td width="125" height="41" scope="col"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>First Name</b></font></td>
    <td width="326" scope="col"><input autofocus onChange="return nAme()" style="height:25px; width:300px; color:#1C8DFF;" type="text" required id="tx1" name="tx1" placeholder="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value =(placeholder="First Name");}"/><div id="name" style="color:red; font-size:15px;"></div></td>
  </tr>
  
  <tr>
    <td height="41" ><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Last  Name</b></font></td>
    <td><input type="text" required onChange="return lName()" style="height:25px; width:300px; color:#1C8DFF;" id="tx2" name="tx2" placeholder="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = (placeholder="Last Name");}"/>
    <div id="lname" style="color:red; font-size:15px;"></div></td>
  </tr>
  
  <tr>
    <td height="41"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>College/Company/School</b></font></td>
    <td><input type="text" required onChange="return Coll()" style="height:25px; width:300px; color:#1C8DFF;" id="tx3" name="tx3" placeholder="Enter College/Company/School" onfocus="this.value = '';" onblur="if (this.value == '') {this.value =(placeholder="Enter College/Company/School")"/><div id="coll" style="color:red; font-size:15px;"></div></td>
  </tr>
    <tr>
    <td height="41"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Address line 1</b></font></td>
    <td><input type="text" required onChange="return Add1()" style="height:25px; width:300px; color:#1C8DFF;" id="tx4" name="tx4" placeholder="Address..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = (placeholder="Address...");}"/>
    <div id="add1" style="color:red; font-size:15px;"></div>
    </td>
  </tr>
  

  <tr>
    <td height="41"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Address line 2</b></font></td>
    <td><input type="text" required onChange="return Add2()" style="height:25px; width:300px; color:#1C8DFF;" id="tx5" name="tx5" placeholder="Address..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = (placeholder="Address...");}"/>
    <div id="add2" style="color:red; font-size:15px;"></div>
    </td>
  </tr>
  
  <tr>
    <td height="41"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>City</b></font></td>
    <td><input type="text" required onChange="return City()" style="height:25px; width:300px; color:#1C8DFF;" id="tx6" name="tx6" placeholder="City" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = (placeholder="City");}"/>
    <div id="city" style="color:red; font-size:15px;"></div>
    </td>
  </tr>
  
  <tr>
    <td height="41"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Pincode</b></font></td>
    <td><input type="text" required onChange="return Pin()" style="height:25px; width:300px; color:#1C8DFF;" id="tx7" name="tx7" placeholder="Pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value =(placeholder="Pincode");}"/>
    <div id="pin" style="color:red; font-size:15px;"></div>
    </td>
  </tr>
  
  <tr>
    <td height="41"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Region/State</b></font></td>
    <td height="41"><input type="text" required onChange="return Reg()" style="height:25px; width:300px; color:#1C8DFF;" id="tx8" name="tx8" placeholder="Enter State" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = (placeholder="Enter State");}"/>
    <div id="reg" style="color:red; font-size:15px;"></div>
    </td>
  </tr>
  
  <tr>
    <td height="41"><font size="2px" style="height:25px; width:300px; color:#000;" color="#000000" face="Arial, Helvetica, sans-serif"><b>Country</b></font></td>
    <td><input type="text" required onChange="return Country()" style="height:25px; width:300px; color:#1C8DFF;" id="tx9" name="tx9" placeholder="Country" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = (placeholder="Country");}"/> 
    <div id="country" style="color:red; font-size:15px;"></div>
     </td>
  </tr>
  
  <tr>
    <td height="41"><font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Default Address</b></font></td>
    <td><input type="radio" name="g1" id="g1" />&nbsp;&nbsp; <font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>Yes</b></font>&nbsp;&nbsp; <input type="radio" name="g1" id="g1" checked="checked" /> &nbsp;&nbsp; <font size="2px" color="#000000" face="Arial, Helvetica, sans-serif"><b>No</b></font></td>
  </tr>
</table>
<br />
<input name="checkbox" type="checkbox" id='checkbox'>&nbsp;&nbsp;&nbsp;<font size="2px" face="Arial, Helvetica, sans-serif" color="#616161">I agree all the Term & Condition.</font><br><br>

<input type="submit" id="tx10" name="Continue" value="Create Account" style=" margin-left:0px; background-color:#06F; height:40px; width:150px; font-size:20px; font-family:Arial, Helvetica, sans-serif; color:#FFF; margin-left:-50px;" /></form>&nbsp;&nbsp;


<br><font size="2px" face="Arial, Helvetica, sans-serif" color="#616161">By clicking 'Create Account' you agree to the<a href="../../Terms.php"> Terms & Conditions</a>.</font>
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

