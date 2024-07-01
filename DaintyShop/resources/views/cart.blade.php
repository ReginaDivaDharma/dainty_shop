@extends('navbar')
@section('title', 'Cart')

@section('content')
    @php
        $price = 0;
        $totalPrice = 0;
    @endphp
    @foreach ($carts as $c)
    @if($c->user_id == $users->id)
    <div class="prodDetail" style="display:flex; justify-content:center; align-items:center; margin:10px auto;">
        <div class="card mb-3" style="max-width: 620px;">
          <div class="row g-0">
            <div class="prod-detail-img col-md-4">
            <img src="{{ asset('/storage/image/' . $c->image) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="card-title">{{$c->name}}</h6>
                <h6 class="card-title">Quantity: {{$c->quantity}}</h6>
                <h6 class="card-title">Total Price: IDR {{$price = $c->quantity * $c->price}}</h6>
                @php
                   $totalPrice = $totalPrice + $price;
                @endphp
                <a href="/deleteCart/{{$c->id}}" class="btn btn-danger">Delete</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    @endforeach

    <footer class="text-center text-lg-start">
      <div class="d-flex justify-content-center align-items-center text-center p-4 justify-content-around" style="background-color: white;">
        @if ($totalPrice == 0)
            <div class="purchase justify-content-center">No Cart</div>
        @else
          <div class="totPrice"><h6>Total Price: IDR {{$totalPrice}}</h6></div>
          <div class="purchase"><a href="/purchase/{{Auth::user()->id}}" class="btn" style="background-color: #292A5E; color:white;">Purchase</a></div>
        @endif
      </div>
  </footer>
@endsection