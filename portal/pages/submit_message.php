<?php

$date=$_POST['dob'];
$id=$_POST['id'];
$name=$_POST['name'];
$wtb=$_POST['msg'];



//echo $hex;

include("../connection.php");
$q="INSERT INTO message (hex,message,date,name) VALUES ('$id','$wtb','$date','$name');
";
		
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter dataaa: ' . mysql_error());
            }else{
header("location:message.php");
			}
			
			
?>