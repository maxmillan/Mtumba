@include('Partials._header')
@include('flash-message')
<section class="checkout-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-2 order-lg-1">
                <form class="checkout-form" action="{{url('confirm')}}" method="POST">
                    @csrf
                    <div class="cf-title">Billing Address</div>
                    <div class="row">
                        <div class="col-md-7">
                            <p>*Billing Information</p>
                        </div>
                        <div class="col-md-5">
                            <div class="cf-radio-btns address-rb">
                                <div class="cfr-item">
                                    <input type="radio" name="pm" id="one">
                                    <label for="one">Use my regular address</label>
                                </div>
                                <div class="cfr-item">
                                    <input type="radio" name="pm" id="two">
                                    <label for="two">Use a different address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row address-inputs">
                        <div class="col-md-12">
                            <input type="text" placeholder="Address">
                            <input type="text" placeholder="Address line 2">
                            <input type="text" placeholder="Country">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Zip code">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Phone no.">
                        </div>
                    </div>
                    <div class="cf-title">Delievery Info</div>
                    <div class="row shipping-btns">
                        <div class="col-6">
                            <h4>Standard</h4>
                        </div>
                        <div class="col-6">
                            <div class="cf-radio-btns">
                                <div class="cfr-item">
                                    <input type="radio" name="shipping" id="ship-1">
                                    <label for="ship-1">Free</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h4>Next day delievery </h4>
                        </div>
                        <div class="col-6">
                            <div class="cf-radio-btns">
                                <div class="cfr-item">
                                    <input type="radio" name="shipping" id="ship-2">
                                    <label for="ship-2">$3.45</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cf-title">Payment</div>
                    <ul class="payment-list">
                        <li>Paypal<a href="#"><img src="img/paypal.png" alt=""></a></li>
                        <li>Credit / Debit card<a href="#"><img src="img/mastercart.png" alt=""></a></li>
                        <li>Pay when you get the package</li>
                    </ul>
                    <button class="site-btn submit-order-btn">Place Order</button>
                    <input type="hidden" id="checkId" name="chekoutId">

                </form>
                <br>

            </div>
            <div class="col-lg-4 order-1 order-lg-2">
                <div class="checkout-cart">
                    <h3>Your Cart</h3>
                    <ul class="product-list">
                        @foreach($checkouts as $checkout)
                        <li>
                            <input type="hidden" id="checkoutId" value="{{$checkout->id}}">
                            <div class="pl-thumb"><img src="{{asset('uploads/employee/'.$checkout->cart->picture->image)}}" alt="" width="40px" height="70px"></div>
                            <h6>{{$checkout->cart->picture->desc}}</h6>
                            <p>Ksh: {{$checkout->cart->picture->price}}</p>
                        </li>
                            @endforeach
                    </ul>
                    <ul class="price-list">
                        <li>Sub Total<span>Ksh: {{$sum}}</span></li>
                        <li>Shipping<span>free</span></li>
                        <li class="total">Total<span>Ksh: {{$sum}}</span></li>
                    </ul>
                </div>
                <br>
                <a href="{{url('cart')}}" class="site-btn">EDIT CART</a>

            </div>
        </div>
    </div>
</section>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
    $(document).ready(function () {
        var $max = $('#checkoutId').val();
        $('#checkId').val($max);


    });
</script>

@include('Partials._footer')
