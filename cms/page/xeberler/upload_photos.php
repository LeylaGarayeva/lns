<?php

$formatlar = array("image/png","image/jpeg","image/gif");

$rand = uniqid(rand(1,9990000));
if (in_array($_FILES["dosya"]["type"], $formatlar)){
		
	$upload_name5=basename($_FILES['dosya']['name']);
	
	$upload_name4 = explode(".", $upload_name5); 
	$upload_name3 = end($upload_name4);
	$avatar=$rand.'.'.$upload_name3;
	
	$target =  '../products/'. $avatar;
	
	$source = $_FILES['dosya']['tmp_name'];	
	move_uploaded_file($source, $target);	
		
		
	}

	
?>





