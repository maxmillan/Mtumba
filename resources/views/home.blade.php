@include('Partials._header')
Customer
<form action="{{route('logout')}}" method="POST">
    @csrf
   <button type="submit">logout</button>

</form>
@include('Partials._footer')
