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
    
    <!--Bootstrap-->
    
 <link href="../portal/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../portal/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../portal/dist/css/timeline.css" rel="stylesheet">
       
    <!-- Custom CSS -->
    <link href="../portal/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../portal/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../portal/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <link rel="stylesheet" href="vendors/rs-plugin/css/settings-ie8.css">
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>


           <nav class="navbar navbar-default">
           <BR/>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> <a  href="index.php#"><img src="../images/approachlogo.png" width="150" alt=""></a></a>
    </div><br/>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../menu.php">Menu</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Event
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Create Event</a></li>
          
        </ul>
      </li>
      <li><a href="../view_contact.php">View Contacts</a></li> 
 <li><a href="../portal/pages/notification.php">Notification</a></li>
      <li><a href="../portal/pages/message.php">Messages</a></li> 
       <li><a href="../portal/pages/add_question.php">Add</a></li> 
    </ul>
  </div>
 
</nav>
          
       </body>
 <body>
 <script src="js/jquery-2.1.4.min.js"></script>

    <!--Google Map-->
    
  <script src="../portal/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../portal/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../portal/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../portal/dist/js/sb-admin-2.js"></script>

   <br/><center>
<div style="background-color:#FFF; text-align:left;   box-shadow:2px 1px 2px #666666; padding:3%; width:30%;">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="contact_page_title"><u>Create An Events</u></h3>
                    
                    <form action="upload.php" method="post" enctype="multipart/form-data" class="row m0 contact-form" id="createForm">
                        <p>Enter Event By:
                          <input type="text" class="form-control" id="name" name="name" placeholder="By">
                        </p>
                        
                        <p>Date:<br/>
                        <input type="date" name="date" id="date"  value="10/24/1984" />


<p>Time:<br/>
                        <input type="time" name="time" id="time" value="12:00:00 AM" /></p>
                        </p>
                        <p>Event Location:<br/>
                          <input type="text" class="form-control" id="loc" name="location" placeholder="Event Location">
                        </p>
                         <p>Title:<br/>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        </p>
                        <p>Select Image:<br/>
                          <input type="file"  class="form-control" id="file" name="file" accept="image/*">
                        </p>
                        <p>Description:
                          <textarea name="description" id="des" placeholder="Description" class="form-control"></textarea>
                        </p>
                        <p>
                          <input type="button" onClick="validate()" value="submit" class="btn-primary">
                        </p>
                    </form>
                    </div>
                    </div>
                  </div></center>
                    <script>
                    
                    function validate()
                    {
						var f=0;
						if(document.getElementById('name').value=="")
						{
							document.getElementById('name').focus();
							document.getElementById('name').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('loc').value=="")
						{
							document.getElementById('loc').focus();
							document.getElementById('loc').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('title').value=="")
						{
							
							document.getElementById('title').focus();
							document.getElementById('title').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('date').value=="")
						{
							document.getElementById('date').focus();
							document.getElementById('date').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('des').value=="")
						{
							document.getElementById('des').focus();
							document.getElementById('des').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('time').value=="")
						{
							document.getElementById('time').focus();
							document.getElementById('time').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('file').value=="")
						{
							document.getElementById('file').focus();
							document.getElementById('file').style.backgroundColor="#f0bbbb";
						}else{
							$('#createForm').submit();
						}
                    }</script>
                    </body>
                    