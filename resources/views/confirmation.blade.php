@include('Partials._header')

<input type='button' id='btn' value='Print' onclick='printDiv();'>

<div class="container" id="DivIdToPrint">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <img src="{{asset('img/logo.png')}}">
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Invoice #1</p>
                            <p class="text-muted">Due to: 4 Dec, 2019</p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Client Information</p>
                            <p class="mb-1">{{auth()->user()->first}} {{auth()->user()->last}}</p>
                            <p>{{auth()->user()->phone}}</p>
                            <p class="mb-1">Berlin, Germany</p>
                            <p class="mb-1">6781 45P</p>
                        </div>


                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="border-0 text-uppercase small font-weight-bold">Order Id</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#{{$confirmOrders->id}}</td>
                                    <td>{{$confirmOrders->picture_desc}}</td>
                                    <td>{{$confirmOrders->picture_quantity}}</td>
                                    <td>Ksh: {{$confirmOrders->picture_price}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Grand Total</div>
                            <div class="h2 font-weight-light">Ksh: {{$confirmOrders->picture_price}}</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Discount</div>
                            <div class="h2 font-weight-light">0%</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Sub - Total amount</div>
                            <div class="h2 font-weight-light">Ksh: {{$confirmOrders->picture_price}}</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div>

</div>

<script>
    function printDiv()
    {

        var divToPrint=document.getElementById('DivIdToPrint');

        var newWin=window.open('','Print-Window');

        newWin.document.open();

        newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

        newWin.document.close();

    setTimeout(function(){newWin.close();},10);

    }
</script>
@include('Partials._footer')
