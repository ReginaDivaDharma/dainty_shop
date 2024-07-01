@extends('navbar')

@section('title', 'Profile')

@section('content')
    <div class="form-container" style="height: 90vh">
        <div class="title mt-10"><h2>Profile</h2></div>
        <form action="/profile" style="width: 100%" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Name</label>
                <input type="text" value="{{auth()->user()->name}}" name="name" style="width: 100%">
            </div>

            <div class="menu">
                <label for="" style="display:block; margin-bottom:5px;">Email</label>
                <input type="text" value="{{auth()->user()->email}}" name="name" style="width: 100%">
            </div>

            {{-- <div class="menu">
                <label for="" style="display:block; margin-bottom:5px; margin-top:20px;">Gender</label>
                <input type="text" value="{{auth()->user()->gender}}" name="price" style="width: 100%">
            </div>

            <div class="menu">
                <label for="" style="display:block; margin-bottom:5px; margin-top:20px;">Date of Birth</label>
                <input type="text" value="{{auth()->user()->dob}}" name="price" style="width: 100%">
            </div>

            <div class="menu">
                <label for="" style="display:block; margin-bottom:5px; margin-top:20px;">Country</label>
                <input type="text" value="{{auth()->user()->country}}" name="price" style="width: 100%"> --}}
            </div>
        </form>
    </div>
@endsection