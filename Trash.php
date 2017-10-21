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
		$query = "call showtrash('$uid')";
		$con = mysqli_connect($servername, $acusername, false, $dbname);
		$rs = $con->query($query);
		$string="";
		while($row = $rs->fetch_assoc()) {
	   	$temp = $string;	
		$mkey = $row['mkey'];
		$mail = '<td>'. 'From: ' .$row['uname']. " " .$row['ufamily'].'</td>';
		$mail2 = '<td id="time">'.'Subject: ' . $row['sbj']. " | Time: " . $row['mtime'].'</td>';
		$mail3 = '<td>'. "Messege: " . $row['body'].'</td>';
        $showbutton = "<td><form method='post'><button type='submit' id='$mkey' name='Show' value='$mkey' style='height:100%; width:100%;'><font color='#33C'>Show</font></button></form></td>";
		$lines = "<tr>". $mail . $mail2 .$showbutton."</tr>";
	    
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
		
	if(isset($_POST['Show'])){
		
		$_SESSION['Key'] = $_POST['Show'];
		
		header('location:show.php');
		}
				
	
	include('debug.php');
	include('main.php');
	?>