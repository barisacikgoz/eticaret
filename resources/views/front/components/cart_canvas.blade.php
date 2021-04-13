<h2 class="offcanvas-cart-title mb-10">Shopping Cart</h2>

@foreach($baskets as $basket)
    <div class="cart-product-wrapper mb-6 deleteBtn" delete-id="{{ $basket->id }}">
        <div class="single-cart-product">
            <div class="cart-product-thumb">
                <a href="single-product.html"><img src="{{ url( $basket->product->product_image ) }}" width="100px" height="80px"></a>
            </div>
            <div class="cart-product-content">
                <h3 class="title"><a href="single-product.html">{{ $basket->product->product_name }}</a></h3>
                <span class="price">
					<span class="new">${{ $basket->product->product_price }}</span>
                    <span class="old">$40.00</span>
                    <input type="text" class="form-control" id="cartAmount" style="width: 35px; height: 30px; margin-left: 35px" value="{{ $basket->quantity }}" title="Miktar" readonly>
                </span>
            </div>
        </div>
        <div class="cart-product-remove">
            <a type="button" class="deleteCart" data-id="{{ $basket->product->id }}"><i class="fa fa-trash"></i></a>
        </div>
    </div>
@endforeach


<div class="cart-product-total">
    <span class="value">Subtotal</span>
    <span class="price" id="cart_price">${{ $basketTotals['subTotal'] }}</span>
</div>

<div class="cart-product-btn mt-4">
    <a href="{{ route('basket.index') }}" class="btn btn-dark btn-hover-primary rounded-0 w-100">View cart</a>
    <a href="#" class="btn btn-dark btn-hover-primary rounded-0 w-100 mt-4">Checkout</a>
</div>
