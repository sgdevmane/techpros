<!DOCTYPE HTML>
<head>
<title>TechPros</title>
<style>
.quiz_1{height:100%; width:100%; margin-left:0%; margin-top:1.3%; border: 2px solid #1C8DFF;}
.quiz_2{height:6%; width:100%; margin-left:0%; margin-top:0%; background-color:#1C8DFF;}
.quiz_3{margin-left:0%; padding-top:1.2%; text-align:center;}
.quiz_4{margin-top:7.5%; margin-left:0%; }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../../../css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../../../css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../../../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="../../../js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="../../../js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="../../../js/nav.js"></script>
<script type="text/javascript" src="../../../js/move-top.js"></script>
<script type="text/javascript" src="../../../js/easing.js"></script>
<script type="text/javascript" src="../../../js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<?php include('headertop.php');?>
	<?php include('menu.php');?>
   <center>
    <div class="quiz_1">
    <div class="quiz_2">
<div class="quiz_3">
<font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="6px"><b>Test your technical Skills with TechPros</b></font><br><br>
</div>
</div>
<div style="margin-top:5%; margin-left:5%; text-align:justify;">
<font size="6px" face="Arial, Helvetica, sans-serif" color="#666666">
RULES :
</font>
</div>
<div style="margin-top:2%; margin-left:5%; text-align:justify;">
<font size="4px" face="Arial, Helvetica, sans-serif" color="#333333">
1. The test contains 25 questions.<br>
2. There is no time limit.<br>
3. The test is not official, its a just simple quiz.<br>
4. There is no negative marking.<br>
5. You will get 1 point for each correct answer.<br>
6. The maximum score is 25.<br>
</font>
</div>

<div style="margin-top:2%; margin-left:5%;">
<font size="6px" face="Arial, Helvetica, sans-serif" color="#FF0000">
Good Luck !
</font>
</div><br><br>
<form method="post" action="python_quiz.php">
<input type="submit" value="START THE QUIZ" style="background-color:#1C8DFF; height:65px; width:250px; margin-left:5%; font:Arial, Helvetica, sans-serif; font-size:20px; color:#FFF;"></form>
<br>
<br>
</div>
</center>
 </div>
</div>
   <?php include('footer.php');?>
    <script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>

