<?php
	$conn=new PDO('mysql:host=localhost; dbname=minor-project', 'root', '') or die(mysql_error());
	if(isset($_POST['submit'])!=""){
	  $title=$_POST['title'];
	  $desc=$_POST['desc'];
	  $name=$_FILES['file']['name'];
	  $size=$_FILES['file']['size'];
	  $type=$_FILES['file']['type'];
	  $temp=$_FILES['file']['tmp_name'];
	  $fname = date("YmdHis").'_'.$name;
	  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
	  if($chk){
	    $i = 1;
	    $c = 0;
		while($c == 0){
	    	$i++;
	    	$reversedParts = explode('.', strrev($name), 2);
	    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
	    	$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
	    	if($chk2 == 0){
	    		$c = 1;
	    		$name = $tname;
	    	}
	    }
	}
	 $move =  move_uploaded_file($temp,"upload/".$fname);
	 if($move){
	 	$query=$conn->query("INSERT into upload(`title`,`desc`,`name`,`fname`)values('$title','$desc','$name','$fname')");
		if($query){
		header("location:index.php");
		}
		else{
		die(mysql_error());
		}
	 }
	}
	?>

