<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
 <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">
       <link href="css/table_css.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="row" style="text-align:left;">
<center><div id="ag" style="display:none; z-index:2100; position: fixed; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); background-color:transparent; "><img src="../../images/loder.gif"/></div></center>
            ..
       <div class="col-lg-10">
                  
                       
                        
                            
                                
                                <table class="table-responsive col-lg-10 my "  style="text-align:center;" ><tr style="font-size:15px;"><th  style="width:20%; text-align:left;" ><b><i class="fa fa-star-o" ></i> Goal<b></th><th style="width:20%;"><b><i class="fa fa-signal"></i> Progress</b></th><th style="width:20%;"><b><i class="fa fa-thumbs-o-up"></i> Tasks</b></th><th style="width:20%;"><b><i class="fa fa-arrow-circle-o-up"></i> Magnitude</b></th><th style="  width:40%;"><b><i class="fa fa-calendar"></i> Due Date</b></th></tr>
                                <?php
include("../connection.php");
$hex=$_GET["hex"];
$query="SELECT * FROM  people WHERE hex='$hex'";

$result=$connect->query($query);
$st=0;
$hex;
while($row = $result->fetch_assoc())
{
	$st=1;
	$p=$row["paid"];
	
       break;
	             
}
if($p==0){
echo '<tr><td colspan="5"><div class="alert alert-warning">
                                Upgrade Your Account to Access full Portal. <a href="upgrade_account.php?hex='.$hex.'" class="alert-link">Upgrade Now</a>.
                            </div></td></tr>';
}
if($p!=0){
								$hex=$_GET['hex'];
								include("../connection.php");
								$query="SELECT * FROM  goals WHERE hex='$hex' ORDER BY date DESC";

$result=$connect->query($query);
$f=0;
$arr=array();
$arr[0]="Easy";
$arr[1]="Doable";
$arr[2]="Challenging";
$arr[3]="Daunting";
$arr[4]="Audacious";
while($row = $result->fetch_assoc())
{
	$f=1;
	$ts=$row["task"]-$row["task_done"];
	$t=(float)$row["task_done"];
	$tt=(float)$row["task"];
	$m=trim($row["magnitude"]);
	if($tt==0.0)
	{
		$tt=$t;
	}
	if($t==0.0)
	{
		$t=0;
		$tt=1;
	}
	
	echo '<div><tr style="text-align:left; cursor:pointer;" ><td style="width:20%;" onclick="show_activity_form('.$row["id"].')"><b>'.trim($row["name"]).'</b></td><td style="width:20%;"><br/>
	 <div class="progress progress-striped active" style="height:10px;"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="10" aria-valuemax="100" style="width: '.((($t/$tt)*100.00)).'%; "></div></div></td><td style="width:20%;"><button style="border:0;" onClick="show_tasks('.$row["id"].')">'.$ts.' tasks</button></td><td style="width:20%; ">'.$arr[$m].'</td><td style=" ">'.$row["due_date"].'</td></tr>
	 <tr  id="task'.$row["id"].'" style="display:none; "><td colspan="5" style="background-color:white;"><div id="taskd'.$row["id"].'"></div></td></tr></div>';
}
		if($f==0)
		echo '<tr><td colspan="5"><div>You do not have any goals at the moment. <a href="#" onclick="show_form()"> Create goal</a></td></div></tr>';				}		?>
                              
              </table></div>
</body>
</html>