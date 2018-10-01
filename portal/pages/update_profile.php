<?php 
include("../connection.php");
$fname=$_GET["fname"];
$email=$_GET["email"];
$add=$_GET["add"];
$hex=$_GET["hex"];
$q="UPDATE people SET fullname ='$fname', email='$email', address='$add' WHERE hex='$hex'";

		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
			   echo "not";
            }else{
echo "done";
			}

?>