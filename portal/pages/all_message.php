<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>All Messages</title>
</head>

<body>
<?php include("portal_header.php");
?>
<div id="page-wrapper">
<hr/>

<?php 
$hex=$_GET['hex'];

$query="SELECT * FROM  people WHERE hex='$hex'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
$id=$row['id'];
	}
?>
             
                     <?php  $query="SELECT * FROM  message WHERE hex='$id' ORDER BY date DESC;";

$result=$connect->query($query);
$st=0;
$hex;
while($row = $result->fetch_assoc())
{
	$st=1;
                   echo' 
                        <li style="list-style:none;">
                            <a href="#">
                                <div><br/>
                                    <strong>'.$row['name'].'</strong>
                                    <span class="pull-right text-muted">
                                        <em>'.$row['date'].'</em>
                                    </span>
                                </div>
                                <div ><i class="fa fa-envelope fa-fw"></i> <em>'.$row['message'].'</em></div>
                            </a>
                        </li><hr/>';
}

if($st==0)
{
	echo' 
                        <li>
                            <a href="#">
                                <div>
                                    <strong></strong>
                                    <span class="pull-right text-muted">
                                        <em></em>
                                    </span>
                                </div>
                                <div><i class="fa fa-envelope fa-fw"></i> No Message</div>
                            </a>
                        </li>';
}?></div>
</body>
</html>