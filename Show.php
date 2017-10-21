 <?php

    session_start();
	$image1=$image2=$image3='';
  
	if(!isset($_SESSION['Uname']))
	{
		header('location:test.php');
		die();
		}
	$con = mysqli_connect('localhost', 'Mozhgan', false, 'MS');
   $mkey  = $_SESSION['Key'];
   $query = "Select * from msg,users where msg.mkey = '$mkey' and msg.uids = users.uid" ;
   $result = mysqli_query($con,$query);
   $row = $result->fetch_assoc();
   $at1 = $row['attachment1'];
   $at2 = $row['attachment2'];
   $at3 = $row['attachment3'];
   
   $sender = $row['uname'] . " " .$row['ufamily'];
   $subject = $row['sbj'];
   $time = $row['mtime'];
   $body = $row['body'];
   
 $time = $row['mtime'];
	    $string = "<tr>"."<td>"."<b>Sent From: ".$sender ."</b>"."<p id='tm'>".$time ."</p>"."</tr>"."<tr>"."<td>"."<b>"."<font color='#FF0000'>"."Title:"."</font>"."</b>"."<br>"."&nbsp; &nbsp; ".$subject ."</td>". "</tr>". "<tr><td>"."<p id='h'>"."<b>"."<font color='#FF0000'>"."BODY:"."</font>"."</b>"."<br> " ."&nbsp; &nbsp; ".$body."</p></td></tr>";

     if(($at1 != null) ||($at2 != null) ||($at3 != null))   
     
	 {
  if($at1 != null){		  
   $query2= "Select filecontent from attachment where akey = $at1";
   $result2 = mysqli_query($con,$query2);
   $row2 = $result2->fetch_assoc();
   $at1content = $row2['filecontent'];
    $image1 = '<img src="data:image/jpeg;base64,'.base64_encode( $at1content ).'"/>';
   
  }
   if($at2 != null){
   $query3= "Select filecontent from attachment where akey = $at2";
   $result3 = mysqli_query($con,$query3);
   $row3 = $result3->fetch_assoc();
   $at1content = $row3['filecontent'];
    $image2 = '<img src="data:image/jpeg;base64,'.base64_encode( $at1content ).'"/>';
   }
   if($at3 != null){
   $query4= "Select filecontent from attachment where akey = $at3";
   $result4 = mysqli_query($con,$query4);
   $row4 = $result4->fetch_assoc();
   $at1content = $row4['filecontent'];
    $image3 = '<img src="data:image/jpeg;base64,'.base64_encode( $at1content ).'"/>';
   }
	   $string .= "<tr><td><button onClick='showcontent()' value='showcontent' id='Showcontent' style='height=10px;'><font size='-2'>Show Content</font></button><div id='contents'>".$image1.$image2.$image3."</div></td></td>";  
	   }

        $username = $_SESSION['Uname'][1];
		$family = $_SESSION['Uname'][2];
 $uid = $_SESSION['Uname'][0];

 $msg = 'Welcome '. $username . " " . $family. "!";

		/*if(isset($_POST['showcontent'])){
			$_SESSION['image'] = $image1;
			$_SESSION['image2'] = $image2;
			$_SESSION['image3'] = $image3;
			header('location:showcontent.php');
			
			}*/
			if(isset($_POST['logout'])){
	    session_destroy();
		header('location:test.php');
		die();
		
		}	
	
 //include('debug.php');
include('showview.php');

?>