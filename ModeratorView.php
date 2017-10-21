<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Control Panel</title>
<link href="jquery-ui-1.11.2.custom/jquery-ui.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap.min.css">
 
 <style>
body{
	background:url(be.jpg) no-repeat center center fixed; background-size:cover ;
	}
	

</style>
 
</head>

<body>
<div id="header" style="border:30px solid  #333; width:95%; height:320px; background-color:#666; border-radius: 5%; float:left; margin-left:2%; margin-top:2%">
<div style="float:left; margin-left:5%; margin-top:2%;">
<font size="+3"; color="#b8ec79"; face="Segoe UI,Helvetica,Arial,sans-serif">MODERATOR PANEL</font>

<br><br><br><br><font size="+2"; color="#b8ec79"; face="Segoe UI,Helvetica,Arial,sans-serif"><?php echo $msg1 ?></font></div>

<h2 class="demoHeaders"></h2>
<div id="datepicker" style=" float:right; margin-right:4%; margin-top:-1%;"></div>
</div><br>



<div id="accordion" style="width:50%; background-color:#999; border:10px solid #666; border-radius:2%; box-shadow:#CCC; margin-left:25%; margin-top:35%;">
	<h3>Go To My Mail</h3>
	<div><font size="-1" color="#b8ec79"; face="Segoe UI,Helvetica,Arial,sans-serif";>Modarator Mail Box</font>
    <br>
    <form method="post">
<button type="submit" name="gomail" value="gomail" class="btn-link">Go To Mailbox</button></form>
     </div>
     
     
     <h3>Show Users</h3>
	<div><font size="-1" color="#b8ec79"; face="Segoe UI,Helvetica,Arial,sans-serif";>Show Users By Moderator Permition</font>
    <br>
    <form method="post">
<button type="submit" name="showusers" value="showusers" class="btn-link">Show Users</button></form>
     </div>
     
     
     
      <h3>Log Out</h3>
    <div>
    <form method="post">
    <button type="submit" name="logout" value="logout" class="btn-danger">Log Out</button>
   
	</form>
    </div>


</div>




<script src="JQUERY.js" type="text/javascript"></script>
<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>
<script src="jquery.easy-confirm-dialog.js"></script>
<script>


$( "#datepicker" ).datepicker({inline: true});
$( "#accordion" ).accordion();














</script>

</body>
</html>