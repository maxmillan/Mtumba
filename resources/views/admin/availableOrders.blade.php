@include('adminPartials._header')

<div class="container clearfix">
    <h1 id="logo" style="background: cornflowerblue">
        Seller Available Orders
    </h1>
</div>
@foreach($availableOrders as $availableOrder)
<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
    <img src="{{asset('uploads/employee/'.$availableOrder->picture->image)}}" class="img-rounded" alt="Cinque Terre" style="height:200px;width:200px">
    <p class="text-success"><b>Name</b>: {{$availableOrder->picture->desc}}</p>
    <p class="text-success"><b>Size</b>: {{$availableOrder->picture->size}}</p>
    <p class="text-success"><b>Quantity</b>: {{$availableOrder->picture->quantity}}</p>
    <p class="text-success"><b>Price</b>: {{$availableOrder->picture->price}}</p>
    <p class="text-success"><b>Customer</b>: {{$availableOrder->user->first}} {{$availableOrder->user->last}}</p>
    <p class="text-success"><b>Customer Phone</b>: {{$availableOrder->user->phone}}</p>
    <p class="text-success"><b>Seller</b>: {{$availableOrder->seller->first}} {{$availableOrder->seller->last}}</p>
    <p class="text-success"><b>Seller Phone</b>: {{$availableOrder->seller->phone}}</p>

</div>
    <input type="hidden" id="getOrderId" value="{{$availableOrder->id}}">
    <input type="hidden" id="getUserId" value="{{$availableOrder->user_id}}">
    <input type="hidden" id="getPictureId" value="{{$availableOrder->picture_id}}">
@endforeach


<form action="{{route('deleteOrder')}}" method="post">
    @csrf
    <input type="hidden" name="orderId" id="availableOrderId">
    <input type="hidden" name="userId" id="availableUserId">
    <input type="hidden" name="pictureId" id="availablePictureId">
<button class="btn btn-success" type="submit">Complete Order</button>
</form>
<button class="btn btn-danger">Cancel Order</button>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
    $(document).ready(function () {
        var $max = $('#getOrderId').val();
        $('#availableOrderId').val($max);

        var $millan = $('#getUserId').val();
        $('#availableUserId').val($millan);

        var $ndegwa = $('#getPictureId').val();
        $('#availablePictureId').val($ndegwa);


    });
</script>

@include('adminPartials._footer')
