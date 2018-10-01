<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account Confirmation</title>
<style>
body{
	background-image:url(../images/clouds-background-light.jpg)
}
</style>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
    <link href="assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
    <script><?php $hex=$_GET["hex"];?>
    function send_mail()
	{
		//alert('<?php echo $hex;?>');
		 $.get("confirmation.php?hex=<?php echo $hex; ?>", function(data){
		$('#status').html(data);
		 });
	}
	function refresh()
	{
		window.location="confirmation.php?hex=<?php echo $hex; ?>";
	}
    </script>
</head>


<?php
include("../connection.php");

$query="SELECT * FROM  people WHERE hex='$hex'";

$result=$connect->query($query);
$st=0;
$hex;
while($row = $result->fetch_assoc())
{
	$st=1;
	$email=$row["email"];
       break;
	             
}
?>
<body onload="send_mail();"><center>
<img src="../images/approachlogo.png" style="height:100px;"/>
<br/><br/><br/>
<div style="background-color:#FFF;  width:50%; box-shadow:2px 2px 3px #666666;">
<div  style="padding-top:40px;padding-bottom:40px;">

	<h1>Congratulations, you have a The Approach account!</h1>
	<div class="loginPanel loginPanelNormal" style="text-align:left; padding:1%;">
	<p class="info">
		We've sent you an email to  <?php echo $email; ?>
		Please click the link inside to activate your account.<br/>
		Once you activate your account, you may log in.
	</p>
	
	<p class="subInfo">
		<em>Please note: If you can't find the email, check your spam folder and double check you spelt your email correctly.</em>
	</p>
    <center>If you not got then <button onclick="location.href='account_confirmation.php?hex=<?php echo $hex; ?>'">Resend</button></center>
</div>
</div></div></center>
<div id="status"><iframe style="display:none;" src="confirmation.php?hex=<?php echo $hex; ?>"></iframe></div>
</body>
</html>