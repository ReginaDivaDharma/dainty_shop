@extends('navbar')
@section('title', 'Manage Product')

@section('content')
<body>
    <div class="searchAdd" style="display: flex; justify-content:center; align-items:center;">
        <form action="/manageSearch">
            <div class="input-group mb-3">
                <input type="search" style="border-color: #292A5E;" class="form-control" placeholder="What are you looking for?" aria-label="What are you looking for?" aria-describedby="basic-addon2" id="search" name="search">
                <div class="input-group-append">
                  <button class="btn btn-colors" type="submit">Search</button>
                </div>
            </div>
        </form>
        <div class="butt" style="margin-left: 20px">
            <a href="/add" class="btn" style="background-color: #292A5E; color:white;">Add Product</a>
        </div>
    </div>
    
    @foreach ($products as $p)
    <div class="prodDetail" style="display:flex; justify-content:center; align-items:center; margin:10px auto;">
        <div class="card mb-3" style="max-width: 620px;">
          <div class="row g-0">
            <div class="prod-detail-img col-md-4">
              <img src="{{ asset('/storage/image/' . $p->image) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="card-title">{{$p->name}}</h6>
                <a href="/update/{{$p->id}}" class="btn text-white btn-warning"><i class="bi bi-pencil-square"></i></a>
                <a href="/delete/{{$p->id}}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach

    <div class="d-flex justify-content-center">
        {{$products->links()}}
    </div>
</body>  
@endsection