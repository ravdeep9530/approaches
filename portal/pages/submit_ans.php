<?php

$q_id=$_GET['id'];

$ans=$_GET['ans'];
$hex=$_GET['hex'];



//echo $hex;

include("../connection.php");
$q="INSERT INTO questions_flag (q_id,hex,date,ans) VALUES ('$q_id','$hex','".date("Y-M-d")."','$ans');
";
		
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter dataaa: ' . mysql_error());
            }else{
			}
			
			
?>