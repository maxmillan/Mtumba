@include('vendorPartials._header')
<div class="container clearfix">
    <h1 id="logo" style="background: cornflowerblue">
        My Products
    </h1>
</div>
@foreach($sellerProducts as $sellerProduct)
<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
    <img src="{{asset('uploads/employee/'. $sellerProduct->image)}}" class="img-rounded" alt="Cinque Terre" style="width:200px;height:200px">
    <p class="text-success"><b>Name</b>: {{$sellerProduct->desc}}</p>
    <p class="text-success"><b>Size</b>: {{$sellerProduct->size}}</p>
    <p class="text-success"><b>Price</b>Ksh: {{$sellerProduct->price}}</p>
    <p class="text-success"><b>Quantity</b>: {{$sellerProduct->quantity}}</p>

</div>
@endforeach
@include('vendorPartials._footer')
