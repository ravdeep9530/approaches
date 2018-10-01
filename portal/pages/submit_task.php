<?php 
include("../connection.php");
$fname=$_POST["id"];
$dd=$_POST["name"];
$md=$_POST["due_date"];

$no=$_POST["note"];
$hex=$_GET["hex"];
$task=0;
$q="INSERT INTO task (goal_id,name,due_date,date,note,hex,status) VALUES($fname,'$dd','$md','".date("Y-M-d")."','$no','$hex','0');";
//echo $q;
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
	$task=$row['task'];
	//echo $row['name'];
}
$task++;
$fname;
$qq="UPDATE goals SET task=$task WHERE id='$fname'";
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