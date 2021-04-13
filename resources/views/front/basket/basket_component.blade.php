<div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="pro-thumbnail">Resim</th>
                            <th class="pro-title">Ürün</th>
                            <th class="pro-price">Fiyat</th>
                            <th class="pro-quantity">Adet</th>
                            <th class="pro-subtotal">Toplam Fiyat</th>
                            <th class="pro-remove">İşlemler</th>
                        </tr>
                        </thead>

                        <div id="alert_input" style="display: none" class="alert alert-warning">Üzgünüz sepetinizde ürün bulunmamaktadır. <a href="{{ route('user.shop') }}" class="text-dark"><b>Alışverişe devam edin.</b></a></div>

                        @if(basket_count() == 0)
                            <div id="alert_input" class="alert alert-warning">Üzgünüz sepetinizde ürün bulunmamaktadır. <a href="{{ route('user.shop') }}" class="text-dark"><b>Alışverişe devam edin.</b></a></div>
                        @endif
                        <tbody>
                        @foreach($baskets as $basket)
                            <tr class="deleteColumn">
                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{ url($basket->product->product_image) }}" width="100"/></a></td>
                                <td class="pro-title"><a href="{{ route('product.show', $basket->product->id) }}">{{ $basket->product->product_name }} <br> {{ $basket->product->product_stock_code }}</a></td>
                                <td class="pro-price"><span>${{ $basket->product->product_price }}</span></td>
                                <td class="pro-quantity">
                                    <input type="number" class="form-control quantityBtn" single-price="{{ $basket->product->product_price }}"
                                           data-id="{{ $basket->id }}" value="{{ $basket->quantity  }}" min="1">
                                </td>
                                <td class="pro-subtotal total_price_{{ $basket->id }}"><span>${{ $basket->product->product_price * $basket->quantity }}</span></td>
                                <input type="hidden" value="{{ $basket->totalPrice }}">
                                <td class="pro-remove">
                                    <a class="deleteBasket" data-id="{{$basket->id}}" title="Sil" style="cursor: pointer"><i class="pe-7s-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="cart-update-option d-block d-md-flex justify-content-between">
                    <div class="apply-coupon-wrapper">
                        <form action="#" method="post" class=" d-block d-md-flex">
                            <input type="text" placeholder="Enter Your Coupon Code" required/>
                            <button class="btn btn-dark btn-hover-primary rounded-0">Apply Coupon</button>
                        </form>
                    </div>
                    <div class="cart-update mt-sm-16">
                        <button type="button" class="btn btn-dark btn-hover-primary rounded-0" id="basketUpdateBtn">Update Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 ms-auto col-custom">
                <div class="cart-calculator-wrapper">
                    <div class="cart-calculate-items">
                        <h3 class="title">Cart Totals</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Sub Total</td>
                                    <td id="sub_total">${{ $basketTotals['subTotal'] }}</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td id="shipping">${{ $basketTotals['tax'] }}</td>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <td class="total-amount" id="total_amount">${{ $basketTotals['total'] }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    @if(basket_count() == 0)
                        <a href="{{ route('user.shop') }}" class="btn btn-dark btn-hover-primary rounded-0 w-100">Back to Shop</a>
                    @else
                        <button type="button" class="btn btn-dark btn-hover-primary rounded-0 w-100" id="orderBtn">Proceed To Checkout</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
