<?php
     session_start();
	if($_SESSION['Uname']==null){
		header('Location: test.php');
			die();
		}	
		
	else if($_SESSION['Uname'][5] != 2)
	    	{header('Location: test.php');
			die();}	
	if(isset($_SESSION['notification'])){
		$notification = $_SESSION['notification'];
		}		
      else $notification = '';
	  $con = mysqli_connect('localhost','Mozhgan',false,'MS');
       $query = "Select * from users";
	   $result = $con->query($query);
	   $string = '<tr><td><b>UID</b></td><td><b>Username</b></td><td><b>Name</b></td><td><b>Family</b></td><td><b>Role</b></td><td>ChangeTo</td></tr>';
	   while(($row = $result->fetch_assoc()))
        {
			
			$uname = $row['uname'];
			$ufamily = $row['ufamily'];
			$uid = $row['uid'];
			$username = $row['username'];
			$role = $row['role'];			
			if($role == 1){
				$role = "Admin";
				}
			if($role == 2)
			{
				$role = "Moderator";
				}	
			if($role == 3){
				$role = "User";
				}
			$Userstring = "<td>".$uid."</td><td>". $username . "</td><td>" . $uname . "</td><td>" . $ufamily . "</td><td>" . $role . "</td>";
		$Delete = "<td><form method= post><button type='submit' name='delete' value='$uid'>Delete</button></form></td>";
		 if($role == "Admin"){
			$string .= "<tr>" . $Userstring . "<td><font color='#FF0000'>No-Access</font></td></tr>"; 
			 }
		 if($role == "Moderator"){
			 $string .= "<tr>" . $Userstring . "<td><font color='#FF0000'>No-Access</font></td></tr>"; 
			 }	 
		if($role == "User"){
			$string .= "<tr>" . $Userstring . $Delete . "</tr>"; 
			 
			}	 
			
			}
          if(isset($_POST['delete'])){
			  $uidfordelete = $_POST['delete'];
			  $deletequery = "call deleteuser('$uidfordelete')";
			  $rs = $con->query($deletequery);
			  if($rs){
			  header('location:ModShowuser.php');
			  $_SESSION['notification'] = "User " . $uidfordelete . " Was Deleted!";
			  }
			  else $notification = "User was not deleted";
			  
			  }   

include('showusersview.php');

?>