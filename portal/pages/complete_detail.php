<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Approach Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
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
	$email=$row["email"];
	$name=$row["fullname"];
       break;
	             
}
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Fill Form</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="detail_form" action="submit_detail.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" value="<?php echo $name; ?>" disabled="disabled"   name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" value="<?php echo $email; ?>" disabled="disabled" name="email" type="text"  value="">
                                </div>
                                <div class="form-group" >
                                    <input hidden="hidden" value="<?php echo $hex; ?>"  name="hex" type="text" >
                                </div>
                                <div class="form-group">
                                <label>Date of Birth</label>
                                    <input class="form-control" placeholder="" id="db"  name="dob" type="date"  value="">
                                </div>
                                <div class="form-group">
                                <label>Gender</label><br/>
                                    <input  placeholder="" id="gen"  name="gender" type="radio" checked="checked"  value="male">Male
                                     <input placeholder="" id="gen"  name="gender" type="radio"  value="female">Female
                                </div>
                                <div class="form-group">
                                <label>Education</label>
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
                              <div class="form-group" >
                              <label>Percentage in the mention qualification</label>
                                    <input class="form-control" placeholder="Percentage %" id="per"   name="per" type="text" >
                                </div>
                              <div class="form-group">
                                <label>Institute/School Name</label>
                                    <input class="form-control" placeholder="Institute/School Name" id="in"    name="in" type="text" autofocus>
                                </div>   
                                <div class="form-group">
                                <label>What You Want To Be Become?</label>
                                    <input class="form-control" placeholder="What You Want To Be Become?" id="wtb"    name="wtb" type="text" autofocus>
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

    <!-- jQuery -->
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
	}else if(document.getElementById('per').value=="")
	{
		alert("Firstly fill all required fields!!");
		document.getElementById('per').focus();
	}
	else if(document.getElementById('in').value=="")
	{
		alert("Firstly fill all required fields!!");
		document.getElementById('in').focus();
	
	}else if(document.getElementById('wtb').value=="")
	{
		alert("Firstly fill all required fields!!");
		document.getElementById('wtb').focus();
	
	}
	else{
		$('#detail_form').submit();
	}
}
</script>
</body>

</html>
