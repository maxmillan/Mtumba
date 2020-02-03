@include('Partials._header')
<div class="page-top-info">
    <div class="container">
        <h4>Your cart</h4>
        <div class="site-pagination">
            <a href="#">Home</a> /
            <a href="#">Your cart</a>
        </div>
    </div>
</div>


<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>Your Cart</h3>
                    <div class="cart-table-warp">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-th"><b>Product</b></th>
                                <th class="quy-th"><b>Quantity</b></th>
                                <th class="size-th"><b>SizeSize</b></th>
                                <th class="total-th"><b>Price</b></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($carts as $cart)

                            <tr>
                                <td class="product-col">
                                    <img src="{{asset('uploads/employee/'.$cart->picture->image)}}" alt="img" width="60px" height="60px">
                                    <div class="pc-title">
                                        <h4>{{$cart->picture->desc}}</h4>
                                        <p>Ksh: {{$cart->picture->price}}</p>
                                    </div>
                                </td>
                                <td class="quy-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="{{$cart->quantity}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="size-col"><h4>Size {{$cart->picture->size}}</h4></td>
                                <td class="total-col"><h4>Ksh: {{$cart->picture->price}}</h4></td>
                                <form action="{{'cartDelete/'.$cart->id}}" method="POST">
                                    @csrf
                                    <td><button type="submit" class="btn btn-danger a-btn-slide-text">x</button></td>
                                </form>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="total-cost">
                        <h6>Total <span>Ksh: {{$sum}}</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-right">
                <form class="promo-code-form">
                    <input type="text" placeholder="Enter promo code">
                    <button>Submit</button>
                </form>
                <a href="{{url('checkout')}}" class="site-btn">Proceed to checkout</a>
                <a href="{{url('category')}}" class="site-btn sb-dark">Continue shopping</a>
            </div>
        </div>
    </div>
</section>


<section class="related-product-section">
    <div class="container">
        <div class="section-title text-uppercase">
            <h2>Continue Shopping</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img src="img/product/2.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Black and White Stripes Dress</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="img/product/5.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="img/product/9.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="img/product/1.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('Partials._footer')

