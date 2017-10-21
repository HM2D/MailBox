<?php

    session_start();
  
	if(!isset($_SESSION['Uname']))
	{
		header('location:test.php');
		die();
		}
	$image1 = $_SESSION['image'];
    $image2 =  $_SESSION['image2'];
	$image3 = $_SESSION['image3'];
		
    include('debug.php');
?>
<!doctype html>
<html>
<head>
<script src="JQUERY.js" type="text/javascript"></script>
<style>
#attach1 {display:none }
#attach2 {display:none }
#attach3 {display:none }
</style>
<meta charset="utf-8">
<title>Show Attachments</title>
</head>
<body>

<button onclick="showcontent1()" id="showcontent1">Show Attachment#1</button>
<div id="attach1"><?php echo $image1 ?></div>
<button onclick="showcontent2()" id="showcontent2">Show Attachment#2</button>
<div id="attach2"><?php echo $image2 ?></div>
<button onclick="showcontent3()" id="showcontent3">Show Attachment#3</button>
<div id="attach3"><?php echo $image3 ?></div>
<script>
$(document).ready(function(){
	
	$('img').css("width","200px");
	
	});
function showcontent1(){
	console.log($('#attach1').css("display"));
    if($('#attach1').css("display").match("none"))
	{
		$('#attach1').fadeIn(500);
		
		} else $('#attach1').fadeOut(500);

}

function showcontent2(){
var div2 = document.getElementById("attach2");
 if(div2.style.display=="none"){
 div2.style.visibility = "block";}
 else div2.style.visibility = "none";
}

function showcontent3(){
var div3 = document.getElementById("attach3");
 if(div3.style.display=="none"){
 div3.style.visibility = "block";}
 else div3.style.visibility = "none";
}
</script>
</body>
</html>