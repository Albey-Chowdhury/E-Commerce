<div class="add-to-cart">
    <form action="{{url('/product/add/to/cart')}}" method="POST">
     @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <input type="hidden" name="price" value="{{$product->Price}}">
        <button type="submit" class="add-to-cart-btn" ><i class="fa fa-shopping-cart"></i> add to cart</button>
     </form>
</div>
