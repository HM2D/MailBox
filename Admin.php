<?php
     session_start();
	if($_SESSION['Uname']==null){
		header('Location: test.php');
			die();
		}	
		
	else if($_SESSION['Uname'][5] != 1)
	    	{header('Location: test.php');
			die();}	
		$username = $_SESSION['Uname'][1];
		$family = $_SESSION['Uname'][2];
		$uid = $_SESSION['Uname'][0];
		$msg1 = 'Welcome '. $username . " " . $family. "!";
		
		$con = mysqli_connect('localhost','Mozhgan',false,'MS');
		if(isset($_POST['gomail']))
		{
			header('location:f.php');
			
			}	
		if(isset($_POST['showusers']))
		{
			header('location:Showusers.php');
			
			}	
		if(isset($_POST['createuser']))
		{
			header('location:CreateUser.php');
			
			}
				
		if(isset($_POST['logout']))
		{
			header('location:test.php');
			die();
			}	
		
   //include('debug.php');
   include('Adminview.php');
?>