<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Approach Portal Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../portal/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../portal/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../portal/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../portal/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
 <nav class="navbar navbar-default" style=" z-index:11;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> <a  href="index.php#"><img src="../images/approachlogo.png" width="150" alt=""></a></a>
    </div><br/>
    </div></nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"  >
                <div class="login-panel panel panel-default" style="padding:2%;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                       <form action="validate_login.php" method="post"  class="row m0 contact-form" id="createForm">
                            <fieldset>
                                <div class="form-group">
                                     <input type="text" class="form-control" id="name" name="name" autofocus placeholder="Username">  </div>
                                <div class="form-group">
                                     <input type="password" name="pass" placeholder="Password" id="pass" class="form-control"   />
                                </div>
                             
                                
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               
                                  <input type="button" value="submit" class="btn btn-lg btn-success btn-block"  onClick="submit_form()" >
 
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


            
                    <script>
                    
                    function submit_form()
                    {
						
						if(document.getElementById('name').value=="")
						{
							document.getElementById('name').focus();
							document.getElementById('name').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('pass').value=="")
						{
							document.getElementById('pass').focus();
							document.getElementById('pass').style.backgroundColor="#f0bbbb";
						}else{
							$('#createForm').submit();
						}
                    }</script>
    <!-- jQuery -->
    <script src="../portal/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../portal/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../portal/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../portal/dist/js/sb-admin-2.js"></script>
</body>

</html>
