<!doctype html>
<html>
<head>

<link href="jquery-ui-1.11.2.custom/jquery-ui.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap.min.css">

<style>
body {background:url(be.jpg) no-repeat center center fixed; background-size:cover }

#container { margin-left:25%; width:50%; border:10px solid #333; padding: 2%}
p {color:red;}
</style>
<meta charset="utf-8">
<title>Compose</title>

  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="bootstrap.min.js"></script>
  <script src="JQUERY.js" type="text/javascript"></script>
<link href="jquery-ui-1.11.2.custom/jquery-ui.css" rel="stylesheet">
<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>
</head>

<body>
<div id="container" style="margin-top:40px; border-radius:3%;">
<form method="post" enctype="multipart/form-data">
<h3><?php echo $errormsg ?></h3>
<p><?php echo $uploadmsg[0] ?></p>
<p><?php echo $uploadmsg[1] ?></p>
<p><?php echo $uploadmsg[2] ?></p>

<div class="input-group">
<font face="comic sans ms" size="+1">To: &nbsp;  &nbsp;<input type="text" name ="sendto" class="inp"></font><br><bR>
 
<font face="comic sans ms" size="+1">Sbj: &nbsp;<input type="text" name ="subject" class="inp"></font><br>
</div>
<div style="margin-left:25%;">
<br>

<br>
<br>
<font face="comic sans ms" size="+1" ><span class="btn">Attachment1<input type="file" id="at1" name="attachment1" value="attachment"></font>
<br>
<font face="comic sans ms" size="+1" id="f2"><span id="at2" class="btn disabled">Attachment2<input type="file"  name="attachment2" value="attachment"></span></font>
<br>
<font face="comic sans ms" size="+1" id="f3"><span id="at3" class="btn disabled">Attachment3<input type="file" name="attachment3" value="attachment"></font>
<br>
<br>
<font face="comic sans ms" size="+1">Body:<br>
<textarea type="text" name ="body" ></textarea></font>
<br>
<br>
<font face="comic sans ms" size="+1"><button type="submit" name="compose" value="composed" class="btn-green">Submit</button></font>
</div>
</form>
</div>

<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>

<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>




<script>
var attach1= document.getElementById("at1");

var attach2= document.getElementById("at2");
var attach3= document.getElementById("at3");
var font2 = document.getElementById("f2");
var font3 = document.getElementById("f3");
attach1.onclick = function(){
	
        attach2.setAttribute("class","btn btn-default btn-file active");	    }
attach2.onclick = function(){
	
        attach3.setAttribute("class","btn btn-default btn-file active");	          
	}



$('.inp').button().addClass('ui-textfield').css('width','230px').css('height','30 px').css('font-size','small');



</script>
</body>
</html>