<?php

$date=$_POST['dob'];

$name=$_POST['name'];
$wtb=$_POST['msg'];
if(isset($_POST['hq']) && $_POST['hq']!=""){
	$qul=$_POST['hq'];
	}else{
$qul=$_POST['pq'];
}


//echo $hex;

include("../connection.php");
$q="INSERT INTO notify (hex,message,link,date,qul) VALUES ('','$wtb','$name','$date','$qul');
";
		
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter dataaa: ' . mysql_error());
            }else{
header("Location:notification.php");
			}
			
			
?>