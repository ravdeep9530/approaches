<?php 
include("../connection.php");
$fname=$_GET["g_id"];
$dd=$_GET["id"];

$hex=$_GET["hex"];
$task=0;
$q="UPDATE task SET status='1' WHERE id='$dd' ";

		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
			   echo "not";
            }else{

$query="SELECT * FROM  goals WHERE id='$fname'";

$result=$connect->query($query);
$f=0;

while($row = $result->fetch_assoc())
{
	$task=$row['task_done'];
	$t=$row['task'];
	//echo $row['name'];
}
$task++;
$t--;
$fname;
$qq="UPDATE goals SET task_done=$task WHERE id='$fname'";
echo $q;
		$retval = $connect->query($qq);            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
			   echo "not";
            }else{
echo "done";
			}
			}

?>