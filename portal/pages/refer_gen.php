<?php
$hex=$_GET['hex'];
$r=rand(1000,100000000);


//echo $hex;

include("../connection.php");
$q="INSERT INTO refer (hex,code,flag) VALUES ('$hex','$r',0);
";
		
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter dataaa: ' . mysql_error());
            }else{
echo "http://theapproach.in/portal/index.php?r=".$r;
			}
			
			
?>