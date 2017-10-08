
<!-- =========================================================================================== -->
<!-- =========================== Footer and Footer Bar ========================================= -->
<!-- =========================================================================================== -->


<footer class="qt-footer">

  <div class="container">

    <div class="row">

      <section class="col-md-6 col-md-push-3">

        <h3>About Us</h3>

        <p>Congratulations for having taken a right decision in your life. You are joining the Company which is going to create history in the network marketing business. We have brought about a low-cost concept that has the power to radically change your LIFE STYLE. Your search for FAME, MONEY, HAPPINESS and SUCCESS has ended the moment you took the decision to be part of our ever growing.</p>

    

      </section>

      <nav class="col-md-3 col-md-pull-6 col-sm-6">

        <h3>Quick Links:</h3>

        <ul class="qt-footer-nav">
          <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
          <li><a href="#"><i class="fa fa-group fa-fw"></i> About Us</a></li>
          <li><a href="#"><i class="fa fa-camera fa-fw"></i> Photo Galleries</a></li>
          <li><a href="#"><i class="fa fa-folder-open fa-fw"></i> Portfolio</a></li>
          <li><a href="#"><i class="fa fa-calendar fa-fw"></i> News & Events</a></li>
          <li><a href="#"><i class="fa fa-envelope fa-fw"></i> Contact Us</a></li>
        </ul>

      </nav>

      <section class="col-md-3 col-sm-6">

        <h3>How to reach us:</h3>

        <address><p><strong>KSG-STAR</strong><br>j-61 , Industrial Area, Suratgarh (Raj.) INDIA<br> Pin Code : 335804</p></address>

        <ul class="qt-footer-contact">
          <li><i class="fa fa-phone fa-fw"></i> +91-76655-06000</li>
          <li><i class="fa fa-phone fa-fw"></i>  +91-76655-06000</li>
		  <li><i class="fa fa-phone fa-fw"></i>   +91-76655-06000</li>
          
        </ul>

      </section>

    </div><!-- end: row -->

    <div class="row">
      <div class="col-md-12">
        <div class="qt-footer-bottom">
          <p>&copy; Copyright 2017 KSG-STAR All rights reserved.
</p>
        </div>
      </div>
    </div>

  </div>

</footer>
<!-- =========================================================================================== -->
<!-- =========================================================================================== -->
<!-- =========================================================================================== -->

<!-- =========================================================================================== -->
<!-- ===================== Core JavaScript and Additional Plugin =============================== -->
<!-- =========================================================================================== -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="resources/vendor/jquery/jquery-1.11.1.min.js"></script>

<!-- all compiled bootstap plugins -->
<script src="resources/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Magnific Popup Lightbox -->
<script src="resources/vendor/magnifix-popup/jquery.magnific-popup.min.js"></script>

<!-- =========================== Contact Page Specific ========================================= -->

<!-- Google Maps API -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<!-- gMaps Plugin -->
<script src="resources/vendor/gmaps/gmaps.js"></script>

<!-- Bootstrap form validation library -->
<script src="resources/vendor/jqBootstrapValidation/jqBootstrapValidation.js"></script>

<!-- Script for the contact us form -->
<script src="resources/js/contact-us.js"></script>

<!-- =========================================================================================== -->

<!-- Project Core JavaScript -->
<script src="resources/js/main.js"></script>


<!-- =========================================================================================== -->
<!-- =========================================================================================== -->
<!-- =========================================================================================== -->
  
<style>
#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:auto;
  height:auto;
  display:none;
  z-index:9999;
  padding:20px;
  border-radius: 15px;
  text-align: center;
}
#boxes #dialog {
  width:auto; 
  height:auto;
  padding:10px;
  background-color:#ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}

#lorem{
	font-family: "Segoe UI", sans-serif;
	font-size: 12pt;
  text-align: left;
}
#popupfoot{
	font-family: "Segoe UI", sans-serif;
	font-size: 16pt;
  padding: 10px 20px;
}
#popupfoot a{
	text-decoration: none;
}
.agree:hover{
  background-color: #D1D1D1;
}
.popupoption:hover{
	background-color:#D1D1D1;
	color: green;
}
.popupoption2:hover{
	
	color: red;
}
</style>

<div id="boxes">
  <div style="top: 100px; left: 551.5px; display: none;" id="dialog" class="window"> <h2>KSG-STAR</h2>
    <div id="lorem">
   
    <p align='center'><img src='banner/1543439243WhatsApp%20Image%202017-05-31%20at%206.35.03%20PM.jpg' height='500px' width='400px' id='bannerpic' style='align:center;'></p><p></p>    
    </div>
    <div id="popupfoot"> <a href="#" class="close agree">Close</a></div>
  </div>
  <div style="width: 100%; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>

<script> var items=["banner\/1543439243WhatsApp Image 2017-05-31 at 6.35.03 PM.jpeg","banner/index.html\/2142747943b5d28be0-5c9b-42bb-9386-33c93bf8c3cb.jpg","banner/index.html\/13091194237d56b37b-8c3b-4eb2-b225-d2328bdc9e65.jpg","banner/index.html\/14663238519af46940-c74c-4f4b-8bd3-edd8818ad605.jpg","banner/index.html\/124655346727e2faad-55a5-491f-af42-9560280e3d2f.jpg","banner/index.html\/1050581403c0a926dd-ee00-4ff3-93a1-c72a972b51ab.jpg","banner/index.html\/1991112259fc156d8e-df73-453b-ba16-82654b71d33b.jpg","banner\/633811999WhatsApp Image 2017-05-31 at 6.35.03 PM.jpeg"]; </script><script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<script src="popup.js"></script>
<script>
jQuery(document).ready(function(){

  function showpanel() {   

 

    var item = items[Math.floor(Math.random()*items.length)];
jQuery('#bannerpic').attr('src',item);
setTimeout(showpanel, 10000)

 }

 
 setTimeout(showpanel, 10000)

});

</script>

</body>

<!-- Mirrored from www.asgmorningstar.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Sep 2017 09:48:16 GMT -->
</html>
</body>
</html>