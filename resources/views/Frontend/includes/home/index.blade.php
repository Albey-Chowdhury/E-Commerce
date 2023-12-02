@extends('Frontend.master')
@section('content')
<!-- SECTION -->
      <div class="section">
         <!-- container -->
         <div class="container">
            <!-- row -->
            <div class="row">
                {{-- Slider --}}
                <div class="slider">

                </div>
                {{--/ Slider --}}
               <!-- shop -->
               <div class="col-md-4 col-xs-6">
                  <div class="shop">
                     <div class="shop-img">
                        <img src="Frontend/img/shop01.png" alt="">
                     </div>
                     <div class="shop-body">
                        <h3>Laptop<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
               </div>
               <!-- /shop -->
               <!-- shop -->
               <div class="col-md-4 col-xs-6">
                  <div class="shop">
                     <div class="shop-img">
                        <img src="Frontend/img/shop03.png" alt="">
                     </div>
                     <div class="shop-body">
                        <h3>Accessories<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
               </div>
               <!-- /shop -->
               <!-- shop -->
               <div class="col-md-4 col-xs-6">
                  <div class="shop">
                     <div class="shop-img">
                        <img src="Frontend/img/shop02.png" alt="">
                     </div>
                     <div class="shop-body">
                        <h3>Cameras<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
               </div>
               <!-- /shop -->
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </div>
      <!-- /SECTION -->
  <!-- HOT DEAL SECTION -->
      <div id="hot-deal" class="section">
         <!-- container -->
         <div class="container">
            <!-- row -->
            <div class="row">
               <div class="col-md-12">
                  <div class="hot-deal">
                     <ul class="hot-deal-countdown">
                        <li>
                           <div>
                              <h3 id="days">00</h3>
                              <span>Days</span>
                           </div>
                        </li>
                        <li>
                           <div>
                              <h3 id="hours">00</h3>
                              <span>Hours</span>
                           </div>
                        </li>
                        <li>
                           <div>
                              <h3 id="mins">00</h3>
                              <span>Mins</span>
                           </div>
                        </li>
                        <li>
                           <div>
                              <h3 id="secs">00</h3>
                              <span>Secs</span>
                           </div>
                        </li>
                        <li>
                           <div>
                              <h3 id="misecs">00</h3>
                              <span>Misecs</span>
                           </div>
                        </li>
                     </ul>
                     <h2 class="text-uppercase">hot deal this week</h2>
                     <p>New Collection Up to 50% OFF</p>
                     <a class="primary-btn cta-btn" href="#">Shop now</a>
                  </div>
               </div>
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </div>
      <!-- /HOT DEAL SECTION -->
      <!-- SECTION -->
      <div class="section">
         <!-- container -->
         <div class="container">
            <!-- row -->
            <div class="row">
               <!-- section title -->
               <div class="col-md-12">
                  <div class="section-title">
                     <h3 class="title">New Products</h3>
                     <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">All</a></li>
                            @foreach ($categories as $category )
                            <li><a data-toggle="tab" href="#tab1">{{$category->name}}</a></li>
                          @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- /section title -->
               <!-- Products tab & slick -->
               <div class="col-md-12">
                  <div class="row">
                     <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                           <div class="products-slick" data-nav="#slick-nav-1">
                              <!-- product -->
                              <div class="product">
                                 <div class="product-img">
                                    <img src="Frontend/img/product01.png" alt="">
                                    <div class="product-label">
                                       <span class="sale">-30%</span>
                                       <span class="new">NEW</span>
                                    </div>
                                 </div>
                                 <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                       <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                       <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                       <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                 </div>
                                 <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                 </div>
                              </div>
                              <!-- /product -->
                              <!-- product -->
                              <div class="product">
                                 <div class="product-img">
                                    <img src="Frontend/img/product02.png" alt="">
                                    <div class="product-label">
                                       <span class="new">NEW</span>
                                    </div>
                                 </div>
                                 <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-btns">
                                       <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                       <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                       <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                 </div>
                                 <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                 </div>
                              </div>
                              <!-- /product -->
                              <!-- product -->
                              <div class="product">
                                 <div class="product-img">
                                    <img src="Frontend/img/product03.png" alt="">
                                    <div class="product-label">
                                       <span class="sale">-30%</span>
                                    </div>
                                 </div>
                                 <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    <div class="product-btns">
                                       <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                       <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                       <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                 </div>
                                 <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                 </div>
                              </div>
                              <!-- /product -->
                              <!-- product -->
                              <div class="product">
                                 <div class="product-img">
                                    <img src="Frontend/img/product04.png" alt="">
                                 </div>
                                 <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                       <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                       <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                       <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                 </div>
                                 <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                 </div>
                              </div>
                              <!-- /product -->
                              <!-- product -->
                              <div class="product">
                                 <div class="product-img">
                                    <img src="Frontend/img/product05.png" alt="">
                                 </div>
                                 <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                       <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                       <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                       <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                 </div>
                                 <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                 </div>
                              </div>
                              <!-- /product -->
                           </div>
                           <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                     </div>
                  </div>
               </div>
               <!-- Products tab & slick -->
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </div>
      <!-- /SECTION -->
      <!-- SECTION -->
      <div class="section">
         <!-- container -->
         <div class="container">
            <!-- row -->
            <div class="row">
               <div class="col-md-4 col-xs-6">
                  <div class="section-title">
                     <h4 class="title">Top selling</h4>
                     <div class="section-nav">
                        <div id="slick-nav-3" class="products-slick-nav"></div>
                     </div>
                  </div>
                  <div class="products-widget-slick" data-nav="#slick-nav-3">
                     <div>
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product07.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product08.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product09.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- product widget -->
                     </div>
                     <div>
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product01.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product02.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product03.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- product widget -->
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-6">
                  <div class="section-title">
                     <h4 class="title">Top selling</h4>
                     <div class="section-nav">
                        <div id="slick-nav-4" class="products-slick-nav"></div>
                     </div>
                  </div>
                  <div class="products-widget-slick" data-nav="#slick-nav-4">
                     <div>
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product04.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product05.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product06.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- product widget -->
                     </div>
                     <div>
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product07.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product08.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product09.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- product widget -->
                     </div>
                  </div>
               </div>
               <div class="clearfix visible-sm visible-xs"></div>
               <div class="col-md-4 col-xs-6">
                  <div class="section-title">
                     <h4 class="title">Top selling</h4>
                     <div class="section-nav">
                        <div id="slick-nav-5" class="products-slick-nav"></div>
                     </div>
                  </div>
                  <div class="products-widget-slick" data-nav="#slick-nav-5">
                     <div>
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product01.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product02.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product03.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- product widget -->
                     </div>
                     <div>
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product04.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product05.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- /product widget -->
                        <!-- product widget -->
                        <div class="product-widget">
                           <div class="product-img">
                              <img src="Frontend/img/product06.png" alt="">
                           </div>
                           <div class="product-body">
                              <p class="product-category">Category</p>
                              <h3 class="product-name"><a href="#">product name goes here</a></h3>
                              <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                           </div>
                        </div>
                        <!-- product widget -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </div>
      <!-- /SECTION -->
      <!-- NEWSLETTER -->
      <div id="newsletter" class="section">
         <!-- container -->
         <div class="container">
            <!-- row -->
            <div class="row">
               <div class="col-md-12">
                  <div class="newsletter">
                     <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                     <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                     </form>
                     <ul class="newsletter-follow">
                        <li>
                           <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </div>
      <!-- /NEWSLETTER -->
      @push('script')
       <script>
        //Time Calculator

        // Setup End Date for Countdown (getTime == Time in Milleseconds)
        let launchDate = new Date("Dec 10, 2023 12:00:00").getTime();

        // Setup Timer to tick every 1 second
        let timer = setInterval(tick, 1000);

        function tick () {
        // Get current time
        let now = new Date().getTime();
        // Get the difference in time to get time left until reaches 0
        let t = launchDate - now;

        // Check if time is above 0
        if (t > 0) {
            // Setup Days, hours, seconds and minutes
            // Algorithm to calculate days...
            let days = Math.floor(t / 1000 / 60 / 60 / 24);
            // prefix any number below 10 with a "0" E.g. 1 = 01
            if (days < 10) { days = "0" + days; }

            // Algorithm to calculate hours
            let hours = Math.floor(t / 1000 / 60 / 60) % 24;
            if (hours < 10) { hours = "0" + hours; }

            // Algorithm to calculate minutes
            let mins = Math.floor(t / 1000 / 60) % 60;
            if (mins < 10) { mins = "0" + mins; }

            // Algorithm to calc seconds
            let secs = Math.floor(t / 1000) % 60;
            if (secs < 10) { secs = "0" + secs; }

            // Algorithm to calc seconds
            let misecs = t % 1000;
            if (misecs < 10) { misecs = "0" + misecs; }

            // Set time on document
            document.getElementById("days").innerHTML  = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("mins").innerHTML  = mins;
            document.getElementById("secs").innerHTML  = secs;
            document.getElementById("misecs").innerHTML = misecs;
        }
        }
       </script>
      @endpush
@endsection
