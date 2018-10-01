<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div class="row" style="text-align:left;">
             <br/>
       <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <table class="table-responsive" style="width:100%;"  ><tr><th style="width:60%;">Goal</th><th style="width:20%;">Progress</th><th style="width:20%;">Due Date</th></tr></table>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                <?php 
								$query="SELECT * FROM  goals";

$result=$connect->query($query);
$f=0;
while($row = $result->fetch_assoc())
{
	$f=0;
}
		if($f==0)
		echo '<div>You do not have any goals at the moment. <a href="#" onclick="show_form()"> Create goal</a></div>';						?>
                              
              </div></div></div></div></div>
            
</body>
</html>