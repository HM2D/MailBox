<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Sign Up</title>
<link href="jquery-ui-1.11.2.custom/jquery-ui.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap.min.css">
 
 <style>
#container{ background-color:#666;border:50px solid #333;width:50%; height:530px; margin-left:25%; margin-top:5%; border-radius: 5%; }
body {background:url(be.jpg) no-repeat center center fixed; background-size:cover }


 
 
 
 </style>

</head>

<body>
<div id="container">

<font face="Segoe UI,Helvetica,Arial,sans-serif" style="margin-left:50%;text-align:center" size="+2" color='#b8ec79'  ><h3>Create User</h3></font>

<form method="post">
<p align="center" class="text-primary"><?php echo $_POST['warning']?></p>
<font face="Segoe UI,Helvetica,Arial,sans-serif" style="margin-left:10%" size="+2"><font color="red";>*</font>Username: <input type="text" name="username" id="unm"></font><br>
<font face="Segoe UI,Helvetica,Arial,sans-serif" style="margin-left:10%" size="+2"><font color="red";>*</font>Real Name:<input type="text" name="name" id="nm"></font>
<br>
<font face="Segoe UI,Helvetica,Arial,sans-serif" style="margin-left:10%" size="+2"><font color="red";>*</font>Family: <input type="text" name="family" id="fm"></font>
<br>
<font face="Segoe UI,Helvetica,Arial,sans-serif" style="margin-left:10%" size="+2"><font color="red";>*</font>Password: <input type="password" name="pass" id="ps"></font>

<br>
<font face="Segoe UI,Helvetica,Arial,sans-serif" style="margin-left:10%" size="+2"> &nbsp; Mobile: <input type="text" name="family" id="mob"></font>
<br>

<font face="Segoe UI,Helvetica,Arial,sans-serif" style="margin-left:10%" size="+2"> &nbsp; Gender:</font>
<div id="radioset" style="margin-left:35%; margin-top:-7%;">
<input type="radio" id="radio1" name="radio"><label for="radio1">Femail</label>
		<input type="radio" id="radio2" name="radio" checked="checked"><label for="radio2">Male</label>
        </div>
<br>

<button type="submit" name="sign" value="sign" id="sb" style="margin-left:65%;">Submit</button>
</form>  
</div>

 <script src="bootstrap.min.js"></script>
  <script src="JQUERY.js" type="text/javascript"></script>

<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>
<script>

$('#sb').button();
$('#unm').button().addClass('ui-textfield').css('width','110px').css('height','20px').css('font-size','x-small');
$('#fm').button().addClass('ui-textfield').css('width','110px').css('height','20px').css('font-size','x-small');
$('#ps').button().addClass('ui-textfield').css('width','110px').css('height','20px').css('font-size','x-small');
$('#nm').button().addClass('ui-textfield').css('width','110px').css('height','20px').css('font-size','x-small');

$('#mob').button().addClass('ui-textfield').css('width','110px').css('height','20px').css('font-size','x-small');


$( "#radioset" ).buttonset();

</script>

</body>
</html>