@extends('Frontend.master')
@section('content')
<main class="main">
   <!-- BREADCRUMB -->
   <div id="breadcrumb" class="section">
      <!-- container -->
      <div class="container">
         <!-- row -->
         <div class="row">
            <div class="col-md-12">
               <h3 class="breadcrumb-header">Checkout</h3>
               <ul class="breadcrumb-tree">
                  <li><a href="#">Home</a></li>
                  <li class="active">Checkout</li>
               </ul>
            </div>
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </div>
   <!-- /BREADCRUMB -->
   <div class="page-header text-center" style="background-image: url('/Frontend/img/page-header-bg.jpg')">
      <div class="container">
         <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
      </div>
      <!-- End .container -->
   </div>
   <!-- End .breadcrumb-nav -->
   <div class="page-content">
      <div class="cart">
         <div class="container">
            <div class="row">
               <div class="col-lg-9">
                  <table class="table table-cart table-mobile">
                     <thead>
                        <tr>
                           <th>Product</th>
                           <th>Price</th>
                           <th>Quantity</th>
                           <th>Total</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ( $cartProduct as $product )

                        <tr>
                            <td class="product-col">
                                <div class="product">
                        <tr>
                           <td class="product-col">
                              <div class="product">
                                 <figure class="product-media">
                                    <a href="#">
                                    <img src="{{asset('images/'.$product->products[0]->image)}}" alt="Product image" style="height: 100px;width:100px" >
                                    </a>
                                 </figure>
                                 <h3 class="product-title">
                                    <a href="#">{{$product->products[0]->name}}</a>
                                 </h3>
                                 <!-- End .product-title -->
                              </div>
                              <!-- End .product -->
                           </td>
                           <td class="price-col">$ {{$product->products[0]->Price}}</td>
                           <td class="quantity-col">
                              <div class="cart-product-quantity">
                                 <span class="minus">-</span>
                                 <span>1</span>
                                 <span class="plus">+</span>
                              </div>
                              <!-- End .cart-product-quantity -->
                            </td>
                           <td class="total-col">$76.00</td>
                           <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  <!-- End .table table-wishlist -->
                  <div class="cart-bottom">
                     <div class="cart-discount">
                        <form action="#">
                           <div class="input-group">
                              <input type="text" class="form-control" required placeholder="coupon code">
                              <div class="input-group-append">
                                 <button class="btn btn-outline-primary-2 aro" type="submit"><i class="icon-long-arrow-right" style="color:#000"></i></button>
                              </div>
                              <!-- .End .input-group-append -->
                           </div>
                           <!-- End .input-group -->
                        </form>
                     </div>
                     <!-- End .cart-discount -->
                  </div>
                  <!-- End .cart-bottom -->
               </div>
               <!-- End .col-lg-9 -->
               <aside class="col-lg-3">
                  <div class="summary summary-cart">
                     <h3 class="summary-title">Cart Total</h3>
                     <!-- End .summary-title -->
                     <table class="table table-summary">
                        <tbody>
                           <tr class="summary-subtotal">
                              <td>Subtotal:</td>
                              <td>$160.00</td>
                           </tr>
                           <!-- End .summary-shipping-row -->
                           <tr class="summary-shipping-estimate">
                              <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
                              <td>&nbsp;</td>
                           </tr>
                           <!-- End .summary-shipping-estimate -->
                           <tr class="summary-total">
                              <td>Total:</td>
                              <td>$160.00</td>
                           </tr>
                           <!-- End .summary-total -->
                        </tbody>
                     </table>
                     <!-- End .table table-summary -->
                     <a href="/cart/checkout" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                  </div>
                  <!-- End .summary -->
                  <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span></a>
               </aside>
               <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
         </div>
         <!-- End .container -->
      </div>
      <!-- End .cart -->
   </div>
   <!-- End .page-content -->
</main>
<!-- End .main -->
@endsection
