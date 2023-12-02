<header>
         <!-- TOP HEADER -->
         <div id="top-header">
            <div class="container">
               <ul class="header-links pull-left">
                  <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                  <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
               </ul>
               <ul class="header-links pull-right">
                  <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                  <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
               </ul>
            </div>
         </div>
         <!-- /TOP HEADER -->
         <!-- MAIN HEADER -->
         <div id="header">
            <!-- container -->
            <div class="container">
               <!-- row -->
               <div class="row">
                  <!-- LOGO -->
                  <div class="col-md-3">
                     <div class="header-logo">
                        <a href="{{url('/')}}" class="logo">
                        <img src="Frontend/img/logo.png" alt="">
                        </a>
                     </div>
                  </div>
                  <!-- /LOGO -->
                  <!-- SEARCH BAR -->
                  <div class="col-md-6">
                     <div class="header-search">
                        <form>
                           <select class="input-select">
                              <option value="0">All Categories</option>
                            @foreach ($categories as $category )
                                <option>{{$category->name}}</option>
                            @endforeach
                           </select>
                           <input class="input" placeholder="Search here">
                           <button class="search-btn">Search</button>
                        </form>
                     </div>
                  </div>
                  <!-- /SEARCH BAR -->
                  <!-- ACCOUNT -->
                  <div class="col-md-3 clearfix">
                     <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                           <a href="#">
                              <i class="fa fa-heart-o"></i>
                              <span>Your Wishlist</span>
                              <div class="qty">2</div>
                           </a>
                        </div>
                        <!-- /Wishlist -->
                        <!-- Cart -->
                        <div class="dropdown">
                           <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                              <i class="fa fa-shopping-cart"></i>
                              <span>Your Cart</span>
                              @php
                                 $sum = 0;
                              @endphp
                              <div class="qty">{{count($cartProduct)}}</div>
                           </a>
                           <div class="cart-dropdown">
                           @foreach ( $cartProduct as $product )
                              <div class="cart-list">
                                 <div class="product-widget">
                                    <div class="product-img">
                                       <img src="{{ asset('images/'.$product->products[0]->image)}}" alt="">
                                    </div>
                                    <div class="product-body">
                                       <h3 class="product-name"><a href="#">{{$product->products[0]->name}}</a></h3>
                                       <h4 class="product-price"><span class="qty">{{$product->qty}}x</span>${{ $totalPrice = $product->qty * $product->price}}</h4>
                                    </div>
                                    <a href="{{url('/cart/product/remove/'.$product->id)}}"><button class="delete"><i class="fa fa-close"></i></button></a>
                                 </div>
                              </div>
                              @php
                                 $sum += $totalPrice
                              @endphp
                              <div class="cart-summary">
                                  <small>{{$product->qty}} Item(s) Selected</small>
                                  <h5>SUBTOTAL: ${{$sum}}</h5>
                                </div>
                            @endforeach
                              <div class="cart-btns">
                                 <a href="#">View Cart</a>
                                 <a href="{{url('/cart/checkout')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- /Cart -->
                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                           <a href="#">
                           <i class="fa fa-bars"></i>
                           <span>Menu</span>
                           </a>
                        </div>
                        <!-- /Menu Toogle -->
                     </div>
                  </div>
                  <!-- /ACCOUNT -->
               </div>
               <!-- row -->
            </div>
            <!-- container -->
         </div>
         <!-- /MAIN HEADER -->
      </header>
          <!-- NAVIGATION -->
      <nav id="navigation">
         <!-- container -->
         <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
               <!-- NAV -->
               <ul class="main-nav nav navbar-nav">
                  <li class="active"><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ url('/Store') }}">Store</a></li>
                  <li><a href="{{ url('/Category')}}">Catagory</a></li>
               </ul>
               <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
         </div>
         <!-- /container -->
      </nav>
      <!-- /NAVIGATION -->
