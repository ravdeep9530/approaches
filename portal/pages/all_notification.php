<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>All Notifications</title>
 <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/progress-wizard.min.css" rel="stylesheet">
</head>

<body>
<?php include("portal_header.php");
?>
<div id="page-wrapper">
<hr/>
 
                   
                    
  <?php

  $hex=$_GET['hex'];
  $query="SELECT * FROM  detail WHERE hex='$hex'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{$name=$row["qualification"];

	}
$query="SELECT * FROM  notify WHERE qul='$name' ORDER BY date DESC";

$result=$connect->query($query);
$st=0;
$hex;
while($row = $result->fetch_assoc())
{
	$st=1;
	echo '
                   
                        <li style="list-style:none;">
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> '.$row["message"].'
                                    <br/><span class="pull-right text-muted small">'.$row["date"].'</span>
                                </div>
                            </a>
                        </li>
						 <br/>
                      <hr/>';
	             
}
if($st==0)
{
	echo '
                   
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> No Notification
                                    
                                </div>
                            </a>
                        </li>
						 
                      ';
	             

}
?>
</div>
</body>
</html>