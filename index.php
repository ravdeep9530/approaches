<?php
include('include/header.php');
?>
    <!--Featured Slider-->
    <section class="row featured_events">
        <div class="item">
            <img src="images/tr.jpg" style="height:400px;" alt="">
            
            <div class="row caption m0">
             
               	<div class="caption_row">
                
					<div class="container">
                     
              <center><h1   style="color:#FFF; font-size: 4em; text-shadow: 3px 2px 2px rgba(0, 0, 0, 0.63);"><b>LET'S FLY IN TRIUND.</b></h1></center>
               
            
						
					</div>
				</div>
            </div>
        </div>
        <div class="item">
            <img src="images/Dal-Lake.jpg" style="height:400px;" alt="">
            <div class="row caption m0">
               	<div class="caption_row">
					<div class="container">

                        <center><h1   style="color:#FFF; font-size: 4em; text-shadow: 3px 2px 2px rgba(0, 0, 0, 0.63);"><b>Banner -2</b></h1></center>


                    </div>
				</div>
            </div>
        </div>
        <div class="item">
            <img src="images/indian_1.jpg" style="height:400px;" alt="">
            <div class="row caption m0">
               	<div class="caption_row">
					<div class="container">

                        <center><h1   style="color:#FFF; font-size: 4em; text-shadow: 3px 2px 2px rgba(0, 0, 0, 0.63);"><b>banner-3</b></h1></center>


                    </div>
				</div>
            </div>
        </div>
    </section>
    
    <section class="how_help row sectionGap">
        <div class="container">
            <div class="row sectionTitle text-center">
                <h6 class="label label-default">how we could help</h6>
                <h3>Life is better when we achieve together
</h3>
            </div>
            <div class="row help-process_row">
                <div class="col-sm-4 help-process">
                    <div class="icon_box row m0">
                        <img src="images/help01.png" alt="">
                    </div>
                    <h5>Organize your dreams</h5>
                    <p></p>
                </div>
                <div class="col-sm-4 help-process">
                    <div class="icon_box row m0">
                        <img src="images/help02.png" alt="">
                    </div>
                    <h5>Empower your life</h5>
                    <p></p>
                </div>
                <div class="col-sm-4 help-process">
                    <div class="icon_box row m0">
                        <img src="images/help03.png" alt="">
                    </div>
                    <h5>Feel Fresh By Yourself</h5>
                    <p></p>
                </div>
            </div>
            <div class="row m0 buttons">
                <a href="#" class="btn-primary">Become Campus Ambassador</a>
                <a href="contact.php" class="btn-primary btn-outline">Help Me</a>
            </div>
        </div>
    </section>

    
    <section class="row upcoming_recent_events">
        <div class="container">
            <div class="row sectionTitle text-center">
                <h6 class="label label-default">PACKAGES OF HELPING HANDS</h6>
                <h3>UPCOMING &amp; RECENT EVENTS AT HELPING HANDS</h3>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 upcoming_events">
                   
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
$ar_title=array();
$ar_id=array();
$i=0;
while($row = $result->fetch_assoc())

{   //echo $row['name']."<img src='uploads/".$row['img_path']."' alt='not'/>";
$ar_name[$i]=$row['name'];
$ar_loc[$i]=$row['location'];
$ar_des[$i]=$row['title'];
$ar_date[$i]=$row['date'];
$ar_time[$i]=$row['time'];
$ar_id[$i]=$row['id'];
$ar_title[$i]=$row['description'];
$ar_img[$i]="uploads/".$row['img_path'];

$i++;
if($i>5)
break;
}


					 ?>
                     <a href="show_event.php?id=<?php echo$ar_id[0];?>">
                      <div class="row event_cover_photo">
                        <img src="<?php echo $ar_img[0]; ?>" alt="" class="img-responsive">
                        <div class="upcoming_label label">upcoming event</div>
                        <h6 class="event_time_loc">
                            <span class="by">By <?php echo $ar_name[0];?></span>
                            <span class="date_time"><?php echo $ar_date[0]." ".$ar_time[0];?></span>
                            <span class="loc"><?php echo $ar_loc[0];?></span>
                        </h6>
                    </div>
                    <h4 class="event_title"><a href="show_event.php?id=<?php echo$ar_id[0];?>"><?php echo $ar_des[0]; ?></a></h4>
                   <p class="event_summery"><?php echo substr($ar_title[0],0,200);?></p>
                </div>
                </a>
                <a href="show_event.php?id=<?php echo$ar_id[1];?>">
                <div class="col-sm-6 col-md-3 upcoming_events">
                    <div class="row event_cover_photo">
                        <img src="<?php echo $ar_img[1];?>" alt="" class="img-responsive">
                        <h6 class="event_time_loc">
                            <span class="date_time"><?php echo $ar_date[1];?> AT <?php echo $ar_loc[1];?></span>
                        </h6>
                    </div>
                    <h5 class="event_title"><a href="show_event.php?id=<?php echo$ar_id[1];?>"><?php echo $ar_des[1]; ?></a></h5>
                </div></a>
                <a href="show_event.php?id=<?php echo$ar_id[2];?>">
                <div class="col-sm-6 col-md-3 upcoming_events">
                    <div class="row event_cover_photo">
                        <img src="<?php echo $ar_img[2]; ?>" alt="" style="height:160px;" class="img-responsive">
                        <h6 class="event_time_loc">
                            <span class="date_time"><?php echo $ar_date[2];?> AT <?php echo $ar_loc[2];?></span>
                        </h6>
                    </div>
                    <h5 class="event_title"><a href="show_event.php?id=<?php echo$ar_id[2];?>"><?php echo $ar_des[2]; ?></a></h5>
                </div></a>
                <a href="show_event.php?id=<?php echo$ar_id[3];?>">
                <div class="col-sm-6 col-md-3 upcoming_events">
                    <div class="row event_cover_photo">
                        <img src="<?php echo $ar_img[3]; ?>" alt="" class="img-responsive">
                        <h6 class="event_time_loc">
                            <span class="date_time"><?php echo $ar_date[3];?> AT <?php echo $ar_loc[3];?></span>
                        </h6>
                    </div>
                    <h5 class="event_title"><a href="show_event.php?id=<?php echo$ar_id[3];?>"><?php echo $ar_des[3]; ?></a></h5>
                </div><!--</a>
                <a href="show_event.php?id=<?php echo $ar_id[4];?>">
                <div class="col-sm-6 col-md-3 upcoming_events">
                    <div class="row event_cover_photo">
                        <img src="<?php echo $ar_img[4]; ?>" alt="" class="img-responsive">
                        <h6 class="event_time_loc">
                            <span class="date_time"><?php echo $ar_date[4];?> AT <?php echo $ar_loc[4];?></span>
                        </h6>
                    </div>
                    <h5 class="event_title"><a href="show_event.php?id=<?php echo$ar_id[4];?>"><?php echo $ar_des[4]; ?></a></h5>
                </div></a>-->
           
        </div>
    </section>

    <section class="row quotes_row">
        <div class="container">
            <div class="row sectionTitle text-center">
                <h6 class="label label-default">ApproachS</h6>
                <h3>How can Approach help me-?</h3>
            </div>
            <div class="row">
                <div class="col-sm-4 quotation_block text-center">
                    <div class="quote_block row">
                        <span class="quote_sign">“</span>
                        <p>Set, Motivate and Realization of Goal<?php //echo $ar_title[0];?></p>
                    </div>
                    <h5><?php // echo $ar_des[0];?></h5>
                    <h6><?php echo $ar_name[0];?></h6>
                </div>
                <div class="col-sm-4 quotation_block text-center">
                    <div class="quote_block row">
                        <span class="quote_sign">“</span>
                        <p>To digitalize
<?php //echo $ar_title[1];?></p>
                    </div>
                    <h5><?php //echo $ar_des[1];?></h5>
                    <h6><?php echo $ar_name[1];?></h6>
                </div>
                <div class="col-sm-4 quotation_block text-center">
                    <div class="quote_block row">
                        <span class="quote_sign">“</span>
                        <p>Help to convert your idea into reality<br/>To assist 24*7 at your any need<?php //echo $ar_title[2];?></p>
                    </div>
                    <h5><?php //echo $ar_des[2];?></h5>
                    <h6><?php echo $ar_name[2];?></h6>
                </div>
            </div>
        </div>
    </section>
    
    <section class="row beVolunteer text-center">
        <div class="container beVolunteerBox">
            <div class="row sectionTitle text-center">
                <h6 class="label label-default">for good</h6>
                <h3>Become A Guider</h3>
            </div>
            <p></p>
            <a href="index.php#" class="btn-primary">join us now</a>
        </div>
    </section>
    <section class="row sponsor_banner text-center">
        <div class="container">
            <div class="row sectionTitle">
                <h6 class="label label-default">sponsor this project</h6>
                <h3>HELP THOUSANDS OF HOMELESS CHILDS TO BUILD GOOD HOUSES</h3>
            </div>
            <p></p>
            <div class="row">
                <a href="index.php#" class="btn-primary white">sponsor now</a>
                <a href="index.php#" class="btn-primary btn-outline white">other projects</a>
            </div>
        </div>
    </section>
    
    
    
<?php

include('include/footer.php');