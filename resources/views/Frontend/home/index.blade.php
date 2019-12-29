		<div class="header-outs" id="home">
			<div class="header-bar">
			   <div class="info-top-grid">
				  <div class="info-contact-agile">
					 <ul>
						<li>
						   <span class="fas fa-phone-volume"></span>
						   @foreach ($abouts as $about)
						   <p>{{$about->nomortelepon}}</p>
						   @endforeach
						</li>
						<li>
						   <span class="fas fa-envelope"></span>
						   @foreach ($abouts as $about)
						   <p><a href="mailto:indotehnik1989@gmail.com">{{$about->email}}</a></p>
						   @endforeach
						</li>
						<li>
						</li>
					 </ul>
				  </div>
			   </div>
			   <div class="container-fluid">
				  <div class="hedder-up row">
					 <div class="col-lg-3 col-md-3 logo-head">
						<h1><a class="navbar-brand" href="index.html">CV. INDOTEHNIK</a></h1>
					 </div>
					 <div class="col-lg-5 col-md-6 search-right">
						<form class="form-inline my-lg-0">
						   <input class="form-control mr-sm-2" type="search" placeholder="Search">
						   <button class="btn" type="submit">Search</button>
						</form>
					 </div>
					 <div class="col-lg-4 col-md-3 right-side-cart">
						<div class="cart-icons">
						   <ul>
							  <li>
								 <span class="far fa-heart"></span>
							  </li>
							  <li>
								 <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
							  </li>
							  <li class="toyscart toyscart2 cart cart box_1">
								 <form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="top_toys_cart" type="submit" name="submit" value="">
									<span class="fas fa-cart-arrow-down"></span>
									</button>
								 </form>
							  </li>
						   </ul>
						</div>
					 </div>
				  </div>
			   </div>
			   <nav class="navbar navbar-expand-lg navbar-light">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					 <ul class="navbar-nav ">
						<li class="nav-item active">
						   <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
						   <a href="{{url('aboutme')}}" class="nav-link">About</a>
						</li>
						<li class="nav-item">
						   <a href="service.html" class="nav-link">Service</a>
						</li>
						<li class="nav-item">
						   <a href="shop.html" class="nav-link">Shop Now</a>
						</li>
						<li class="nav-item dropdown">
						   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						   Pages
						   </a>
						   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							  <a class="nav-link" href="icon.html">404 Page</a>
							  <a class="nav-link " href="typography.html">Typography</a>
						   </div>
						</li>
						<li class="nav-item dropdown">
						   <a class="nav-link dropdown-toggle" href="{{url('home/all/')}}" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						   Product
						   </a>
						</li>
						<li class="nav-item">
						   <a href="{{url('/home/all/')}}" class="nav-link">Contact</a>
						</li>
					 </ul>
				  </div>
			   </nav>
			</div>
			<!-- Slideshow 4 -->
			<div class="slider text-center">
			   <div class="callbacks_container">
				  <ul class="rslides" id="slider4">
					 <li>
						<div class="slider-img one-img">
						   <div class="container">
							  <div class="slider-info ">
								 <h5>Pick The Best Toy For <br>Your Kid</h5>
								 <div class="bottom-info">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
								 </div>
								 <div class="outs_more-buttn">
									<a href="about.html">Read More</a>
								 </div>
							  </div>
						   </div>
						</div>
					 </li>
					 <li>
						<div class="slider-img two-img">
						   <div class="container">
							  <div class="slider-info ">
								 <h5>Sort Toys And Teddy bears<br>For Kids</h5>
								 <div class="bottom-info">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
								 </div>
								 <div class="outs_more-buttn">
									<a href="about.html">Read More</a>
								 </div>
							  </div>
						   </div>
						</div>
					 </li>
					 <li>
						<div class="slider-img three-img">
						   <div class="container">
							  <div class="slider-info">
								 <h5>Best Toys And Dolls<br> For Kids</h5>
								 <div class="bottom-info">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
								 </div>
								 <div class="outs_more-buttn">
									<a href="about.html">Read More</a>
								 </div>
							  </div>
						   </div>
						</div>
					 </li>
				  </ul>
			   </div>
			   <!-- This is here just to demonstrate the callbacks -->
			   <!-- <ul class="events">
				  <li>Example 4 callback events</li>
				  </ul>-->
			   <div class="clearfix"></div>
			</div>
		 </div>

		<!-- about -->
		 <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-4">
			   <h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Products</h3>
			   <div class="row banner-below-w3l">
				@foreach ($categories as $categorie)
				  <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
					 <img src="{{asset('porducts_images')}}/{{$categorie->images }}" class="img-thumbnail" alt="" width="100" height="100">
					 <div class="banner-right-icon">
					 	<a href="{{url('/home/all/'.$categorie->name)}}"><h4  class="pt-3">{{$categorie->name}}</h4></a>
					 </div>
				  </div>
				@endforeach
			   </div>
			</div>
		 </section>
		 <!-- //about -->
		 <!--new Arrivals -->
		 <section class="blog py-lg-4 py-md-3 py-sm-3 py-3">
			<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
			   <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Premium products</h3>
			   <div class="slid-img">
				  <ul id="flexiselDemo1">
					  @foreach ($premiums as $premium)
					 <li>
						<div class="agileinfo_port_grid">
						   <img src="{{asset('porducts_images')}}/{{$premium->images }}" alt=" " width="100" height="200" class="img-fluid" />
						   <div class="banner-right-icon">
						   <h4 class="pt-3">{{$premium->name}}</h4>
						   </div>
						   <div class="outs_more-buttn">
							  <a href="{{url('home/premdetail/'. $premium->slug)}}">Shop Now</a>
						   </div>
						</div>
					 </li>
					 @endforeach
				  </ul>
			   </div>
			</div>
		 </section>
		 <!--//about -->
		 <!--//Product-view-->
		 <section class="premium py-lg-4 py-md-3 py-sm-3 py-3">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
			   <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">The Best products</h3>
			   <div class="row">
				   @foreach ($bestproducts as $best)
					   
				  <div>
						<img src="{{asset('porducts_images')}}/{{$best->images }}" alt=" " width="200" height="200" class="img-fluid" />
				  </div>
				  <div class="col-lg-6 agileits-toys-right">
					 <div class="sub-agile-info-toys">
					 <h3>{{$best->name}}</h3>
					 <p><font color="white" size="5">{{$best->description}} 
						</font></p>
						<div class="clients_more-buttn">
						   <a href="shop.html" class="mb-0">Shop Now</a>
						</div>
					 </div>
				  </div>
				  @endforeach
			   </div>
			   {{-- <div class="row mt-lg-4 mt-md-4 mt-3">
				  <div class="col-lg-6 agileits-toys-right">
					 <div class="sub-agile-info-toys">
						<p>velit sagittis vehicula. Duis posuere 
						   ex in mollis iaculis. Suspendisse tincidunt
						   velit sagittis vehicula. Duis posuere 
						   velit sagittis vehicula. Duis posuere 
						   ex in mollis iaculis. Suspendisse tincidunt
						   velit sagittis vehicula. Duis posuere 
						</p>
						<div class="clients_more-buttn ">
						   <a href="shop.html" class="mb-0">Shop Now</a>
						</div>
					 </div>
				  </div>
				  <div class="col-lg-6 agileits-toys-left"></div>
			   </div> --}}
			</div>
		 </section>
		 <!--Product-about-->
		 <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
			   <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">About Us</h3>
			   <div class="about-products-w3layouts">
				  <p class="my-lg-4 my-md-3 my-3">@foreach ($abouts as $about)
					{{$about->tentangkami}}
				  @endforeach 
				  </p>
				  
			   </div>
			</div>
		 </section>
		 <!--//Product-about-->

		 {{-- footer --}}
		 <section class="subscribe">
			<div class="container-fluid">
			<div class="row">
			   <div class="col-lg-6 col-md-6 map-info-right px-0">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.252907136933!2d106.74159429999999!3d-6.2303521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0b0c64c483b%3A0xe045722b4cd85c1a!2sJl.%20H.%20Radi%2C%20Kreo%2C%20Kec.%20Larangan%2C%20Kota%20Tangerang%2C%20Banten%2015156!5e0!3m2!1sen!2sid!4v1577597855467!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>			   </div>
			   <div class="col-lg-6 col-md-6 address-w3l-right text-center">
				  <div class="address-gried ">
					 <span class="far fa-map"></span>
					 <p>Jl .H Radi RT 001/ RW009 No 86H Kreo<br>Larangan, Tangerang
					 <p>
				  </div>
				  <div class="address-gried mt-3">
					 <span class="fas fa-phone-volume"></span>
					 <a href="tel:+6281219178358"></a>
					 @foreach ($abouts as $about)
					 <p> {{$about->nomortelepon}}</p>
					 <p class="fas fa-whatsapp" style="background-color:#ff6347;"><font size="6">{{$about->whatsapp}}</font></p>
					 @endforeach
				  </div>
				  <div class=" address-gried mt-3">
					 <span class="far fa-envelope"></span>
					 @foreach ($abouts as $about)
						<p>{{$about->email}}</p>
					 @endforeach
				  </div>
			   </div>
			</div>
			</div>
		 </section>
		 <!--//subscribe-address-->
		 <section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
			   <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get In Touch Us</h3>
			   <div class="icons mt-4 text-center">
				  <ul>
					 <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
					 <li><a href="#"><span class="fas fa-envelope"></span></a></li>
					 <li><a href="#"><span class="fas fa-rss"></span></a></li>
					 <li><a href="#"><span class="fab fa-vk"></span></a></li>
				  </ul>
				  <p class="my-3">velit sagittis vehicula. Duis posuere 
					 ex in mollis iaculis. Suspendisse tincidunt
					 velit sagittis vehicula. Duis posuere 
					 velit sagittis vehicula. Duis posuere 
				  </p>
			   </div>
			   <div class="email-sub-agile">
				  <form action="#" method="post">
					 <div class="form-group sub-info-mail">
						<input type="email" class="form-control email-sub-agile" placeholder="Email">
					 </div>
					 <div class="text-center">
						<button type="submit" class="btn subscrib-btnn">Subscribe</button>
					 </div>
				  </form>
			   </div>
			</div>
		 </section>
		 <!--//subscribe-->
		 <!-- footer -->
		 <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
			<div class="copy-agile-right">
			   <p> 
				  © 2018 Toys-Shop. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
			   </p>
			</div>
		 </footer>
