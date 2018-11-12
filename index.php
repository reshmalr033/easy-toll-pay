<?php
include 'index_menu.php';
?>
<script type="text/javascript">
    
    $(document).ready(function () {

    $(".player").mb_YTPlayer();

});
    
    </script>
    <style type="text/css">
        
        
        .video-section .pattern-overlay {

padding: 150px 0 32px;
min-height: 496px; 
/* Incase of overlay problems just increase the min-height*/
}



.video-section .buttonBar{display:none;}
.player {font-size: 1px;}
    </style>

				<!-- start-search-->
			<div class="clearfix"> </div>
        </div>
			 	<!-- Warming Up -->
<div class="banner">
						<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								   <h3>Please Obey Traffic Rules</h3>
								   
								</div>
							</li>
							
							
							
						
                                                        
						</div>
						<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  </script>

			</div>

<!--Video Section-->

<!--Video Section Ends Here-->


		</div>
	</div>
	<!--start-banner-bottom-->
	<!-- welcome-bottom -->
	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				<h3 class="tittle">Special Services</h3>
				<div class="welcome-bottom-grids">
					<div class="welcome-bottom-grid-left">
						<div class="welcome-bottom-grid-left-g">
							<img src="images/7.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos">
								<h4>Pellentesque mollis</h4>
								<p>Nulla et finibus libero. Suspendisse vitae ex facilisis, ultricies est sed, porta ante. Vivamus tristique luctus lorem, eget dignissim lacus sodales tristique.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
						<div class="welcome-bottom-grid-left-g">
							<img src="images/8.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos1">
								<h4>Pellentesque mollis</h4>
								<p>Nulla et finibus libero. Suspendisse vitae ex facilisis, ultricies est sed, porta ante. Vivamus tristique luctus lorem, eget dignissim lacus sodales tristique.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
						<div class="car-text">
							<h5>Tollbooth Survey</h5>
							<p>Dolor amet At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias </p>
						
						</div>
					</div>
					<div class="welcome-bottom-grid-right">
						<div class="car-text">
						<h5>Tollbooth Survey</h5>
							<p>Dolor amet At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias </p>
							
						</div>
						<div class="welcome-bottom-grid-left-g">
							<img src="images/9.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos">
								<h4>Pellentesque mollis</h4>
								<p>Nulla et finibus libero. Suspendisse vitae ex facilisis, ultricies est sed, porta ante. Vivamus tristique luctus lorem, eget dignissim lacus sodales tristique.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
						<div class="welcome-bottom-grid-left-g">
							<img src="images/10.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos1">
								<h4>Pellentesque mollis</h4>
								<p>Nulla et finibus libero. Suspendisse vitae ex facilisis, ultricies est sed, porta ante. Vivamus tristique luctus lorem, eget dignissim lacus sodales tristique.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //welcome-bottom -->

<!--start-video-->
   
		<!--//news-->
	<div class="car-bottom">
		  <div class="container">
			  <div class="col-md-6 car-bottom-right">
					<h3>The key maintenance</h3>
					<h4>for your safety <span> on road</span></h4>
					<p>Lorem ipsum dolor sit amet,Ex ea commodo consequat Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
					<div class="morec1">
					  <a href="#" class="hvr-bounce-to-top">More Info...</a>
					</div>
				</div>
					<div class="clearfix"></div>
		  </div>
		</div>

		<?php
                        include 'footer.php';
                        ?>