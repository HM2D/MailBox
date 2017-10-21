<!doctype html>
<html>
<head>
<link href="jquery-ui-1.11.2.custom/jquery-ui.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap.min.css">
<style>
body {background:url(be.jpg) no-repeat center center fixed; background-size:cover }

img{width:50px;height:50px;}
#container {margin-top:5%; width:90%;hieght:900px;margin-left:4%;}
#sidebar {background-color:#666;float:left; width:20%; height:100%; border:5px solid #333;}
#messeges {float:left; border: solid black 1px; width:80%; height:100%;}
button{width:100%;}

#time {width:50%;}
#header {width:98%;background-color:#666; height:140px; border:20px solid #333; border-radius:7% ;}


</style>


  
  <script src="JQUERY.js" type="text/javascript"></script>

<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>
<script src="bootstrap.min.js"></script>
<title>Main</title>
</head>
<body>
<div id="container">

<div id="header"><p style="margin-left:3%"><br><font face="comic sans ms,Segoe UI,Helvetica,Arial,sans-serif" size="+3" color="#b8ec79"><?php echo $msg; ?></font></p></div>

<div id="content" style="width:95%; height:500px; border:10px solid #333; border-radius:4%; margin-left:1.3%; margin-top:5px;" >

<div id="sidebar">
<div id="buttons" style="width:90%; margin:5%;">

<a href="compose.php"><button type="button" onClick="f.php" class="mybtn" ><font face="comic sans ms" size="+3">Compose</font></button></a><br>
<a href="f.php"><button type="button" onClick="f.php" style="margin-top:4%" class="mybtn"><font face="comic sans ms" size="+3">Inbox</font></button></a><br>
<a href="Sent.php"> <button type="button" onClick="showsent();" style="margin-top:4%;"  class="mybtn"><font face="comic sans ms" size="+3">Sent</font></button></a><br>
<a href="Trash.php"><button type="button" style="margin-top:4%" class="mybtn" onClick="showtrash();"><font face="comic sans ms" size="+3">Trash</font></button></a>
<form method="post">
<button type="submit" name="logout" value="1" class="btn-danger" style="margin-top:10%"><font face="comic sans ms" size="+3" >Log Out</font></button>
</form>

</div>
</div>


<div id="messeges" class="table-responsive" >
<table id="mails" border="1"  class="table-hover" style="width:100%; border:1px solid #FFF">
<?php echo $string ?>
</table>
</div>


</div>

</div>

<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>

<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>



<script>

$(".mybtn").button().css('font-size','8px');



</script>

</body>
</html>
