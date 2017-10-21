<?php

function remover($mkey){
	
 $servername = 'localhost';
 $acusername = 'mozhgan';
 $dbname = 'ms';
 $query = "call deletemsg('$mkey')";
		$con = mysqli_connect($servername, $acusername, false, $dbname);
		$rs = mysqli_query($con, $query);
		
	}
function uploadattach($atnum){
		$key = "attachment" . $atnum; 
		$fileName = $_FILES[$key]['name'];
		$tmpName  = $_FILES[$key]['tmp_name'];
		$fileSize = $_FILES[$key]['size'];
		$imageFileType = $_FILES[$key]['type'];
		$con3 = mysqli_connect('localhost', 'Mozhgan', false, 'MS');
		
		$fp  = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);
		$query2 = "call saveattachment('$fileName','$content')";
		$query4 = "call verifyattachment('$fileName')";
		$res1 = mysqli_query($con3, $query4);
		if($row1 = $res1->fetch_assoc()){
			 return $row1['akey'];
			}
		
		if ($_FILES[$key]["size"] > 1000000) {
		$_POST[$key] = "The file size is larger than 1mg";
		return 0;
     }
     if($imageFileType != "image/jpg" && $imageFileType != "image/png" && $imageFileType != "image/jpeg"
        && $imageFileType != "image/gif" ) {
    $_POST[$key] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    return 0;
}
    if (mysqli_query($con3, $query2)) {
		$result = mysqli_query($con3, $query4);
	     $row = mysqli_fetch_row($result);
		 $filekey = $row['akey'];
		return  $filekey;
    } else {
       $_POST[$key] =  "Sorry, there was an error uploading your file.";
		return 0;
    }
}
		
			
	?>