<?php
     session_start();
	if($_SESSION['Uname']==null){
		header('Location: test.php');
			die();
		}	
		
	else if($_SESSION['Uname'][5] != 1)
	    	{header('Location: test.php');
			die();}	
	if(isset($_SESSION['notification'])){
		$notification = $_SESSION['notification'];
		}		
      else $notification = '';
	  $con = mysqli_connect('localhost','Mozhgan',false,'MS');
       $query = "Select * from users";
	   $result = $con->query($query);
	   $string = '<tr><td><b>UID</b></td><td><b>Username</b></td><td><b>Name</b></td><td><b>Family</b></td><td><b>Password</b></td><td><b>Role</b></td><td><b>Delete</b></td><td><b>ChangeTo</b></td><td><b>ChangeTo</b></td></tr>';
	   while(($row = $result->fetch_assoc()))
        {
			
			$uname = $row['uname'];
			$ufamily = $row['ufamily'];
			$uid = $row['uid'];
			$pass = $row['pass'];
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
			$Userstring = "<td>".$uid."</td><td>". $username . "</td><td>" . $uname . "</td><td>" . $ufamily . "</td><td>". $pass . "</td><td>" . $role . "</td>";
		$Delete = "<td><form method= post><button type='submit' name='delete' value='$uid'>Delete</button></form></td>";
         $Makeadmin = "<td><form method= post><button type='submit' name='makeadmin' value='$uid'>Admin</button></form></td>";
		 $Makeamoderator = "<td><form method= post><button type='submit' name='makemoderator' value='$uid'>Moderator</button></form></td>";
		 if($role == "Admin"){
			$string .= "<tr>" . $Userstring . "<td><font color='#FF0000'>No-Access</font></td><td><font color='#FF0000'>No-Access</font></td><td><font color='#FF0000'>No-Access</font></td></tr>"; 
			 }
		 if($role == "Moderator"){
			 $string .= "<tr>" . $Userstring . $Delete . $Makeadmin ."<td><font color='#FF0000'>No-Access</font></td></tr>"; 
			 }	 
		if($role == "User"){
			$string .= "<tr>" . $Userstring . $Delete . $Makeadmin . $Makeamoderator ."</tr>"; 
			 
			}	 
			
			}
          if(isset($_POST['delete'])){
			  $uidfordelete = $_POST['delete'];
			  $deletequery = "call deleteuser('$uidfordelete')";
			  $rs = $con->query($deletequery);
			  if($rs){
			  header('location:Showusers.php');
			  $_SESSION['notification'] = "User " . $uidfordelete . " Was Deleted!";
			  }
			  else $notification = "User was not deleted";
			  
			  }   
          if(isset($_POST['makeadmin'])){
			  $uidforadmin = $_POST['makeadmin'];
			  $adminquery = "UPDATE users set role = 1 where uid = $uidforadmin";
			  $rs = $con->query($adminquery);
			  if($rs){
			  header('location:Showusers.php');
			  $_SESSION['notification']  = "User " . $uidforadmin . " is set as Admin";}
			  else{
			  $notification = "User Was not Admined! :D";
			  }
			  }   
          if(isset($_POST['makemoderator'])){
			  $uidformoderator = $_POST['makemoderator'];
			  $moderatorquery = "UPDATE users set role = 2 where uid = $uidformoderator";
			  $rs = $con->query($moderatorquery);
			  if($rs){
			  header('location:Showusers.php');
			  $_SESSION['notification']  = "User " . $uidforadmin . " is set as Moderator";}
			  else{
			  $notification = "User Was not Moderated!! :D";
			  }
			  }   

include('showusersview.php');

?>