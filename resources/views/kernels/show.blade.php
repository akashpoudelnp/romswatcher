@extends('main.layout')
@section('content')
<header class="masthead text-white text-center" style="background: url('{{$kernels->image_url}}') center center / cover no-repeat; min-height: 100%; z-index: 1; height: 193px; padding-top: 32px;padding-bottom: 32px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row" style="background-color: rgba(22, 22, 22, 0.507); ">
            
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <img height="100" style="max-width: 250px" src="{{$kernels->image_url}}"  alt="">
            </div>
          
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <h2 class="text-center ">{{$kernels->name}}</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            </div>
        </div>
    </div>
</header>
  <div class="card mx-auto m-4">
           <div class="card-body p-8">
            <table class="table table-border">
              <tr>
                <td><b>For</b></td>
                <td> {{$kernels->phone->name}}</td>
              </tr>
              <tr>
                <td> <b>Version: </b> </td>
                <td>{{$kernels->version}}</td>
              </tr>
              <tr>
                <td> <b>Android Version: </b> </td>
                <td>{{$kernels->version}}</td>
              </tr>
                  <tr>  
                    <td colspan="1"><b>Added On:</b></td>
                    <td> {{$kernels->date}}</td>
                  </tr>
                <tr>
                  <td colspan="1"> <b>Developer: </b> </td>
                  <td>{{$kernels->developer}}</td>
                </tr>
                <tr>
                  <td colspan="3">                  <a href="{{$kernels->link}}" class="btn btn-success btn-sm">Download / Visit Thread</a>
                  </td>
                </tr>
              </table>
           </div>
  </div>


@endsection

