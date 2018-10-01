<?php
$hex=$_GET['hex'];
include("../connection.php");
$query="UPDATE people SET paid=1 WHERE hex='$hex';";

$result=$connect->query($query);
if($result>0){
header("Location:dashboard.php?hex=$hex");
}
?>