 <?php
					include("connection.php");
$uname=$_POST['username'];
$pass=$_POST['password'];
					$query="SELECT * FROM  people WHERE username='$uname' AND password='$pass'";

$result=$connect->query($query);
$st=0;
$hex;
$status;
while($row = $result->fetch_assoc())
{
	$st=1;
	$hex=$row["hex"];
	$status=$row["status"];
	$ft=$row["first_time"];
       break;
	             
}

if($st==1)
{
	
	if($status==1 && $ft==1)
{
session_start();
$_SESSION['hex']=$hex;
header("Location:pages/dashboard.php?hex=".$hex."");
}else if($status==1 && $ft==0){
	header("Location:pages/complete_detail.php?hex=".$hex."");
}
else{
	header("location:account_confirmation.php?hex=".$hex."");
}}else{
header("location:index.php?msg=failed");
}

				?>