<style>
body{
	
}
</style>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Approach, new way of thinking</title>

    <!--Fonts-->
   
    <link href="portal/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="portal/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="portal/dist/css/timeline.css" rel="stylesheet">
       <link href="css/table_css.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="portal/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="portal/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="portal/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--Theme Styles-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="vendors/rs-plugin/css/settings-ie8.css">
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>


           <nav class="navbar navbar-default" style=" z-index:11;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> <a  href="index.php#"><img src="images/approachlogo.png" width="150" alt=""></a></a>
    </div><br/>
    <ul class="nav navbar-nav">
      <li class="active"><a href="menu.php">Menu</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Event
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="create_event/">Create Event</a></li>
          
        </ul>
      </li>
      <li><a href="#">View Contacts</a></li> 
    <li><a href="portal/pages/notification.php">Notification</a></li>
      <li><a href="portal/pages/message.php">Messages</a></li> 
       <li><a href="portal/pages/add_question.php">Add</a></li> 
    </ul>
  </div>
</nav>
          
       </body>
 <body>

 <script src="portal/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="portal/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="portal/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="portal/dist/js/sb-admin-2.js"></script>
  
  
    <br/><br/><br/><br/><center>
</center>
                   
                   <?php
					include("connection.php");
					$query="SELECT * FROM  contact_us";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
                  echo'<center> <div style="background-color:#FFF; z-index:-1; text-align:left;   box-shadow:2px 1px 4px #666666; padding:3%; width:80%;">

            <div class="row" style=" z-index:1;">
                <div class="col-md-10" style=" z-index:1;">
				<h5>Name:'.$row['name'].'</h5>
				<h5>E-mail:'.$row['email'].'</h5>
				<h5>Subject:'.$row['subject'].'</h5>
				<h5>Message:'.$row['message'].'</h5>
                </div></center></div></div><br/><br/>';
}
				?>
                    </body>
                   