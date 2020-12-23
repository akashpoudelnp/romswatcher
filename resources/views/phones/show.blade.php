@extends('main.layout')
@section('content')
<header class="masthead text-white text-center" style="background: url('{{$phone->image_url}}') center center / cover no-repeat; min-height: 100%; z-index: 1; height: 193px;padding-top: 32px; padding-bottom: 32px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row" style="background-color:rgba(0, 0, 0, 0.308);">
            
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <img height="100" src="{{$phone->image_url}}" alt="">
            </div>
          
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <h2 class="text-center">{{$phone->name}}</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            </div>
        </div>
    </div>
</header>
<div class="wrapper m-2">
  <div class="card bg-dark text-white mt-2 p-2">
    <div class="card-header">
      <h3 class="card-title">Roms</h3>
    </div>
     <div class="card-body">
      <ul class="list-unstyled">
        @forelse ($roms as $rom)
        <li class="media py-2 shadow mb-2 mt-2" style="background-color: rgba(0, 0, 0, 0.308); border-radius:10px;">
       <a href="{{ url('roms/'.$rom->id, []) }}">  <img src="{{$rom->image_url}}" height="64" class="mr-3" style=" max-width: 128px;" alt="..."> </a>
         <div class="media-body">
           <h5 class="mt-0 mb-1">{{$rom->name}}</h5>
              For: {{$phone->name}}, Version: {{$rom->verison}}, Android Version: {{$rom->android_version}}
       </div>
       </li> 
        @empty
           <li class="media">No Roms Found</li> 
        @endforelse
         
         
       </ul>
     </div>
</div>
</div>
@endsection

