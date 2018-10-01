<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upgrade Account</title>
</head>

<body>
<?php include("portal_header.php"); ?>
<div id="page-wrapper">
 

 <div class="row">
               
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-gift fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Free Trail</div>
                                    <div><br/>Acheieve Your Dreams<br/><br/></div>
                                </div>
                            </div>
                        </div>
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
if($p==0)
{
	echo ' <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Activate Now</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>';
}else{
	echo ' <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Activated</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>';
	
}
?>
                       
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><i class="fa fa-inr"></i> 200</div>
                                    <div>Schools/Govt colleges students<br/><br/></div>
                                </div>
                            </div>
                        </div>
                        <a href="payment_confirm.php?hex=<?php echo $hex; ?>&rate=200">
                            <div class="panel-footer">
                                <span class="pull-left">Buy Now</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><i class="fa fa-inr"></i> 500</div>
                                    <div>Colleges students /Professional/Entrepreneur /Other</div>
                                </div>
                            </div>
                        </div>
                        <a href="payment_confirm.php?hex=<?php echo $hex; ?>&rate=500">
                            <div class="panel-footer">
                                <span class="pull-left">Buy Now</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
             <!--   <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>-->
                </div>
            </div>
            </div></div>
</body>
</html>