@extends('main.layout')
@section('content')
<header class="masthead text-white text-center" style="background: rgb(2,0,36); background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(19,77,128,1) 0%, rgba(124,129,167,1) 48%, rgba(4,18,128,1) 100%);;padding-top: 32px;padding-bottom: 32px;">
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
<div class="contianer p-4 bg-white">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="roms-tab" data-toggle="tab" href="#roms" role="tab" aria-controls="roms" aria-selected="true">Roms</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="kernel-tab" data-toggle="tab" href="#kernel" role="tab" aria-controls="kernel" aria-selected="false">Kernerls</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="roms" role="tabpanel" aria-labelledby="roms-tab"> @include('phones.roms') </div>
        <div class="tab-pane fade" id="kernel" role="tabpanel" aria-labelledby="kernel-tab">Kernel is it.</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
      </div>
</div>
@endsection

