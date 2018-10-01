<div class="panel-body"  >
                            <div class="list-group"  >
<?php

include("../connection.php");
$hex=$_GET["hex"];
$id=$_GET["id"];
$query="SELECT * FROM  task WHERE goal_id='$id' AND hex='$hex'";

$result=$connect->query($query);
$f=0;

while($row = $result->fetch_assoc())
{
	$f=1;
	if($row["status"]==0){
	echo '<b class="list-group-item" ><table style="width:100%; text-align:left;" ><tr  ><td style="background-color:#ffffff; width:30%;">
                                   <button type="button" class="btn btn-info btn-circle" onClick="done_task('.$row["id"].','.$row["goal_id"].')"><i class="fa fa-check"></i>
                            </button> &nbsp;&nbsp;'.$row['name'].'</td><td style="background-color:#ffffff;text-align:left;  width:40%;"><span class="pull-right text-muted small"><em>'.$row['note'].'</em>
                                    </span></td><td style="background-color:#ffffff; text-align:left;  width:30%;">
                                    <span class="pull-right text-muted small"><em>'.$row['due_date'].'</em>
                                    </span>
									</td></tr></table>
                                </b>';
	}else{
		echo '<b class="list-group-item" ><table style="width:100%; text-align:left;" ><tr  ><td style="background-color:#ffffff; width:30%;">
                                   <button style="background-color:green; " type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i>
                            </button> &nbsp;&nbsp;'.$row['name'].'</td><td style="background-color:#ffffff;text-align:left;  width:40%;"><span class="pull-right text-muted small"><em>'.$row['note'].'</em>
                                    </span></td><td style="background-color:#ffffff; text-align:left;  width:30%;">
                                    <span class="pull-right text-muted small"><em>'.$row['due_date'].'</em>
                                    </span>
									</td></tr></table>
                                </b>';}
}
if($f==0){
	echo '<b class="list-group-item">  There no task yet.&nbsp;<a href="#" onclick="show_activity_form('.$id.')"><i class="fa fa-thumbs-o-up"></i> Add Task</a> &nbsp; OR <button >Goal is successfully completed</button></b>';
}
?>

                               
                                    
                                
                             
                            </div>
                            <!-- /.list-group -->
                            </div>
                                    
                                
                                
                            