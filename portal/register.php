<?php
$fname=$_POST['fullname'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$uname=$_POST['username'];
if(isset($_POST['refer'])){
$refer=$_POST['refer'];
}else{
	$refer=0;
}
//$u=explode('',$uname);
$pass=$_POST['password'];
$cpass=$_POST['rpassword'];
$s="theapproachRavdeepSingh";
$hex="";
for($i=0;$i<strlen($uname);$i++)
{
	
$hex.=substr($uname,$i,1).rand(0,10000). substr($s,$i/23,1);
}
//echo $hex;

include("connection.php");
$q="INSERT INTO people (fullname,email,city,country,username,password,address,hex,date,status,refer_code,first_time,paid) VALUES ('$fname','$email','$city','$country','$uname','$pass','$address','$hex','".date("d-m-Y")."',0,'$refer',0,0);";
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }else{
header("Location:../portal/account_confirmation.php?hex=$hex");
			}
?>