<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
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
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> <a  href="index.php#"><img src="../../images/approachlogo.png" width="150" alt=""></a></a>
    </div>
    <br/>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../../menu.php">Menu</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Event
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../../create_event/">Create Event</a></li>
          
        </ul>
      </li>
      <li><a href="../../view_contact.php">View Contacts</a></li>
      <li><a href="#">Notification</a></li>
      <li><a href="message.php">Messages</a></li> 
      <li><a href="add_question.php">Add</a></li> 
    </ul>
  </div>
</nav>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Fill Form</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="detail_form" action="submit_noty.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Title" id="tt"  name="name" type="text" autofocus>
                                </div>
                               
                                <div class="form-group">
                                <label>Date</label>
                                    <input class="form-control" placeholder="" id="db"  name="dob" type="date"  value="">
                                </div>
                                
                                <div class="form-group">
                                <label>Select Stream</label>
                                   <select onChange="show(this.value)" class="form-control" name="qualification" id="sq" style="width:66%">
<option value="">----Select One----</option>

				<option value="1">Primary School</option>
                <option value="2">Graduate and Postgraduate</option>		
				
</select>
                                </div>
                                 <div class="form-group" id="ps" style="display:none;">
                                <label>Primary School</label>
                                   <select class="form-control" name="pq" id="pq" style="width:66%">
<option value="">----Select One----</option>
<option value="1">Ist</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
<option value="4">4th</option>
<option value="5">5th</option>
<option value="6">6th</option>
<option value="7">7th</option>
<option value="8">8th</option>
<option value="9">9th</option>
<option value="10">10th</option>
<option value="11">+1</option>
<option value="12">+2</option>

					
				
</select>
                                </div>
                                <div class="form-group" id="hs" style="display:none;">
                                <label>Graduate and Postgraduate</label>
                                <select class="form-control" name="hq" id="hq" style="width:66%">
<option value="">----Select One----</option>
		<optgroup label="--Basic/UG Qualification--" class="red"></optgroup>		
					
				<option value="D^UG">Diploma</option>		
				<option value="HD^UG">Advanced/Higher Diploma</option>		
				<option value="PD^UG">Professional Degree</option>		
				<option value="BA^UG">B.A</option>		
				<option value="BAC^UG">B.Arch</option>		
				<option value="BCA^UG">B.C.A</option>		
				<option value="BBA^UG">B.B.A</option>		
				<option value="BCM^UG">B.Com</option>		
				<option value="BED^UG">B.Ed</option>		
				<option value="BDS^UG">BDS</option>		
				<option value="BHM^UG">BHM</option>		
				<option value="BPH^UG">B.Pharma</option>		
				<option value="BSC^UG">B.Sc</option>		
				<option value="BE^UG">B.Tech/B.E</option>		
				<option value="LLB^UG">LLB</option>		
				<option value="MBBS^UG">MBBS</option>		
				<option value="BVSC^UG">BVSC</option>		
				<option value="BD^UG">Other Bachelor Degree</option>		
				<optgroup label="--PG Qualification--" class="red"></optgroup>		
				<option value="PGD^PG">Post Graduate Diploma</option>		
				<option value="MA^PG">M.A</option>		
				<option value="MAC^PG">M.Arch</option>		
				<option value="MCA^PG">M.C.A</option>		
				<option value="MBA^PG">M.B.A/PGDM</option>		
				<option value="MCM^PG">M.Com</option>		
				<option value="MED^PG">M.Ed</option>		
				<option value="MS^PG">MS</option>		
				<option value="MPH^PG">M.Pharma</option>		
				<option value="MSC^PG">M.Sc</option>		
				<option value="ME^PG">M.Tech</option>		
				<option value="LLM^PG">LLM</option>		
				<option value="MVSC^PG">MVSC</option>		
				<option value="CA^PG">CA</option>		
				<option value="CS^PG">CS</option>		
				<option value="ICWA^PG">ICWA</option>		
				<option value="IPG^PG">Integrated PG</option>		
				<option value="MD^PG">Other Master Degree</option>		
				<optgroup label="--Doctorate Qualification--" class="red"></optgroup>		
				<option value="STC^PPG">Some Tertiary Coursework</option>		
				<option value="PHD^PPG">Ph.D/Doctorate</option>		
				<option value="MPHL^PPG">MPHIL</option>		
				<option value="DD^PPG">Other Doctorate Degree</option>		
		</select></div>
                              
                              
                                <div class="form-group">
                                <label>Message</label>
                                    <textarea class="form-control" name="msg" id="wtb"></textarea>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="button"  class="btn btn-lg btn-success btn-block" onClick="val()"  value="submit Detail" />
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
function val()
{
	var d;
	if(s==1)
	{
		d='pq';
	}else{
		d='hq';
	}
	//alert(d);
	if(document.getElementById('db').value=="")
	{
		alert("Firstly fill all required fields!!");
		document.getElementById('db').focus();
	
	}else if(document.getElementById('sq').value=="")
	{
		alert("Firstly fill all required fields!!");
		document.getElementById('sq').focus();
	}else if(document.getElementById(d).value=="")
	{
		alert("Firstly fill all required fields!!");
		document.getElementById(d).focus();
	}
	else if(document.getElementById('wtb').value=="")
	{
		alert("Firstly fill all required fields!!");
		document.getElementById('wtb').focus();
	
	}else if(document.getElementById('tt').value=="")
	{
		alert("Firstly fill all required fields!!");
		document.getElementById('tt').focus();
	
	}
	else{
		$('#detail_form').submit();
	}
}
</script>
</body>
</html>