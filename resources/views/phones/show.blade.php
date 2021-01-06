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
        
      </div>
    </div>

    <div id="accordion">
      @foreach ($roms as $andoid_version => $roms_list)
  
      
      <div class="card bg-dark text-white">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse{{$andoid_version}}" aria-expanded="true" aria-controls="collapse{{$andoid_version}}">
             <i class="fa fa-plus"></i> &nbsp; Android Version {{$andoid_version}}
            </button>
          </h5>
        </div>
    
        
            <ul class="list-unstyled">
              @forelse ($roms_list as $rom)
              <div id="collapse{{$rom->android_version}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
              <li class="media p-2 shadow mb-2 mt-2" style="background-color: rgba(0, 0, 0, 0.308); border-radius:10px;">
            <a href="{{ url('roms/'.$rom->id, []) }}">  <img src="{{$rom->image_url}}" height="64" class="mr-3" style=" max-width: 128px;" alt="..."> </a>
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">{{$rom->name}} V:{{$rom->version}}</h5>
                        For: {{$phone->name}}, Version: {{$rom->verison}}, Android Version: {{$rom->android_version}}
                  </div>
            </li> 
          </div>
        </div>
              @empty
                <li class="media">No Roms Found</li> 
              @endforelse
              
              
            </ul>
         
      </div>
      @endforeach
    </div>
</div>
@endsection

