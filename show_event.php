<?php
include('include/header.php'); 
$id=$_GET['id'];
?>

<section class="row upcoming_recent_events">
        <div class="container">
           
           
                    <?php
					include("connection.php");
					$query="SELECT * FROM  event_upload WHERE id=$id ";

$result=$connect->query($query);
$ar_name=array();
$ar_loc=array();
$ar_date=array();
$ar_des=array();
$ar_img=array();
$ar_time=array();
$i=0;
while($row = $result->fetch_assoc())

{   //echo $row['name']."<img src='uploads/".$row['img_path']."' alt='not'/>";
$ar_name[$i]=$row['name'];
$ar_loc[$i]=$row['location'];
$ar_des[$i]=$row['description'];
$ar_date[$i]=$row['date'];
$ar_time[$i]=$row['time'];
$ar_img[$i]="uploads/".$row['img_path'];
$i=0;



echo '<center> <div class="row">
              <div class="col-md-10 single-event">
                    <div class="media event-header ">
                        <div class="media-left">
                            <span  ><img height="300px" width="550px" src="uploads/'.$row['img_path'].'" alt="" ></span>
                        </div>
                        <div class="media-body">
                            <div class="row m0 event-place info-row">
                                <div class="row m0"><i class="fa fa-map-marker"></i><span>At '.$row['location'].'</span></div>
                            </div>
                            <div class="row m0 event-place info-row">
                                <div class="row m0"><i class="fa fa-map-marker"></i><span>'.$row['date'].'&nbsp;&nbsp;@'.$row['time'].'AM</span></div>
                            </div>
                            <div class="row m0 event-place info-row text-center">
                                <div class="row m0"><a href="single-event.html#" class="btn-primary btn-outline white">buy tickets</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row m0 event_title">
                        <h2 class="hhh h1 pull-left">'.$row['title'].'&nbsp;&nbsp;&nbsp;By&nbsp;&nbsp;'.$row['name'].'</h2><br/>
						
                    </div></center>
                    <p class="event_summery">'.$row['description'].'</p>
                </div>';
}


					 ?>
                       
                
    </section>
<hr/>
   
                  
<?php 
include('include/footer.php');
?>