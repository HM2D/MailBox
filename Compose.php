<?php
include('functions.php');
	
 $servername = 'localhost';
 $acusername = 'Mozhgan';
 $dbname = 'ms';
    $msg = '';
	$uploadmsg[0] = '';
	$uploadmsg[1] = '';
	$uploadmsg[2] = '';
	
	$errormsg = '';
	$mail = ' ';
	session_start();
	if(!isset($_SESSION['Uname']))
	{
		header('location:test.php');
		die();
		}
	if(isset($_POST['compose'])){
		
	$atach1= $atach2 = $atach3 = -1;
	    $to = $_POST['sendto'];
		$sbj = $_POST['subject'];
		$body = $_POST['body'];
		$sender=$_SESSION['Uname'][0];
		$query0 = "call verifyuser('$to')";
		$con = mysqli_connect($servername, $acusername, false, $dbname);
		$rs1 = mysqli_query($con, $query0);
		$uid = $rs1->fetch_assoc();
		$reciever = $uid['uid'];    
		date_default_timezone_set("Asia/Tehran");
        $con2 = mysqli_connect($servername, $acusername, false, $dbname);
		$time3 = date("Y/m/d H:i:s");
		if($_FILES['attachment1']['name'] != null){
			$atach1 = uploadattach(1);
			}
		if($_FILES['attachment2']['name'] != null){
			$atach2= uploadattach(2);
			}
		if($_FILES['attachment3']['name'] != null ){
			$atach3 = uploadattach(3);
			}
		if(($atach1== -1) && ($atach2== -1) && ($atach3== -1)){
			$query = "call sendmsg('$sbj','$body','$time3','$reciever','$sender',null,null,null)";
		    mysqli_query($con2, $query);
			header('location:f.php');
		}
		
		if(($atach1 > 0) && ($atach2 > 0) && ($atach3 > 0)){
			  $query = "call sendmsg('$sbj','$body','$time3','$reciever','$sender','$atach1','$atach2','$atach3')";
		      if(mysqli_query($con2, $query)){
			  $_SESSION['composemsg'] = "Your Messege Was Sent";
				header('location:f.php');
				die();
				}
				else {
					  $errormsg = "The Messege Was not Sent!";
					}
				}
		if($atach1 == 0){
			$uploadmsg[0] = "Attachment Number 1 error:".$_POST['attachment1'];
			
			}
		if($atach2 == 0){
			$uploadmsg[1] = "Attachment Number 2 error:".$_POST['attachment2'];
			
			}
		if($atach3 == 0){
			
			$uploadmsg[2] = "Attachment Number 3 error:".$_POST['attachment3'];
			
			}
			
		if(($atach1 > 0) && ($atach2 == -1) && ($atach3 == -1)){
			$query = "call sendmsg('$sbj','$body','$time3','$reciever','$sender','$atach1',null,null)";
		      if(mysqli_query($con2, $query)){
			  $_SESSION['composemsg'] = "Your Messege Was Sent";
				header('location:f.php');
				die();
				}
				else {
					  $errormsg = "The Messege Was not Sent!";
					}
		}
		if(($atach1 > 0) && ($atach2 > 0) && ($atach3 == -1)){
			$query = "call sendmsg('$sbj','$body','$time3','$reciever','$sender','$atach1','$atach2',null)";
		      if(mysqli_query($con2, $query)){
			  $_SESSION['composemsg'] = "Your Messege Was Sent";
				header('location:f.php');
				die();
				}
				else {
					  $errormsg = "The Messege Was not Sent!";
					}
		}
		
	}
	if(isset($_POST['logout'])){
	    session_destroy();
		header('location:test.php');
		die();
		
		}	
	
	//include('debug.php');
	include('Composeview.php');
	?>