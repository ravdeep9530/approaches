<?php
include('include/header.php'); ?>
<body>
  <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--Google Map-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/gmaps.min.js"></script>
    <!--Bootstrap Select-->
    <script src="vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
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
 <section class="row page-header">
        <div class="container">
            <h4>contact us</h4>
        </div>
    </section>
    
    <section class="row contact-content page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="contact_page_title">have an idea to help us ? - contact us</h3>
                    
                    <form action="update_contact.php" method="post" class="row m0 contact-form" id="contactForm">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                        <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                        <input type="button" value="submit" onClick="submit_form()" class="btn-primary">
                    </form>
                    <h3 class="contact_page_title map-title">find us on map</h3>
                   <div  class="row m0" >
                   <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">Embed your Google Map here!</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">freedirectorysubmissionsites.com is the most complete web directory list of 2016. Here you can find all directories that have high PR and are search engine friendly. Submitting a link to a link directory is a valuable SEO-strategy, even in 2016. You have to pay attention to the following: if the links you put on a directory are dofollow, otherwise they are of no value to your business.</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(22.9734229,78.65689420000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(22.9734229,78.65689420000001)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>MADHYA PRADESH, India<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                   </div>
                
                    
                </div>
                <div class="col-md-4 contact-sidebar">
                    <div class="row m0 address_box">
                        <div class="inner row">
                            <h3>madhya pradesh</h3>
                            <address>
                               A155 Indravihar colony Panchwati Bhopal-462003 M.P.					 <br/>

						Phone : 09041005426,07307483345 
							Email : <font style="text-transform:lowercase;">info@theapproach.in</font>

                                
                            </address>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
   </body>
   <script>
   function submit_form()
   {
	 if(document.getElementById('name').value=="")
						{
							document.getElementById('name').focus();
							document.getElementById('name').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('email').value=="")
						{
							document.getElementById('email').focus();
							document.getElementById('email').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('subject').value=="")
						{
							
							document.getElementById('subject').focus();
							document.getElementById('subject').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('message').value=="")
						{
							document.getElementById('message').focus();
							document.getElementById('message').style.backgroundColor="#f0bbbb";
						}else{
							$('#contactForm').submit();
						}
   }
  
   </script>
<?php
include('include/footer.php'); ?>