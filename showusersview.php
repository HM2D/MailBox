<!doctype html>
<html>
<head>
<link href="jquery-ui-1.11.2.custom/jquery-ui.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap.min.css">

<style>
body {background:url(be.jpg) no-repeat center center fixed; background-size:cover }
#container {width:80%; height:100%; background-color:#666;border:10px solid #333; border-radius:4%;box-shadow:5%; margin-left:10%; margin-top:10%;}
td{border: solid black 2px; width:10%;}
table{
	padding:3%;
	text-align:center;
}
button {width:90px}
</style>
<meta charset="utf-8">
<title>Show Users</title>
</head>

<body>


<h3><?php echo $notification ?></h3>
<div id="container" class="table-responsive">
<table class="table-hover">
<?php echo $string ?>
</table>
</div>


<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>

<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>

</body>
</html>