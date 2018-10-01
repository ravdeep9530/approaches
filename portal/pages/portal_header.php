<?php
$hex=$_GET['hex'];
session_start();
$shex=$_SESSION['hex'];
if($hex==$shex){
	
}else{
header("Location:../index.php");
}
?>
        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
    <meta name="author" content="">
    

   <title>The Approach Portal</title>
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
</style>
</head>

<body style="background-color:#FFF;" >
<script>
function show_form()
{
	$('#cg').fadeIn(500);
	
	 $.get("create_goal.php", function(data){
		 document.getElementById('cg').innerHTML=data;
		 });
		 
	back();
}
function show_refer()
{
	$('#mr').fadeIn(500);
	
	 $.get("refer_gen.php?hex=<?php echo $hex; ?>", function(data){
		$('#url').val(data);
		 });
		 
	back();
}

function back()
{
	$('#bb').fadeIn(300);
	
            // Display the returned data in browser
			//alert(data);
}
function show_off()
{
	$('#cg').fadeOut(200);
	back_off();
}
function show_off_refer()
{
	$('#mr').fadeOut(200);
	back_off();
}
function back_off()
{
	$('#bb').fadeOut(200);
}
function val_goal()
{
	 
	var f=0;
                if(document.getElementById('name').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('name').style.borderColor="red";
                    document.getElementById('name').focus();
                    return false;
                    f=1;
                }
				if(document.getElementById('due_date').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('due_date').style.borderColor="red";
                    document.getElementById('due_date').focus();
                    return false;
                    f=1;
                }
				if(document.getElementById('magnitude_select').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('magnitude_select').style.borderColor="red";
                    document.getElementById('magnitude_select').focus();
                    return false;
                    f=1;
                }
				if(document.getElementById('priority_select').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('priority_select').style.borderColor="red";
                    document.getElementById('priority_select').focus();
                    return false;
                    f=1;
                }
				if(document.getElementById('goal_text').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('goal_text').style.borderColor="red";
                    document.getElementById('goal_text').focus();
                    return false;
                    f=1;
                }
				//alert(document.getElementById('s1').checked);
				for(var i=1;i<=5;i++)
				{
					
					if(document.getElementById('s'+i).checked==false)
					{//alert(document.getElementById('s1').checked);
					f=1;
						document.getElementById('ss'+i).style.color="red";
						//document.getElementById('ss'+i).style.display="block";
                    document.getElementById('s'+i).focus();
					break;
					}
				}
				if(document.getElementById('priority_select').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('priority_select').style.borderColor="red";
                    document.getElementById('priority_select').focus();
                    return false;
                    f=1;
                }
				if(f==0){
				 $.ajax({
            type: "POST",
            url: "submit_goal.php?hex=<?php echo $hex; ?>",
            data: $("#goalform").serialize(),
            beforeSend: function(){
                $('#cg').html('<img src="../../images/loder.gif"/>');
            },
            success: function(data){
				//alert(data);
                $('#cg').fadeOut(300);
				//
				back_off();
				show_activity_form(data);
				
            }
        });}
		
		
               
}
</script>
<div class="back" id="bb" style="display:none; z-index:2000;"></div>

    <div id="wrapper" style="background-color:#FFF;"  >
<center><div id="cg" style="display:none; z-index:2100; height:auto; position: fixed; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); background-color:transparent; "><img src="../../images/loder.gif"/></div></center>
         <div id="wrapper" style="background-color:#FFF;"  >
<center><div id="mr" style="display:none; width:40%; z-index:2100; height:auto; position: fixed; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); background-color:transparent; ">
    <div style="text-align:left; "><div class="col-lg-12" >
                    <div class="panel panel-default" style="box-shadow:2px 2px 5px #999999;">
                        <div class="panel-heading">
                          <b><i class="fa fa-road"></i> My Referal </b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
              
			
				
		
				<table class="table-responsive" style="width:100%;"  cellpadding="0" cellspacing="0" ><tr><td >
		 <label>Your Referal Coder:</label>
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
	$refer=$row["refer_code"];
	
       break;
	             
}
?>
    <input type="text"  id="url" class="form-control" style="width:100%;" readonly style="width:auto;"   />
		<br/>
        <b> Send this url via Message.</b>
        </td>

		</tr>
       
<tr ><td colspan="2"><hr/><center>
<script>
 
</script>
<input type="button" class="btn btn-outline btn-danger"  onClick="show_off_refer();" value="Cancel" /></center></td></tr></table>
	
	</div></div></div></div></div>
				
	</div>
   </center>
       
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#FFF;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php?hex=<?php echo $hex; ?>"><img src="../../images/oie_25750415gnVD1DV.png" class="img-responsive" style="padding:0; margin-top:-9%;" /></a>
            </div>
            <!-- /.navbar-header -->
            
             <ul class="nav navbar-top-links navbar-right">
 <li class="dropdown">
                    
                    
                        <li>
                            <a href="#" onClick="show_form()">
                                <div>
                                  <i class="fa fa-star fa-fw"></i>   Create Goal
                                    
                                </div>
                                </a>
                        </li></li>
                         <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-gift fa-fw"></i>  My Radeem <i class="fa fa-caret-down"> </i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                   <li><?php $i=0;
				   $query="SELECT * FROM  refer WHERE hex='$hex' AND flag=1";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{$code=$row["code"];

$qq="SELECT * FROM  credit WHERE code='".$code."';";

$r=$connect->query($qq);

while($row = $r->fetch_assoc())
{
	
$i++;
echo mysql_errno();

	}
	}
				   ?>
                     <div class="col-lg-12 col-md-6">
                    <div class="panel panel-title">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-inr fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $i*10;?>/-</div>
                                    <div>Only</div>
                                </div>
                            </div>
                        </div></div></div></li>
                    </ul></li>
                        
<?php
include("../connection.php");
$query="SELECT * FROM  detail WHERE hex='$hex'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{$name=$row["qualification"];

	}
	$query="SELECT * FROM  people WHERE hex='$hex'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
$id=$row['id'];
	}
?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                     <?php  $query="SELECT * FROM  message WHERE hex='$id' ORDER BY date DESC LIMIT 6;";

$result=$connect->query($query);
$st=0;
$hex;
while($row = $result->fetch_assoc())
{
	$st=1;
                   echo' 
                        <li>
                            <a href="#">
                                <div><br/>
                                    <strong>'.$row['name'].'</strong>
                                    <span class="pull-right text-muted">
                                        <em>'.$row['date'].'</em>
                                    </span>
                                </div>
                                <div ><i class="fa fa-envelope fa-fw"></i> <em>'.substr($row['message'],0,30).'..</em></div>
                            </a>
                        </li><li class="divider"></li>';
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
}else{
echo ' <li>
                            <a class="text-center" href="all_message.php?hex='.$hex.'">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>';
}?>
</ul>
                     </li>
                        <!-- <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                     </li>
                    <!-- /.dropdown-messages -->
            
                <!-- /.dropdown -->
              <!--  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul> </li>
                    <!-- /.dropdown-tasks -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                     <ul class="dropdown-menu dropdown-alerts"><br/>
                <?php
$query="SELECT * FROM  notify WHERE qul='$name' ORDER BY date DESC LIMIT 6";

$result=$connect->query($query);
$st=0;
$hex;
while($row = $result->fetch_assoc())
{
	$st=1;
	echo '
                   
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> '.$row["message"].'
                                    <br/><span class="pull-right text-muted small">'.$row["date"].'</span>
                                </div>
                            </a>
                        </li>
						 <br/>
                       <li class="divider">';
	             
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
	             

}else{
	echo '<li>
                            <a class="text-center" href="all_notification.php?hex='.$hex.'">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>';
}
?>
        </li>        <!--
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>-->
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                     <?php
					include("../connection.php");
					$name;
					$query="SELECT * FROM  people WHERE hex='$hex'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{$name=$row["fullname"];

	}?>
    
                        <li><a href="user_profile.php?hex=<?php echo $hex;?>"><i class="fa fa-user fa-fw"></i> <?php echo $name;?></a>
                        </li>
                        <!--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>-->
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="background-color:#FFF;" >
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li></li>
                        <li>
                            <a href="dashboard.php?hex=<?php echo $hex;?>""><i class="fa fa-flag fa-fw"></i> My Goal</a>
                        </li>
                        <li>
                            <a href="user_profile.php?hex=<?php echo $hex;?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                       <!-- <li>
                            <a href="#" ><i class="fa fa-flag fa-fw"></i> My Goal</a>
                        </li> -->
                        <li>
                            <a href="#" onClick="show_refer()"><i class="fa fa-barcode fa-fw"></i> My Referal</a>
                           
                            <!-- /.nav-second-level -->
                        </li></ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

       

    </div>
    >
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
