<?php
include("connection.php");
$hex=$_GET["hex"];
$query="UPDATE people SET status='1' WHERE hex='$hex'";

$result=$connect->query($query);
if($result>0)
{

					
					$query="SELECT * FROM  people WHERE hex='$hex'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{	$code=$row['refer_code'];

	}
	$query="SELECT * FROM  refer WHERE code='$code'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{	$phex=$row['hex'];
echo $phex;
	}
	$query="SELECT * FROM  credit WHERE hex='$phex'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{	$time=$row['times'];

	}
	$time++;
$query="UPDATE refer SET flag=1 WHERE code='$code';";

$result=$connect->query($query);
if($result>0)
{
	$query="INSERT INTO credit (hex,code,times) VALUES ('$hex','$code',0);";

$result=$connect->query($query);
if($result>0){
$query="UPDATE credit SET times=$time WHERE hex='$phex';";

$result=$connect->query($query);
if($result>0){
header("Location:portal/");
}
}
}
}
?>