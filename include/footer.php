<footer class="row footer">
    <div class="container">
        <div class="row footer_sidebar">
            <div class="widget widget-about col-sm-6 col-md-3">
                <h6 class="label label-default widget-title">about Approach</h6>
                <p>“The Approach” is the organization that focuses on very important aspects of a student’s life whether they belong to even a primary class or PhD. It is incorporated in ministry of corporate affairs under name Approach E-Services .</p>
                <a href="about.html" class="btn-primary btn-outline">know more</a>
            </div>
            <div class="widget widget-recent-posts col-sm-6 col-md-3">
                <h6 class="label label-default widget-title">recent event</h6>
                <ul class="nav recent-posts">
                <?php include("connection.php");

$sql = "SELECT * FROM event_upload";
$result =$connect->query($sql);
$r=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
		echo '<li><a href="show_event.php?id='.$row['id'].'">'.$row['title'].'</a></li>';
		$r++;   
		if($r==3)
		{
		break;}
                 
    }
} else {
    echo "No event";
}
$connect->close();
?>
                    
                </ul>
            </div>

            <div class="widget widget-contact col-sm-6 col-md-3">
                <h6 class="label label-default widget-title">CONTACT Approach</h6>
                <address>
                    A155 Indravihar colony Panchwati Bhopal-462003 M.P.
                    <br><br>
                    <span>Phone</span> : 09041005426,07307483345 <br>
                    <span>Email</span> : <a href="mailto:info@theapproach.in">info@theapproach.in</a>
                </address>
            </div>
        </div>
    </div>

    <div class="row copyright_area m0">
        <div class="container">
            <div class="copy_inner row">
                <div class="col-sm-7 copyright_text">Copyright 2018. All Rights Reserved by <a href="#">worldwiki</a>. Designed by <a href="#">Ravdeep Singh</a>.</div>
                <div class="col-sm-5 footer-nav">
                    <ul class="nav">
                        <li><a href="index.php#">Terms of Use</a></li>
                        <li><a href="index.php#">Privacy Policy</a></li>
                        <li><a href="index.php#">Desclaimer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--Donate Form-->
<form action="index.php#" method="get" class="row m0 donate_form mfp-hide" id="donate_box">
    <h3>ENTER YOUR DONATION AMOUNT</h3>

    <input type="radio" name="donate-amount" id="donate-amount01" value="10">
    <label for="donate-amount01">
        <strong>DONATE <span>$10</span></strong><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa ips tum sed, suscipit sit amet arcu. Ut ut finibus tortor
    </label>

    <input type="radio" name="donate-amount" id="donate-amount02" value="25">
    <label for="donate-amount02">
        <strong>DONATE <span>$10</span></strong><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa ips tum sed, suscipit sit amet arcu. Ut ut finibus tortor
    </label>

    <input type="radio" name="donate-amount" id="donate-amount03" value="100">
    <label for="donate-amount03">
        <strong>DONATE <span>$10</span></strong><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa ips tum sed, suscipit sit amet arcu. Ut ut finibus tortor
    </label>

    <input type="radio" name="donate-amount" id="donate-amount04" value="500">
    <label for="donate-amount04">
        <strong>DONATE <span>$10</span></strong><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa ips tum sed, suscipit sit amet arcu. Ut ut finibus tortor
    </label>

    <h5>ENTER CUSTOM AMOUNT</h5>

    <div class="input-group">
        <span class="input-group-addon left">$</span>
        <input type="number" class="form-control" name="donate-amount">
            <span class="input-group-addon right">
                <button type="submit" class="btn-primary">donate now</button>
            </span>
    </div>
</form>


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Magnific Popup-->
<script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<!--Owl Carousel-->
<script src="vendors/owl.carousel/owl.carousel.min.js"></script>
<!--CounterUp-->
<script src="vendors/couterup/jquery.counterup.min.js"></script>
<!--WayPoints-->
<script src="vendors/waypoint/waypoints.min.js"></script>
<!--Theme Script-->
<script src="js/min/theme.min.js"></script>
<!--StyleSwitch-->
<script src="js/styleswitch.js"></script>
</body>
</html>