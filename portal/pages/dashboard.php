<?php 
include("portal_header.php");
?>
 <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
 <title>The Approach Dashboard</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/progress-wizard.min.css" rel="stylesheet">
    <style>
   
    
   
 
   
    code {
        
        background-color: #f1f1f1;
        font-size: 70%;
        padding: 4px 8px;
       
        border: 1px solid #ccc;
    }
    .subdued {
        font-size: 80%;
        opacity: 0.6;
    }

    /* A totally custom override */

    .progress-indicator.custom-complex {
        background-color:#f0f0f0;
        padding: 20px 10px;
        border: 1px solid #ddd;
       
    }
    .progress-indicator.custom-complex > li .bubble {
        height: 12px;
        width: 99%;
        border-radius: 2px;
        box-shadow: inset -5px 0 12px rgba(0, 0, 0, 0.2);
    }
    .progress-indicator.custom-complex > li .bubble:before,
    .progress-indicator.custom-complex > li .bubble:after {
        display: none;
    }
	h3 {
        border-left: 12px solid #6697c3;
        text-indent: 1em;
        color: #999;
        margin-top: 2em;
        font-weight: 100;
    }

    /* Demo for vertical bars */

    .progress-indicator.stepped.stacked {
        width: 48%;
        display: inline-block;
    }
    .progress-indicator.stepped.stacked > li {
        height: 150px;
    }
    .progress-indicator.stepped.stacked > li .bubble {
        padding: 0.1em;
    }
    .progress-indicator.stepped.stacked > li:first-of-type .bubble {
        padding: 0.5em;
    }
    .progress-indicator.stepped.stacked > li:last-of-type .bubble {
        padding: 0em;
    }

    /* Nocenter */

    .progress-indicator.nocenter.stacked > li {
        min-height: 100px;
    }
    .progress-indicator.nocenter.stacked > li span {
        display: block;
    }

    /* Demo for Timeline vertical bars */

    #timeline-speaker-example {
        background-color: #2b4a6d;
        color: white;
        padding: 1em 2em;
        text-align: center;
        border-radius: 10px;
    }
    #timeline-speaker-example .progress-indicator {
        width: 100%;
    }
    #timeline-speaker-example .bubble {
        padding: 0;
    }
    #timeline-speaker-example .progress-indicator > li {
        color: white;
    }
    #timeline-speaker-example .time {
        position: relative;
        left: -80px;
        top: 30px;
        font-size: 130%;
        text-align: right;
        opacity: 0.6;
        font-weight: 100;
    }
    #timeline-speaker-example .current-time .time {
        font-size: 170%;
        opacity: 1;
    }
    #timeline-speaker-example .stacked-text {
        top: -37px;
        left: -50px;
    }
    #timeline-speaker-example .subdued {
        font-size: 10px;
        display: block;
    }
    #timeline-speaker-example > li:hover {
        color: #ff3d54;
    }
    #timeline-speaker-example > li:hover .bubble,
    #timeline-speaker-example > li:hover .bubble:before,
    #timeline-speaker-example > li:hover .bubble:after {
        background-color: #ff3d54;
    }
    #timeline-speaker-example .current-time .sub-info {
        font-size: 60%;
        line-height: 0.2em;
        text-transform: capitalize;
        color: #6988be;
    }
    @media handheld, screen and (max-width: 400px) {
        .container {
            margin: 0;
            width: 100%;
        }
        .progress-indicator.stacked {
            display: block;
            width: 100%;
        }
        .progress-indicator.stacked > li {
            height: 80px;
        }
    }
    </style><body > 
 <div id="page-wrapper">
 <?php
include("../connection.php");
$hex=$_GET["hex"];

$query="SELECT * FROM  people WHERE hex='$hex'";

$result=$connect->query($query);
$st=0;

while($row = $result->fetch_assoc())
{
	$st=1;
	$p=$row["paid"];
	
       break;
	             
}
if($p==0){
echo '<div class="alert alert-warning">
                                Upgrade Your Account to Access full Portal. <a href="upgrade_account.php?hex='.$hex.'" class="alert-link">Upgrade Now</a>.
                            </div>';
}if($p==1){
	
}
$hex=$_GET["hex"];
$query="SELECT * FROM  detail WHERE hex='$hex'";

$result=$connect->query($query);


while($row = $result->fetch_assoc())
{
	$st=1;
	$q=$row["qualification"];
	
       break;
	             
}

$query="SELECT * FROM  questions WHERE qualification='$q'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
	$qt=0;
	$id=$row["id"];
	//echo $id;
     $q="SELECT * FROM  questions_flag WHERE q_id='$id' AND hex='$hex'";

$r=$connect->query($q);

while($row = $r->fetch_assoc())
{
	$qt=1;
	
	
       
	             
}  
	             
}
//echo $qt;
if($qt==0){

							echo '<script>load_add_question();
							function load_add_question()
		{
			 $.get("get_questions.php?hex='.$hex.'", function(data){
            // Display the returned data in browser
			//alert(data);
			document.getElementById("add_question").innerHTML=data;
			});
		}
	
	</script>';
						
}else{
	echo '<script>load_goal_menu();
	  function load_goal_menu()
		{
			 $.get("goal_menu.php?hex='.$hex.'", function(data){
            // Display the returned data in browser
			//alert(data);
			document.getElementById("goal_menu").innerHTML=data;
			});
		}
	</script>';
	}
?>
            <div id="goal_menu"></div>
             <div id="add_question"></div>
             <!--<br/><div >
                 <h3>Your Status</h3>
          <ul class="progress-indicator custom-complex" ><br/>
            <li class="completed">
                <span class="bubble"></span>
                <i class="fa fa-check-circle"></i>
                Goal 1.
            </li>
            <li class="completed">
                <span class="bubble"></span>
                <i class="fa fa-check-circle"></i>
                Goal 2.
            </li>
            <li>
                <span class="bubble"></span>
                Goal 3.
            </li>
            <li>
                <span class="bubble"></span>
                Goal 4.
            </li>
            <li>
                <span class="bubble"></span>
                Goal 5.
            </li>
             <li>
                <span class="bubble"></span>
                Goal 6.
            </li>
        </ul></div>
                         -->
                         
                             
                       </div>
            <!-- /.row -->
        </div>
        <script>
        
		function show_activity_form(s)
{
	$('#ag').fadeIn(500);
	
	 $.get("add_activity.php?id="+s+"&hex=<?php echo $hex; ?>", function(data){
		 document.getElementById('ag').innerHTML=data;
		 });
	back();
}
function show_activity_off()
{
	load_goal_menu();
	$('#ag').fadeOut(200);
	//alert('ss');
	
	back_off();
}
var g=0;
var idd=0;
function show_tasks(s)
		{
			//alert(s);
			idd=s;
			if(g!=idd){
			$('#task'+s).show(900);
			 document.getElementById('taskd'+s).innerHTML='<img src="../../images/hourglass.svg"/>';
			$.get("get_task.php?id="+s+"&hex=<?php echo $hex; ?>", function(data){
		 document.getElementById('taskd'+s).innerHTML=data;
		 });
		 g=s;
			}else{
				$('#task'+s).hide(600);
				//$('#task'+s).slideUp(500);
				g=0;
			}
		 
		}
		function done_task(d,gd)
		{
			//alert(d+"-"+gd);
			$.get("complete_task.php?id="+d+"&g_id="+gd+"&hex=<?php echo $hex; ?>", function(data){
		//alert(data);
		load_goal_menu();
		
		show_tasks(gd);
		
		 });
			//
			/*idd=s;
			if(g!=idd){
			$('#task'+s).show(900);
			$.get("get_task.php?id="+s+"&hex=<?php echo $hex; ?>", function(data){
		 document.getElementById('taskd'+s).innerHTML=data;
		 });
		 g=s;
			}else{
				$('#task'+s).hide(600);
				//$('#task'+s).slideUp(500);
				g=0;
			}*/
		 
		}
function val_task()
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
                   
                    f=1;
                }
				
				if(f==0){
				 $.ajax({
            type: "POST",
            url: "submit_task.php?hex=<?php echo $hex; ?>",
            data: $("#taskform").serialize(),
            beforeSend: function(){
                $('#ag').html('<img src="../../images/loder.gif"/>');
            },
            success: function(data){
			//	alert(data);
				load_goal_menu();
               $('#ag').fadeOut(300);
				back_off();
            }
        });}
               
}
function submit_ans(a)
{
	
	var ans=document.getElementById(a).value;
	if(ans!=""){
	 $.get("submit_ans.php?hex=<?php echo $hex; ?>&id="+a+"&ans="+ans, function(data){
		 document.getElementById(a).disabled="true";
            // Display the returned data in browser
			//alert(data);
			//document.getElementById("add_question").innerHTML=data;
			});
	}else{document.getElementById(a).focus();
		
	}
}
        </script>
        <!-- /#page-wrapper -->
        
        </body>