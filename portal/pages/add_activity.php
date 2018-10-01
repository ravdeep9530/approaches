<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
 <div class="row" style="text-align:left; ">
  <?php 
								$hex=$_GET['hex'];
								$id=$_GET['id'];
								include("../connection.php");
								$query="SELECT * FROM  goals WHERE id='$id'";

$result=$connect->query($query);
$f=0;
$name;
while($row = $result->fetch_assoc())
{
	$name=$row['name'];
}?>
       <div class="col-lg-12" >
                    <div class="panel panel-default" style="box-shadow:2px 2px 5px #999999;">
                        <div class="panel-heading">
                          <b><i class="fa fa-thumbs-o-up"></i> Add Task</b><b style="float:right"><i class="fa fa-star-o" ></i><?php echo $name;?></b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
              
				<form id="taskform" action="submit_task.php" method="post" >
				
		
				<table class="table-responsive" style="width:100%;"  cellpadding="0" cellspacing="0" ><tr><td >
		
		
			<input type="text" hidden="hidden" name="id" value="<?php echo $id; ?>"  class="form-control" style="display:none;">
			
				<label class="">Task Name:</label>
				<input type="text" id="name" name="name" value=""  class="form-control" style="margin:0; width:90%; padding:0;">
			

						</td><td>
				<label class="">Due date:</label>
				
				<input type="date" id="due_date" class="form-control" name="due_date" style="width:90%;" />
			
			</td>

		</tr>
        <tr><td colspan="2">
        <label class=""><b>Add Note:</b><i>(optional)</i></label><br/>
        <textarea name="note" class="form-control"></textarea></td></tr>
<tr ><td colspan="2"><hr/><center>
<script>

</script>
<input type="button" class="btn btn-outline btn-success" onClick="val_task()" value="Add" />&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-outline btn-danger"  onClick="show_activity_off();" value="Cancel" /></center></td></tr></table>
	</form>
	</div></div></div></div></div>
				
	</div>


</body>
</html>