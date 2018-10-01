<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php 
$id=$_GET['id'];
?>
 <title>Approach Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<body>

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Fill Form</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="detail_form" action="submit_message.php" method="post">
                            <fieldset>
                             <div class="form-group">
                                    <input class="form-control" readonly placeholder="Title" name="id" value="<?php echo $id; ?>" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Title" id="tt"  name="name" type="text" autofocus>
                                </div>
                               
                                <div class="form-group">
                                <label>Date</label>
                                    <input class="form-control" placeholder="" id="db"  name="dob" type="date"  value="">
                                </div>
                                
                                
                              
                                <div class="form-group">
                                <label>Message</label>
                                    <textarea class="form-control" name="msg" id="wtb"></textarea>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="button" class="btn btn-outline btn-success" onClick="val()" value="Send" />&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-outline btn-danger"  onClick="show_off()" value="Cancel" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
<script>
var s=0;
function show(v)
{
	if(v==1){
	$('#ps').show(100);
	$('#hs').hide(100);
	s=1;}
	else{
	$('#hs').show(100);
	$('#ps').hide(100);
	s=2;}
}

</script>
</body>
</html>