@extends('main.layout')
@section('content')
<header class="masthead text-white text-center" style="background: #104370;padding-top: 32px;padding-bottom: 32px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <img height="100" style="max-width: 250px" src="{{$roms->image_url}}"  alt="">
            </div>
          
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <h2 class="text-center">{{$roms->name}}</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            </div>
        </div>
    </div>
</header>
<div class="card mx-2 my-3">
  <div class="card-body">
   <div class="text-center">
    <div>
      <strong>For:</strong> {{$roms->phone->name}}
      
      <strong class="pl-2">Version: {{$roms->version}}</strong>
    </div>
    <div>
      <strong>Developer: {{$roms->developer}}</strong>
      <strong class="pl-2">Android Version: {{$roms->android_version}}</strong>
    </div>
   <hr>
    <div>
      <strong> Published Date: {{$roms->date}}</strong>
      <br>
      <a href="{{$roms->link}}" class="btn btn-success">Visit Thread/ Download</a>
    </div>
   </div>
  </div>
</div>

@endsection

