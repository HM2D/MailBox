<?php
 $servername = 'localhost';
 $acusername = 'mozhgan';
 $dbname = 'ms';
    $msg = '';
	$msgRes='';
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$query = "SELECT * FROM Users where username='$username' and pass='$pass'";
		$con = mysqli_connect($servername, $acusername, false, $dbname);
		$rs = mysqli_query($con, $query);
		$user = mysqli_fetch_row($rs);
		if($user){
			
			session_start();
		 	$_SESSION['Uname'] = $user;
		    $role = $_SESSION['Uname'][5];
		  if($role == 3){  
			header('Location: f.php');}
		 if($role == 2){
				header('Location: Moderator.php');
				}
		if($role == 1){
			$_SESSION['Uname'] = $user;
		    
			header('Location: Admin.php');
			}		
			
		}
		$msg = " Invalid username or password";
		
		$msgRes.='<div class="ui-widget" style=" margin-bottom:2%; margin-left:7%; height:20px; width:350px;">'.'<div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">'.'<p>'.'<span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;">'.'</span>'.'<strong>'.' Alert: '.'</strong>'.$msg.'</p>'.'</div>'.'</div>';
		
	}
	include('debug.php');
	include('login.php');
	?>
