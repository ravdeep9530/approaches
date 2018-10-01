<?php 
include("../connection.php");
$fname=$_POST["name"];
$dd=$_POST["due_date"];
$md=$_POST["magnitude"];
$pp=$_POST["priority"];
$hex=$_GET["hex"];
$q="INSERT INTO goals (name,due_date,magnitude,priority,hex,date,task,task_done) VALUES('$fname','$dd','$md','$pp','$hex','".date("Y-M-d")."',0,0)";
//echo $q;
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
			   echo "not";
            }else{
				$query="SELECT id FROM  goals WHERE name='$fname' AND due_date='$dd' AND hex='$hex'";

$result=$connect->query($query);
$f=0;

while($row = $result->fetch_assoc())
{
	$id=$row['id'];
	//echo $row['name'];
}
echo $id;
			}

?>