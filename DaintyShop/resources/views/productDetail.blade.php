@extends('navbar')
@section('title', 'Product Detail')

@section('content')
<div class="prodDetail" style="display:flex; justify-content:center; align-items:center; margin:20px auto;">
  <div class="card mb-3" style="max-width: 620px;">
    <div class="row g-0">
      <div class="prod-detail-img col-md-4">
        <img src="{{ asset('/storage/image/' . $products->image) }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h6 class="card-title">{{$products->name}}</h6>
          <dl class="row">
            <dt class="col-sm-3">Detail</dt>
            <dd class="col-sm-9">{{$products->detail}}</dd>
          
            <dt class="col-sm-3">Price</dt>
            <dd class="col-sm-9"><p>{{$products->price}}</p></dd>

            @auth
                @if(Auth::user()->role == 'User')
                <form action="/addToCart" method="POST" style="width:100%;" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    <label for="qty" class="col-sm-2 col-form-label" style="font-weight:bold">Qty</label>
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                      <input type="hidden" class="form-control" name="product_id" value="{{$products->id}}">
                      <input type="text" class="form-control" name="quantity" id="quantity" placeholder="">
                    </div>
                  </div>
                  <button type="submit" class="btn" style="margin-top: 5px; width:120px; background-color: #292A5E; color:white;">Add to Cart</button>
                </form>
                @endif  
            @endauth
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection