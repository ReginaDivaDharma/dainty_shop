@extends('navbar')
@section('title', 'Home')

@section('content')
{{-- <body> --}}

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{session('success')}}
        </div> 
    @elseif(session()->has('successAdd'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{session('successAdd')}}
        </div> 
    @elseif(session()->has('successUpdate'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{session('successUpdate')}}
        </div> 
    @elseif(session()->has('successDelete'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{session('successDelete')}}
        </div> 
    @elseif(session()->has('successCart'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{session('successCart')}}
        </div> 
    @elseif(session()->has('successPurchase'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{session('successPurchase')}}
        </div> 
    @endif

    @php
        $temp = 0;   
    @endphp

    {{-- <form action="/">
        <div class="input-group">
            <input type="search" class="form-control" placeholder="What are you looking for?" aria-label="What are you looking for?" aria-describedby="basic-addon2" id="search" name="search">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form> --}}

    <div class="prods">
        <div class="row" style="justify-content:space-evenly">
            @foreach ($products as $p)
                @if ($p->category->name == 'Make up')
                    @while ($temp == 0)
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="catName text-nav" style="margin-top: 20px"><h1>Make Up</h1></div>
                            {{-- <div class="viewAll"><a href="/category/1" class="btn btn-primary">View All</a></div> --}}
                        </div>
                        @php
                            $temp = 1;
                        @endphp
                    @endwhile
                    <div class="card" style="width: 18rem; margin-top:20px; border-color:#292A5E;">
                        <img class="card-img-top" src="{{asset('/storage/image/' . $p->image)}}" alt="Product Image">
                            <div class="card-body">
                                <h6 class="card-title">{{$p->name}}</h6>
                                <p class="card-text">IDR {{$p->price}}</p>
                                <a href="{{route('products.ProductDetail', $p->id)}}" class="stretched-link"></a>
                            </div>
                    </div> 
                @endif
            @endforeach
        </div>
    </div>

    <div class="prods">
        <div class="row" style="justify-content:space-evenly">
            @foreach ($products as $p)
                @if ($p->category->name == 'Skin care')
                    @while ($temp == 1)
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="catName text-nav" style="margin-top: 50px"><h1>Skin Care</h1></div>
                            {{-- <div class="viewAll"><a href="/category/2" class="btn btn-primary">View All</a></div> --}}
                        </div>
                        @php
                            $temp = 2;
                        @endphp
                    @endwhile
                    <div class="card" style="width: 18rem; margin-top:20px; border-color:#292A5E;">
                        <img class="card-img-top" src="{{ asset('/storage/image/' . $p->image) }}" alt="Product Image">
                            <div class="card-body">
                                <h6 class="card-title">{{$p->name}}</h6>
                                <p class="card-text">IDR {{$p->price}}</p>
                                <a href="{{route('products.ProductDetail', $p->id)}}" class="stretched-link"></a>
                            </div>
                    </div> 
                @endif
            @endforeach
        </div>
    </div>

    <div class="prods">
        <div class="row" style="justify-content:space-evenly">
            @foreach ($products as $p)
                @if ($p->category->name == 'Body care')
                    @while ($temp == 2)
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="catName text-nav" style="margin-top: 50px"><h1>Body Care</h1></div>
                                {{-- <div class="viewAll"><a href="/category/3" class="btn btn-primary">View All</a></div> --}}
                            </div>
                            @php
                                $temp = 3;
                            @endphp
                    @endwhile
                    <div class="card" style="width: 18rem;margin-top:25px; border-color:#292A5E; margin-bottom:50px">
                        <img class="card-img-top" src="{{asset('/storage/image/' . $p->image)}}" alt="Product Image">
                            <div class="card-body">
                                <h6 class="card-title">{{$p->name}}</h6>
                                <p class="card-text">IDR {{$p->price}}</p>
                                <a href="{{route('products.ProductDetail', $p->id)}}" class="stretched-link"></a>
                            </div>
                    </div> 
                @endif
            @endforeach
        </div>
    </div>
{{-- </body> --}}
@endsection