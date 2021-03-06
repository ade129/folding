<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <!DOCTYPE html>
   <html lang="zxx">
      <head>
         <title>Toys Shop an Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
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
         <!--Shoping cart-->
         <link rel="stylesheet" href="{{asset('bingkai/css/shop.css')}}" type="text/css" />
         <!--//Shoping cart-->
         <link rel="stylesheet" type="text/css" href="{{asset('bingkai/css/jquery-ui1.css')}}">
         <link href="{{asset('bingkai/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
         <link rel="stylesheet" href="{{asset('bingkai/css/flexslider.css')}}" type="text/css" media="screen" />
         <!--stylesheets-->
         <link href="{{asset('bingkai/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
         <!--//stylesheets-->
         <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
         <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      </head>
      <body>
         
         <!-- short -->
         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="index.html">Home</a>
                     <span>/ /</span>
                  </li>
                  <li>Single Page</li>
               </ul>
            </div>
         </div>
         <!-- //short-->
         <!--//banner -->
         <!--/shop-->
         <section class="banner-bottom py-lg-5 py-3">
            <div class="container">
                
               {{ Form::open(array('url' => 'home/detail/'.$detail->slug, 'class' => 'form-horizontal','files' => 'true')) }}                    
                
               <div class="inner-sec-shop pt-lg-4 pt-3">
                  <div class="row">
                     <div class="col-lg-4 single-right-left ">
                        <div class="grid images_3_of_2">
                           <div class="flexslider1">
                              <ul class="slides">
                                 <li data-thumb="images/f2.jpg">
                                    <div class="thumb-image"> <img src="@if(!is_null($detail->images)){{asset('porducts_images')}}/{{$detail->images->name }}@endif" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                                 </li>
                              </ul>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                        <h3>{{$detail->name}}</h3>
                        <p><span class="item_price">{{$detail->color}}</span>
                        </p>
                        <div class="color-quality">
                           <div class="color-quality-right">
                              <h5>Size :</h5>
                              <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                              <option value="null">{{$detail->size}}</option>
                              </select>
                           </div>
                        </div>
                        <div class="occasional">
                           <h5>Types :</h5>
                           <div class="colr ert">
                           <label class="radio"><input type="radio" name="radio" checked=""><i></i>{{$detail->type}}</label>
                           </div>
                           <div class="clearfix"> </div>
                        </div>

                        {{-- ganti pake whatsapp --}}
                        <div class="occasion-cart">
                           <div class="toys single-item singlepage">
                              <form action="#" method="post">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="add" value="1">
                                 <input type="hidden" name="toys_item" value="Farenheit">
                                 <input type="hidden" name="amount" value="575.00">
                                 <button type="submit" class="toys-cart ptoys-cart add">
                                 Add to Cart
                                 </button>
                              </form>
                           </div>
                        </div>
                        <ul class="footer-social text-left mt-lg-4 mt-3">
                           <li>Share On : </li>
                           <li class="mx-1">
                              <a href="#">
                              <span class="fab fa-facebook-f"></span>
                              </a>
                           </li>
                           <li class="">
                              <a href="#">
                              <span class="fab fa-twitter"></span>
                              </a>
                           </li>
                           <li class="mx-1">
                              <a href="#">
                              <span class="fab fa-google-plus-g"></span>
                              </a>
                           </li>
                           <li class="">
                              <a href="#">
                              <span class="fab fa-linkedin-in"></span>
                              </a>
                           </li>
                           <li class="mx-1">
                              <a href="#">
                              <span class="fas fa-rss"></span>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="clearfix"> </div>
                     <!--/tabs-->
                     <div class="responsive_tabs">
                        <div id="horizontalTab">
                           <div class="resp-tabs-container">
                              <!--/tab_one-->
                              <div class="tab1">
                                 <div class="single_page">
                                    <h6>Description</h6>
                                    </p>
                                    <p class="para">{{$detail->description}}
                                    </p>
                                 </div>
                              </div>
                              <!--//tab_one-->
                           </div>
                        </div>
                     </div>
                     <!--//tabs-->
                  </div>
               </div>
               {{Form::close()}}
            </div>
         </section>
         <!--//subscribe-->
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
         <!--jQuery-->
         <script src="{{asset('bingkai/js/jquery-2.2.3.min.js')}}"></script>
         <!-- newsletter modal -->
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
         <!-- price range (top products) -->
         <script src="{{asset('bingkai/js/jquery-ui.js')}}"></script>
         <script>
            //<![CDATA[ 
            $(window).load(function () {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 9000,
                    values: [50, 6000],
                    slide: function (event, ui) {
                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });
                $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
            
            }); //]]>
         </script>
         <!-- //price range (top products) -->
         <!-- single -->
         <script src="{{asset('bingkai/js/imagezoom.js')}}"></script>
         <!-- single -->
         <!-- script for responsive tabs -->
         <script src="{{asset('bingkai/js/easy-responsive-tabs.js')}}"></script>
         <script>
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    closed: 'accordion', // Start closed if in accordion view
                    activate: function (event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#tabInfo');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });
                $('#verticalTab').easyResponsiveTabs({
                    type: 'vertical',
                    width: 'auto',
                    fit: true
                });
            });
         </script>
         <!-- FlexSlider -->
         <script src="{{asset('bingkai/js/jquery.flexslider.js')}}"></script>
         <script>
            // Can also be used with $(document).ready()
            $(window).load(function () {
                $('.flexslider1').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
         </script>
         <!-- //FlexSlider-->
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
            $(document).ready(function () {
            
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
         <!-- //smooth-scrolling-of-move-up -->
         <!--bootstrap working-->
        <script src="{{asset('bingkai/js/bootstrap.min.js')}}"></script>
         <!-- //bootstrap working--> 
      </body>
   </html>