@include('Partials._header')
<div class="page-top-info">
    <div class="container">
        <h4>Category PAge</h4>
        <div class="site-pagination">
            <a href="#">Home</a> /
            <a href="#">Shop</a>
        </div>
    </div>
</div>


<section class="product-section">
    <div class="container">
        <div class="back-link">
            <a href="category.html"> &lt;&lt; Back to Category</a>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="product-pic-zoom">
                    <img class="product-big-img" src="{{asset('uploads/employee/'. $desc->image)}}" alt="img" height="500px" width="700px">
                </div>
                <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                    <div class="product-thumbs-track">
                        <div class="pt active" data-imgbigurl="{{asset('uploads/employee/'. $desc->image)}}"><img src="{{asset('uploads/employee/'. $desc->image)}}" alt=""></div>
                        <div class="pt" data-imgbigurl="{{asset('uploads/employee/'. $desc->image1)}}"><img src="{{asset('uploads/employee/'. $desc->image1)}}" alt=""></div>
                        <div class="pt" data-imgbigurl="{{asset('uploads/employee/'. $desc->image2)}}"><img src="{{asset('uploads/employee/'. $desc->image2)}}" alt=""></div>
                        <div class="pt" data-imgbigurl="{{asset('uploads/employee/'. $desc->image3)}}"><img src="{{asset('uploads/employee/'. $desc->image3)}}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 product-details">
                <h2 class="p-title">{{$desc->desc}}</h2>
                <h3 class="p-price"> Ksh: {{$desc->price}}</h3>
                <h4 class="p-stock">Available: <span>In Stock</span></h4>
                <div class="p-rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o fa-fade"></i>
                </div>
                <div class="p-review">
                    <a href="#">3 reviews</a>|<a href="#">Add your review</a>
                </div>
                <input type="hidden" id="getSize" value="{{$desc->size}}">
                @if($desc->product_id ==3)
{{--                shoe sizes--}}
                <div class="fw-size-choose">
                    <p>Size</p>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="size37">
                        <label for="xs-size">37</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="size38" >
                        <label for="s-size">38</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="size39" >
                        <label for="m-size" style="text-align: center">39</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="size40">
                        <label for="l-size">40</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="size41">
                        <label for="xl-size">41</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="size42">
                        <label for="xxl-size">42</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="size43">
                        <label for="xxl-size">43</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="size44">
                        <label for="xxl-size">44</label>
                    </div>
                </div>
                @else
{{--                clothes sizes--}}
                <div class="fw-size-choose">
                        <p>Size</p>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="XS">
                            <label for="xs-size">XS</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="S">
                            <label for="s-size">S</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="M">
                            <label for="m-size" style="text-align: center">M</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="L">
                            <label for="l-size">L</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="XL" >
                            <label for="xl-size">XL</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="XXL">
                            <label for="xxl-size">XXL</label>
                        </div>
                    </div>
                @endif

                <form action="{{url('addCart')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="quantity">
                    <p>Quantity</p>
                    <div class="pro-qty"><input type="number" name="quantity" value="1"></div>
                </div>
                    <input type="hidden" name="picId" value="{{$desc->id}}">
                    <button type="submit" class="site-btn">SHOP NOW</button>
                </form>
                <div id="accordion" class="accordion-area">
                    <div class="panel">
                        <div class="panel-header" id="headingOne">
                            <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                <p>Approx length 66cm/26" (Based on a UK size 8 sample)</p>
                                <p>Mixed fibres</p>
                                <p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingTwo">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="panel-body">
                                <img src="{{asset('img/cards.png')}}" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingThree">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="panel-body">
                                <h4>7 Days Returns</h4>
                                <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-sharing">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="related-product-section">
    <div class="container">
        <div class="section-title">
            <h2>RELATED PRODUCTS</h2>
        </div>
        <div class="product-slider owl-carousel">
            @foreach($productRelateds as $productRelated)
            <div class="product-item">
                <div class="pi-pic">
                    <a href="{{url('products',$productRelated->id)}}">
                        <img src="{{asset('uploads/employee/'. $productRelated->image)}}" alt="">

                    </a>
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>Ksh: {{$productRelated->price}}</h6>
                    <p>{{$productRelated->desc}} </p>
                </div>
            </div>
                @endforeach

        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        var $getSize = $('#getSize').val();

        switch ($getSize){
            case "37":
                $('#size37').attr("checked","checked");
                break;
            case "38":
                $('#size38').attr("checked","checked");
                break;
            case "39":
                $('#size39').attr("checked","checked");
                break;
            case "40":
                $('#size40').attr("checked","checked");
                break;
            case "41":
                $('#size41').attr("checked","checked");
                break;
            case "42":
                $('#size42').attr("checked","checked");
                break;
            case "43":
                $('#size43').attr("checked","checked");
                break;
            case "44":
                $('#size44').attr("checked","checked");
                break;
            case "XS":
                $('#XS').attr("checked","checked");
                break;
            case "S":
                $('#S').attr("checked","checked");
                break;
            case "M":
                $('#M').attr("checked","checked");
                break;
            case "L":
                $('#L').attr("checked","checked");
                break;
            case "XL":
                $('#XL').attr("checked","checked");
                break;
            case "XXL":
                $('#XXL').attr("checked","checked");
                break;
        }

    });
</script>
@include('Partials._footer')

