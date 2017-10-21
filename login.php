<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="jquery-ui-1.11.2.custom/jquery-ui.css" rel="stylesheet">

<style>
.container{ background-color:#666;border:50px solid #333;width:40%; height:450px; margin-top:5%; border-radius: 5%; }
body {background:url(be.jpg) no-repeat center center fixed; background-size:cover }


#signIn_btn{
	width:100px;
	height:50px;
	font-size:small;
	margin-left:50px;
}
#login_btn{
	width:100px;
	height:50px;
	font-size:small;
	margin-left:50px;
	
}
##userName_input{
	widows:50px;
	height:20px;
}

</style>



 
  

</head>

<body>
<div class="container" id="main" style="margin-left:25%">

<form method="post">
<font face="Segoe UI,Helvetica,Arial,sans-serif" style="margin-left:50%;text-align:center" size="+2" color='#b8ec79'  ><h3>Login to your account</h3></font>
<p id="msg"><?php echo $msgRes; ?></p>
<br><br>
<font face="Segoe UI,Helvetica,Arial,sans-serif" style="margin-left:10%" size="+3">Username:<input name="username" type="text" id="userName_input">
<br></font>
<font face="Segoe UI,Helvetica,Arial,sans-serif" style="margin-left:10%" size="+3">Password:<input name="password" style="margin-left:10px" type="password" id="pass_input">
<br><br>
<div style="width:100%;">
<div style="float:left;width:50%;">	
<button type="submit" id="login_btn" name="login" value="Login"><b>Submit</b></button>
</div><div style="float:left;width:50%;"><button type="submit" id="signIn_btn"><b><a href="signup.php" style="text-decoration:none;">Sign Up</a></b></button>

</div></div></form></font></div>

<script src="jquery.min.js"></script>

<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>

<script>
$("#login_btn").button();
$("#signIn_btn").button();
$('#userName_input').button().addClass('ui-textfield').css('width','110px').css('height','30px').css('font-size','small');
$('#pass_input').button().addClass('ui-textfield').css('width','110px').css('height','30px').css('font-size','small');


$('#main').fadeIn('slow');


</script>

</body>


</html>
