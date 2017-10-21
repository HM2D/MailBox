<?php
	session_start();
	
	if(!isset($_SESSION['Uname'])){
		header('Location: test.php');
			die();
		}	
	else {
		//if($_SESSION['Uname'][5] != 1)
	    	//header('Location: test.php');
			//die();	
		}
	if(!isset($_POST['warning'])){
		$_POST['warning']='';
		}
		
 	$servername = 'localhost';
 	$acusername = 'Mozhgan';
 	$dbname = 'ms';
    $msg = '';
	$mail = ' ';
	$tempuser = $_SESSION['Uname'];	
	if(isset($_POST['sign'])){
		$username = $_POST['username'];
		$name = $_POST['name'];
		$family = $_POST['family'];
		$pass = $_POST['pass'];
		$query = "call saveuser('$username','$name','$family','$pass')";
		$con = mysqli_connect($servername, $acusername, false, $dbname);
		$rs = $con->query($query);
		$_SESSION['Uname'] = $tempuser;
		if($rs){
			
			$_POST['warning']  = 'The User Was Created!';
			}
			else $_POST['warning'] = 'Something went wrong';
	}
	
	include('CreateUserView.php');
?>
