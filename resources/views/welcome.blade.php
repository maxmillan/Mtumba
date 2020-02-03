@include('Partials._header')
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                        <span>New Arrivals</span>
                        <h2>denim jackets</h2>
                        <a href="#" class="site-btn sb-line">VIEW</a>
                        <a href="{{url('cart')}}" class="site-btn sb-white">ADD TO CART</a>
                    </div>
                </div>
                <div class="offer-card text-white">
                    <span>from</span>
                    <h2>$29</h2>
                    <p>SHOP NOW</p>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                        <span>New Arrivals</span>
                        <h2>denim jackets</h2>
                        <a href="#" class="site-btn sb-line">VIEW</a>
                        <a href="#" class="site-btn sb-white">ADD TO CART</a>
                    </div>
                </div>
                <div class="offer-card text-white">
                    <span>from</span>
                    <h2>$29</h2>
                    <p>SHOP NOW</p>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                        <span>New Arrivals</span>
                        <h2>denim jackets</h2>
                        <a href="#" class="site-btn sb-line">VIEW</a>
                        <a href="#" class="site-btn sb-white">ADD TO CART</a>
                    </div>
                </div>
                <div class="offer-card text-white">
                    <span>from</span>
                    <h2>$29</h2>
                    <p>SHOP NOW</p>
                </div>
            </div>
        </div>

    </div>

</section>


<section class="features-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="img/icons/1.png" alt="#">
                    </div>
                    <h2>Fast Secure Payments</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="img/icons/2.png" alt="#">
                    </div>
                    <h2>Premium Products</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="img/icons/3.png" alt="#">
                    </div>
                    <h2>Free & fast Delivery</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

<section class="product-filter-section">
    <div class="container">
        <div class="section-title">
            <h2>BROWSE TOP SELLING PRODUCTS</h2>
        </div>
        <ul class="product-filter-menu">
            <li><a href="#">TOPS</a></li>
            <li><a href="#">JUMPSUITS</a></li>
            <li><a href="#">LINGERIE</a></li>
            <li><a href="#">JEANS</a></li>
            <li><a href="#">DRESSES</a></li>
            <li><a href="#">COATS</a></li>
            <li><a href="#">JUMPERS</a></li>
            <li><a href="#">LEGGINGS</a></li>
        </ul>
        <div class="row">
            @foreach($pics as $pic)
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <a href="{{url('products',$pic->id)}}">
                            <img src="{{asset('uploads/employee/'. $pic->image)}}" alt="img" width="500px" height="400px">
                        </a>
                            <div class="pi-links">
                                <input type="hidden" value="{{$pic->id}}">
                                <a href="{{url('addCart')}} " class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>Ksh: {{$pic->price}}</h6>
                            <p>{{$pic->desc}}</p>
                        </div>
                    </div>

            </div>

                @endforeach

        </div>
        <div class="text-center pt-5">
            <a href="{{url('category')}}"><button class="site-btn sb-line sb-dark">LOAD MORE</button></a>
        </div>
    </div>
</section>

<section class="banner-section">
    <div class="container">
        <div class="banner set-bg" data-setbg="img/banner-bg.jpg">
            <div class="tag-new">NEW</div>
            <span>New Arrivals</span>
            <h2>STRIPED SHIRTS</h2>
            <a href="#" class="site-btn">SHOP NOW</a>
        </div>
    </div>
</section>

@include('Partials._footer')
