<?php
 $servername = 'localhost';
 $acusername = 'Mozhgan';
 $dbname = 'ms';
    $msg = '';
	$mail = ' ';
	session_start();
	if(isset($_POST['sign'])){
		$username = $_POST['username'];
		$name = $_POST['name'];
		$family = $_POST['family'];
		$pass = $_POST['pass'];
		$query = "call saveuser('$username','$name','$family','$pass')";
		$con = mysqli_connect($servername, $acusername, false, $dbname);
		$rs = $con->query($query);
		header('location: test.php');
	 } 

//include('debug.php');
include('signupview.php');

?>