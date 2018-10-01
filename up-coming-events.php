<?php
include('include/header.php'); ?>

<section class="row upcoming_recent_events">
        <div class="container">
            <div class="row sectionTitle text-center">
                <h6 class="label label-default">PACKAGES OF HELPING HANDS</h6>
                <h3>UPCOMING &amp; RECENT EVENTS AT HELPING HANDS</h3>
            </div>
           
                    <?php
					include("connection.php");
					$query="SELECT * FROM  event_upload ORDER BY date ASC ";

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
$ar_title[$i]=$row['title'];
$ar_img[$i]="uploads/".$row['img_path'];
$i=0;



echo ' <a href="show_event.php?id='.$row['id'].'"><div class="row">
                <div class="col-sm-12 col-md-6 upcoming_events">
                    <div class="row event_cover_photo" style="height:400px;   ">
					 <img style="height:400px; " src="'.$ar_img[0].'" alt=""  class="img-responsive">
                        
                        <h6 class="event_time_loc">
                            <span class="by">'.$row['name'].'</span>
                            <span class="date_time">'.$ar_date[0]." ".$ar_time[0].'</span>
                            <span class="loc">'.$ar_loc[0].'</span>
                        </h6>
                    </div>
                    <h4 class="event_title"><a href="show_event.php?id='.$row['id'].'">'.$ar_title[0].'</a></h4>
                   
                </div></a>';
}


					 ?>
                       
                
    </section>

   <hr/>
<?php 
include('include/footer.php');
?>