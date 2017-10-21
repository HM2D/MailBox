<?php
 $servername = 'localhost';
 $acusername = 'Mozhgan';
 $dbname = 'ms';
    $msg = '';
	$mail = ' ';
	session_start();
	if(isset($_SESSION['Uname'])){
		$username = $_SESSION['Uname'][1];
		$family = $_SESSION['Uname'][2];
		$uid = $_SESSION['Uname'][0];
		$msg = 'Welcome '. $username . " " . $family. "!";
		$query = "call showsent('$uid')";
		$con = mysqli_connect($servername, $acusername, false, $dbname);
		$rs = $con->query($query);
		$string="";
		
		while($row = $rs->fetch_assoc()) {
	   	$temp = $string;	
		$mkey = $row['mkey'];
		$mail = '<td>'. '  To: ' .$row['uname']. " " .$row['ufamily'].'</td>';
		$mail2 = '<td id="time">'.' Subject: ' . $row['sbj']. "  | Time:  " . $row['mtime'].'</td>';
			$delbutton = '<td>'. "<form method='post'><button type='submit'  id='$mkey' name='del' value='$mkey'' style='height:100%; width:100%; '><font color='red'>Delete</font></button></form>" .'</td>';
        $showbutton = "<td><form method='post'><button type='submit'  id='$mkey' name='Show' value='$mkey' style='height:100%; width:100%;'><font color='#33C'>Show</font></button></form></td>";
		
		$lines = "<tr>". $mail . $mail2 . $delbutton . $showbutton.  "</tr>";
	    
		$string = $temp .$lines;
}
	    
	 } 
	if(!isset($_SESSION['Uname'])){
		header('Location: test.php');
			die();
		}	
	if(isset($_POST['logout'])){
	    session_destroy();
		header('location:test.php');
		die();
		
		}	
		
	include('functions.php');	
	if(isset($_POST['del'])){
		remover($_POST['del']);
		header('location:sent.php');
		}
	if(isset($_POST['Show'])){
		
		$_SESSION['Key'] = $_POST['Show'];
		$mkey2 = $_POST['Show'];
		
		$query1 = "call readmsg('$mkey2')";
		mysqli_query($con,$query1);
		
		header('location:show.php');
		}
				
			
	//('debug.php');
	include('main.php');
	?>