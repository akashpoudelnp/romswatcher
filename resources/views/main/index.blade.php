@extends('main.layout')

@section('content')
<header class="masthead text-white text-center" style="background: #343a40;padding-top: 66px;padding-bottom: 66px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                @csrf
                <input class="typeahead form-control form-control-lg" type="text" placeholder="Type the device name" style="background: #636363;color: rgb(12,70,128);">
            </div>
        </div>
    </div>
</header>
<div class="features-boxed" style="background: #343a40;">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="padding-top: 30px;margin-bottom: 0px;color: rgb(205,208,211);">Featured Devices</h2>
        </div>
        <div class="row justify-content-center features">
           @forelse ($phones as $phone)
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="background: rgb(43,48,52);">
                        <a href="{{ url('phones/'.$phone->id) }}"><img class="rounded img-fluid responsive" src="{{$phone->image_url}}" style="width:120px; height:120px;padding-bottom: 22px;"></a>
                        <h3 class="name" style="color: rgb(187,187,187);">{{$phone->name}}</h3>
                        <p class="description" style="color: rgb(153,153,153);">Code Name: {{$phone->code_name}}</p>
                    </div>
                </div> 
           @empty
               No Phones
           @endforelse
           
            
           
        </div>
    </div>
</div>
<div class="features-boxed" style="background: #343a40;">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="padding-top: 30px;margin-bottom: 0px;color: rgb(205,208,211);">Recent Additions</h2>
        </div>
        <div class="list-group ">
           
           @forelse ($roms as $rom)
           <a href="/roms/{{$rom->id}}" class="list-group-item list-group-item-secondary mb-1 mt-1 list-group-item-action ">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">{{$rom->name}} (V{{$rom->version}})</h5>
              <small>{{$rom->created_at->diffForHumans()}}</small>
            </div>
            <p class="mb-1">{{$rom->description}}</p>
            <small>Android Version:<b>{{$rom->android_version}}</b> | Device:<i>{{$rom->phone->name}}</i></small>
          </a> 
           @empty
               
           @endforelse
            
           
          </div>
    </div>
</div>
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        },
        highlighter: function (item, data) {
            var parts = item.split('#'),
                html ='<table>';
                html +=  '<tr>';
                html +=  '<td> <img src="'+data.image_url+'" height="44px;" width="65px;"> </td>';
                html +=  '<td>  <span class="pl-2">'+data.name+'</span></td>';
                html +=  '</tr> ';  
                html +='</table>';

            return html;
        },
        afterSelect: function (data) {
            let url= 'phones/'+data.id;
                window.location.replace(url);
            }
    });
</script>
@endsection
