<?php

$Q=$_POST['Q'];


if(isset($_POST['hq']) && $_POST['hq']!=""){
	$qul=$_POST['hq'];
	}else{
$qul=$_POST['pq'];
}


//echo $hex;

include("../connection.php");
$q="INSERT INTO questions (hex,question,qualification,date) VALUES ('','$Q','$qul','".date("Y-M-d")."');
";
		
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter dataaa: ' . mysql_error());
            }else{
header("Location:add_question.php");
			}
			
			
?>