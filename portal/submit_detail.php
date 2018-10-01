<?php
$hex=$_POST['hex'];
$dob=$_POST['dob'];

$in=$_POST['in'];
$wtb=$_POST['wtb'];
if(isset($_POST['hq'])){
	$qul=$_POST['hq'];
	}else{
$qul=$_POST['pq'];
}

for($i=0;$i<strlen($uname);$i++)
{
	
$hex.=substr($uname,$i,1).rand(0,10000). substr($s,$i/23,1);
}
//echo $hex;

include("connection.php");
$q="INSERT INTO detail (hex,dob,qualification,iname,wtb) VALUES ('$hex','$dob','$qul','$in','$wtb');";
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }else{
$q="UPDATE people SET first_time=1 WHERE hex='$hex';";
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }else{
header("Location:../portal/dashboard.php?hex=$hex");
			}
			}
?>