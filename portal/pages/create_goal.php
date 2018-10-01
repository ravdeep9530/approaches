<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
    

</head>
<style>
.l{
	font-size:12px;
	font-style:normal;
	font-weight:10;
}
</style>
	
<body>

		
	
   <div class="row" style="text-align:left;">
       <div class="col-lg-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading" >
                          <b> <i class="fa fa-star-o"></i> Create Goal</b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
              
				<form id="goalform" action="submit_goal.php" class="l" method="post" >
				
		
				<table class="table-responsive" style="clear:both;"  cellpadding="0" cellspacing="0" ><tr><td >
		
		
			
			
				<label class="">Goal name:</label>
				<input type="text" id="name" name="name" value=""  class="form-control" style="margin:0; width:90%; padding:0;">
			

						</td><td>
				<label class="">Due date:</label>
				
				<input type="date" id="due_date" class="form-control" name="due_date" style="width:90%;" />
			
			</td>

		</tr><tr><td>
						
			
				<label class="">Magnitude:</label>
				<select id="magnitude_select" style="width:90%;" name="magnitude" class="form-control">
					<option value="" class="select_label">&nbsp;</option> 
					<option value="1" data-class="magnitude_1_icon" class="magnitude_1">Easy</option>
					<option value="2" data-class="magnitude_2_icon" class="magnitude_2">Doable</option>
					<option value="3" data-class="magnitude_3_icon" class="magnitude_3">Challenging</option>
					<option value="4" data-class="magnitude_4_icon" class="magnitude_4">Daunting</option>
					<option value="5" data-class="magnitude_5_icon" class="magnitude_5">Audacious</option>
				</select>
			
		</td><td>
			
				<label class="labelAbove_tight">Priority:</label>
				<select id="priority_select" name="priority" style="width:90%;" class="form-control" >
					<option value="" class="select_label">&nbsp;</option>
					<option value="1" data-class="priority_1_icon" class="priority_1">Low</option>
					<option value="2" data-class="priority_2_icon" class="priority_2">Medium</option>
					<option value="3" data-class="priority_3_icon" class="priority_3">High</option>
				</select>
			
		</td></tr><tr><td colspan="2">
		
		<br/>
			<label class="labelAbove" style="">Why do you want to achieve this goal?</label>
			<textarea id="goal_text" name="why" class="form-control"  style="width:404px;"></textarea>
		
		</td></tr><tr><td colspan="2">
		<br/>
			<label class="labelAbove">Is your goal a S.M.A.R.T. goal?</label>
</td></tr><tr><td colspan="2">
				<input type="checkbox" id="s1"  name="reason_specific" value="1">
				<label for="specific_checkbox" id="ss1"><strong>Specific:</strong> Does the goal clearly state what it will achieve?</label>
				<label class="error" id="s1" for="reason_specific" style="display:none"><span>You should consider your goal to be specific.</span></label>
			</td></tr><tr><td colspan="2">
			<input type="checkbox" id="s2" class="required" name="reason_measurable" value="1">
				<label for="measurable_checkbox" id="ss2"><strong>Measurable:</strong> Will you know if you achieved your goal?</label>
				<label class="error" id="s2" for="reason_measurable" style="display:none"><span>You should consider your goal to be measurable.</span></label>
			</td></tr><tr><td colspan="2">
				<input type="checkbox" id="s3" class="required" name="reason_achievable" value="1">
				<label for="achievable_checkbox" id="ss3"><strong>Achievable:</strong> Is this a goal that can actually be achieved?</label>
				<label class="error" id="s3" for="reason_achievable" style="display:none"><span>You should consider your goal to be achievable.</span></label>
			</td></tr><tr><td colspan="2">
				<input type="checkbox"  id="s4" id="s4" class="required" name="reason_relevant" value="1">
				<label for="relevant_checkbox" id="ss4"><strong>Relevant:</strong> Does this goal reflect values in your life?</label>
				<label class="error" for="reason_relevant" style="display:none"><span>You should consider your goal to be relevant.</span></label>
			</td></tr><tr><td colspan="2">
				<input type="checkbox" id="s5" class="required" name="reason_time" value="1">
				<label for="time_checkbox" id="ss5"><strong>Time specific:</strong> When do you want to achieve this goal by?</label>
				<label class="error" id="s5" for="reason_time" style="display:none"><span>You should consider your goal to be time specific.</span></label>
			</td>
</tr>
<tr ><td colspan="2"><hr/><center>
<script>

</script>
<input type="button" class="btn btn-outline btn-success" onClick="val_goal()" value="Create" />&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-outline btn-danger"  onClick="show_off()" value="Cancel" /></center></td></tr></table>
	</form>
	</div></div></div></div></div>
				
	</div>




</body>
</html>