 <center> <div style="display:block;  z-index:100;  
   background-color:transparent; "  >
                            
                                
                               <table class="table-responsive my "  style="text-align:center;" ><tr style="font-size:15px;"><th  style="width:20%; text-align:left;" ><b><i class="fa fa-star-o" ></i> ID<b></th><th style="width:20%;"><b><i class="fa fa-signal"></i> NAME</b></th><th style="width:20%;"><b><i class="fa fa-thumbs-o-up"></i> EMAIL</b></th><th style="width:20%;"><b><i class="fa fa-arrow-circle-o-up"></i> Country</b></th><th style="  width:40%;"><b><i class="fa fa-envelope"></i> ACTION</b></th></tr>
                                <?php
include("../connection.php");
$qul=$_GET['id'];
								
								include("../connection.php");
								$query="SELECT * FROM  people WHERE status='1' AND hex IN(SELECT hex FROM detail WHERE qualification='$qul');";

$result=$connect->query($query);
$f=0;
$arr=array();
$arr[0]="Easy";
$arr[1]="Doable";
$arr[2]="Challenging";
$arr[3]="Daunting";
$arr[4]="Audacious";
while($row = $result->fetch_assoc())
{
	
	
	echo '<div><tr style="text-align:left; cursor:pointer;" ><td style="width:20%;" ><b>'.trim($row["id"]).'</b></td><td style="width:20%;">'.trim($row["fullname"]).'
	</td><td style="width:20%;"><a href="mailto:'.$row['email'].'" >'.$row['email'].'</a></td><td style="width:20%; ">'.$row['country'].'</td><td><a href="#" onClick="show_form('.$row['id'].')"><i class="fa fa-envelope"></i></a></td></tr>
	 </div>';
}
		?>
                           
              </table></div></center>