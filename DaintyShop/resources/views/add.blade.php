@extends('navbar')
@section('title', 'Add')

@section('content')
    <div class="form-container" style="height: 115vh">
        <h3>Add Product</h3>
        <form action="/add" method="POST" style="margin-top: 20px; margin-botton:20px; width:100%;" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="menu">
                <label for="" style="display:block; margin-bottom:5px; margin-top:20px;">Name</label>
                <input type="text" name="name" style="width: 100%">
            </div>

            <div class="menu">
                <label for="" style="display:block; margin-bottom:5px;">Category</label>
                <select name="category" id="category">
                    @foreach ($categories as $c)
                        <option value="{{$c->name}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Detail</label>
                <textarea name="detail" cols="66" rows="5"></textarea>
            </div>

            <div class="menu">
                <label for="" style="display:block; margin-bottom:5px; margin-top:20px;">Price</label>
                <input type="text" name="price" style="width: 100%">
            </div>

            <div class="menu">
                <label for="" style="display:block; margin-bottom:5px;">Photo</label>
                <input type="file" name="image">
            </div>

            <button type="submit" class="btn btn-colors" style="margin-top: 30px">Add</button>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
@endsection