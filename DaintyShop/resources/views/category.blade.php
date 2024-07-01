@extends('navbar')
@section('title', 'Category')

@section('content')
    @php
        $temp = 0;   
    @endphp

    <div style="margin-top: 10px">
        <div class="row" style="justify-content:space-evenly">
            @foreach ($products1 as $cp)
                @if ($cp->category_id == $categories->id)
                 
                    @while ($temp == 0)
                    <div class="d-flex flex-column justify-content-center align-items-center text-nav">
                        <h1 style="margin-top: 20px">Make Up</h1>
                        {{$products1->links()}}
                    </div>
                        @php
                            $temp = 1;
                        @endphp
                    @endwhile

                    <div class="card" style="width: 18rem;margin-top:25px">
                        <img class="card-img-top" src="{{ asset('/storage/image/' . $cp->image) }}" alt="Movie Image">
                        <div class="card-body">
                            <h6 class="card-title">{{$cp->name}}</h6>
                            <p class="card-text">IDR {{$cp->price}}</p>
                            <a href="{{route('products.ProductDetail', $cp->id)}}" class="stretched-link"></a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div style="margin-top: 10px">
        <div class="row" style="justify-content:space-evenly">
            @foreach ($products2 as $cp)
                @if ($cp->category_id == $categories->id)

                @while ($temp == 0)
                    <div class="d-flex flex-column justify-content-center align-items-center text-nav">
                        <h1 style="margin-top: 20px">Skin care</h1>
                        {{$products2->links()}}
                    </div>
                    @php
                        $temp = 2;
                    @endphp
                @endwhile

                    <div class="card" style="width: 18rem;margin-top:25px">
                        <img class="card-img-top" src="{{ asset('/storage/image/' . $cp->image) }}" alt="Movie Image">
                        <div class="card-body">
                            <h6 class="card-title">{{$cp->name}}</h6>
                            <p class="card-text">IDR {{$cp->price}}</p>
                            <a href="{{route('products.ProductDetail', $cp->id)}}" class="stretched-link"></a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div style="margin-top: 10px">
        <div class="row" style="justify-content:space-evenly">
            @foreach ($products3 as $cp)
                @if ($cp->category_id == $categories->id)

                @while ($temp == 0)
                    <div class="d-flex flex-column justify-content-center align-items-center text-nav">
                        <h1 style="margin-top: 20px">Body Care</h1>
                        {{$products3->links()}}
                    </div>
                    @php
                        $temp = 3;
                    @endphp
                @endwhile

                    <div class="card" style="width: 18rem;margin-top:25px">
                        <img class="card-img-top" src="{{ asset('/storage/image/' . $cp->image) }}" alt="Movie Image">
                        <div class="card-body">
                            <h6 class="card-title">{{$cp->name}}</h6>
                            <p class="card-text">IDR {{$cp->price}}</p>
                            <a href="{{route('products.ProductDetail', $cp->id)}}" class="stretched-link"></a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection