<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <!DOCTYPE html>
   <html lang="zxx">
	  <head>
		 <title>CV. INDOTEHNIK :: Copyright 2019</title>
		 <!--meta tags -->
		 <meta charset="UTF-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
			Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		 <script>
			addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);
			
			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		 </script>
		 <!--//meta tags ends here-->
		 <!--booststrap-->
		 <link href="{{asset('bingkai/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
		 <!--//booststrap end-->
		 <!-- font-awesome icons -->
		 <link href="{{asset('bingkai/css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css" media="all">
		 <!-- //font-awesome icons -->
		 <!-- For Clients slider -->
		 <link rel="stylesheet" href="{{asset('bingkai/css/flexslider.css')}}" type="text/css" media="all" />
		 <!--flexs slider-->
		 {{-- <link href="{{asset('bingkai/css/JiSlider.css')}}" rel="stylesheet"> --}}
		 <!--Shoping cart-->
		 <link rel="stylesheet" href="{{asset('bingkai/css/shop.css')}}" type="text/css" />
		 <!--//Shoping cart-->
		 <!--stylesheets-->
		 <link href="{{asset('bingkai/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
		 <!--//stylesheets-->
		 <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
		 <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	  </head>
	  <body>
		 
		 <!-- //banner -->
		 {!!$pagecontent!!}
		 <!--subscribe-address-->
		 		 <!-- //footer -->
		 <!-- Modal 1-->
		 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			   <div class="modal-content">
				  <div class="modal-header">
					 <h5 class="modal-title" id="exampleModalLabel">Login</h5>
					 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button>
				  </div>
				  <div class="modal-body">
					 <div class="register-form">
						<form action="#" method="post">
						   <div class="fields-grid">
							  <div class="styled-input">
								 <input type="text" placeholder="Your Name" name="Your Name" required="">
							  </div>
							  <div class="styled-input">
								 <input type="email" placeholder="Your Email" name="Your Email" required="">
							  </div>
							  <div class="styled-input">
								 <input type="password" placeholder="password" name="password" required="">
							  </div>
							  <button type="submit" class="btn subscrib-btnn">Login</button>
						   </div>
						</form>
					 </div>
				  </div>
				  <div class="modal-footer">
					 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				  </div>
			   </div>
			</div>
		 </div>
		 <!-- //Modal 1-->
		 <!--js working-->
		 <script src='{{asset('bingkai/js/jquery-2.2.3.min.js')}}'></script>
		 <!--//js working-->
		 <!-- cart-js -->
		 <script src="{{asset('bingkai/js/minicart.js')}}"></script>
		 <script>
			toys.render();
			
			toys.cart.on('toys_checkout', function (evt) {
				var items, len, i;
			
				if (this.subtotal() > 0) {
					items = this.items();
			
					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		 </script>
		 <!-- //cart-js -->
		 <!--responsiveslides banner-->
		 <script src="{{asset('bingkai/js/responsiveslides.min.js')}}"></script>
		 <script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// Slideshow 4
				$("#slider4").responsiveSlides({
					auto: true,
					pager:false,
					nav:true ,
					speed: 900,
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
		 <!--// responsiveslides banner-->	 
		 <!--slider flexisel -->
		 <script src="{{asset('bingkai/js/jquery.flexisel.js')}}"></script>
		 <script>
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 3,
					animationSpeed: 3000,
					autoPlay:true,
					autoPlaySpeed: 2000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 2
						}
					}
				});
				
			});
		 </script>
		 <!-- //slider flexisel -->
		 <!-- start-smoth-scrolling -->
		 <script src="{{asset('bingkai/js/move-top.js')}}"></script>
		 <script src="{{asset('bingkai/js/easing.js')}}"></script>
		 <script>
			jQuery(document).ready(function ($) {
				$(".scroll").click(function (event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 900);
				});
			});
		 </script>
		 <!-- start-smoth-scrolling -->
		 <!-- here stars scrolling icon -->
		 <script>
			$(document).retopady(function () {
			
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
				};
				$().UItoTop({
					easingType: 'easeOutQuart'
				});
			
			});
		 </script>
		 <!-- //here ends scrolling icon -->
		 <!--bootstrap working-->
		<script src="{{asset('bingkai/js/bootstrap.min.js')}}"></script>
		 <!-- //bootstrap working-->
	  </body>
   </html>