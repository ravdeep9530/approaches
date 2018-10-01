<?php
$hex=$_POST['hex'];
$dob=$_POST['dob'];
$per=$_POST['per'];
$in=$_POST['in'];
$gen=$_POST['gender'];
$wtb=$_POST['wtb'];
if(isset($_POST['hq']) && $_POST['hq']!=""){
	$qul=$_POST['hq'];
	}else{
$qul=$_POST['pq'];
}


//echo $hex;

include("../connection.php");
$q="INSERT INTO detail (hex,dob,qualification,iname,wtb,per,gender) VALUES ('$hex','$dob','$qul','$in','$wtb','$per','$gen');
";
		
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter dataaa: ' . mysql_error());
            }else{
$q="UPDATE people SET first_time='1' WHERE hex='$hex';";
		echo $q;
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter dat: ' . mysql_error());
            }else{
				session_start();
				$_SESSION['hex']=$hex;
header("Location:dashboard.php?hex=$hex");
			}
			}
			
?>