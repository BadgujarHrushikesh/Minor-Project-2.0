<?php
	$conn=new PDO('mysql:host=localhost; dbname=minor-project-2', 'root', '') or die(mysql_error());
	if(isset($_POST['submit'])!=""){
	  $title=$_POST['title'];
	  $name=$_FILES['file']['name'];
	  $size=$_FILES['file']['size'];
	  $type=$_FILES['file']['type'];
	  $temp=$_FILES['file']['tmp_name'];
	  $fname = date("YmdHis").'_'.$name;
	  $chk = $conn->query("SELECT * FROM  `upload-notice` where name = '$name' ")->rowCount();
	  if($chk){
	    $i = 1;
	    $c = 0;
		while($c == 0){
	    	$i++;
	    	$reversedParts = explode('.', strrev($name), 2);
	    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
	    	$chk2 = $conn->query("SELECT * FROM  upload-notice where name = '$tname' ")->rowCount();
	    	if($chk2 == 0){
	    		$c = 1;
	    		$name = $tname;
	    	}
	    }
	}
	 $move =  move_uploaded_file($temp,"upload/".$fname);
	 if($move){
	 	$query=$conn->query("INSERT into `upload-notice`(`title`,`name`,`fname`)values('$title','$name','$fname')");
		if($query){
		header("location:index.php");
		}
		else{
		die(mysql_error());
		}
	 }
	}
	?>

<!-- Fatal error: Uncaught PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'minor-project-2.upload' doesn't exist in H:\Coding\Xampp\htdocs\E-vidya-Minor-Project\file-upload-download-2\notice-download.php:33 Stack trace: #0 H:\Coding\Xampp\htdocs\E-vidya-Minor-Project\file-upload-download-2\notice-download.php(33): PDO->query('select * from u...') #1 {main} thrown in H:\Coding\Xampp\htdocs\E-vidya-Minor-Project\file-upload-download-2\notice-download.php on line 33 -->