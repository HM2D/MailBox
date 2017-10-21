<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Control Panel</title>
<link href="jquery-ui-1.11.2.custom/jquery-ui.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap.min.css">
  <script src="bootstrap.min.js"></script>
  
<style>
body{
	background:url(be.jpg) no-repeat center center fixed; background-size:cover ;
	}
	

</style>
</head>

<body>

<EMBED SRC="/M2/1.mp3" AUTOSTART="true" HIDDEN="True" LOOP="True"/>
<NOEMBED>
    <object type="audio/mp3" data="http://127.0.0.1/M2/1.mp3"><param name="src" value="http://127.0.0.1/M2/1.mp3"></param><param name="autostart" value="true"></param><param name="hidden" value="True"></param><param name="loop" value="true"></param>
    </object>
</NOEMBED>



<div id="header" style="border:30px solid  #333; width:95%; height:320px; background-color:#666; border-radius: 5%; float:left; margin-left:2%; margin-top:2%">
<div style="float:left; margin-left:5%; margin-top:2%;">
<font size="+3"; color="#b8ec79"; face="Segoe UI,Helvetica,Arial,sans-serif">ADMIN PANEL</font>

<br><br><br><br><font size="+2"; color="#b8ec79"; face="Segoe UI,Helvetica,Arial,sans-serif"><?php echo $msg1 ?></font></div>

<h2 class="demoHeaders"></h2>
<div id="datepicker" style=" float:right; margin-right:4%; margin-top:-1%;"></div>
<form method="post">


</div><br>
<div id="container">

<div id="accordion" style="width:50%; background-color:#999; border:10px solid #666; border-radius:2%; box-shadow:#CCC; margin-left:25%; margin-top:35%;">
	<h3>Go To My Mail</h3>
	<div><font size="-1" color="#b8ec79"; face="Segoe UI,Helvetica,Arial,sans-serif";>Admin Mail Box</font>
    <br>
    <form method="post">
<button type="submit" name="gomail" value="gomail" class="btn-link">Go To Mailbox</button></form>
     </div>
     
     
	<h3>Create User</h3>
	<div>
    <font size="-1" color="#b8ec79"; face="Segoe UI,Helvetica,Arial,sans-serif";>Create New User By Admin Permition</font>
    <br>
    <form method="post">
    <button type="submit" name="createuser" value="createuser" class="btn-link">Create User</button></form>
    </div>
    
    
	<h3>Show Users</h3>
	<div>
    <font size="-1" color="#b8ec79"; face="Segoe UI,Helvetica,Arial,sans-serif";>Show Users By Admin Permition</font>
    <br>
    <form method="post">
    <button type="submit" name="showusers" value="showusers" class="btn-link">Show Users</button></form>
    </div>
    
    <h3>Log Out</h3>
    <div>
    <form method="post">
    
    <a href="#" id="yesno">
	<button type="submit" name="logout" value="logout" class="btn-danger" class="confirm">Log Out</button></form></a>
    </div>
    
    
</div>






</div>
<script src="JQUERY.js" type="text/javascript"></script>
<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>
<script src="jquery.easy-confirm-dialog.js"></script>

<script>
$( "#datepicker" ).datepicker({inline: true});
$( "#accordion" ).accordion();


$("#yesno").easyconfirm({locale: { title: 'Are you shure?', button: ['No','Yes']}});
$("#yesno").click(function() {
	<?php
		
		
			?>
	
});















</script>




</body>
</html>