<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div class="row">
            <div class="col-md-8 ">
                <div class=" panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Fill Form</h3>
                    </div>
                    <div class="panel-body">
                     
                            <fieldset><?php
include("../connection.php");
$hex=$_GET["hex"];
$qt=0;

$hex=$_GET["hex"];
$query="SELECT * FROM questions WHERE qualification IN(SELECT qualification FROM  detail WHERE hex='$hex') AND id NOT IN(SELECT q_id FROM questions_flag WHERE hex='$hex')";

$result=$connect->query($query);


while($row = $result->fetch_assoc())
{
	$st=1;
	$Q=$row["question"];
	
    echo '<div class="form-group">
                                   <label>'.$Q .'</label>
                               
                               
                               <div class="form-group input-group">
                                            <input type="text" class="form-control" id="'.$row['id'].'" placeholder="Your Answer">
                                            <span class="input-group-btn">
                                                <Button class="btn btn-outline btn-success form-control"  onClick="submit_ans('.$row['id'].')" >Submit</button>
                                            </span>
                                        </div>
									<hr/>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                ';
	             
}

?>
                               <button  class="btn btn-outline btn-success form-control" onClick="location.href='dashboard.php?hex=<?php echo $hex; ?>'">Next</button>
                            </fieldset>
                       
                    </div>
                </div>
            </div>
        </div>
</body>
</html>