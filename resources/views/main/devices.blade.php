@extends('main.layout')

@section('content')
<header class="masthead text-white text-center mb-2" style="background: #343a40;padding-top: 66px;padding-bottom: 66px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                @csrf
                <h4>Devices</h4>
                <input class="typeahead form-control form-control-lg" type="text" placeholder="Search the device name" style="background: #636363;color: rgb(12,70,128);">
            </div>
        </div>
    </div>
</header>
@foreach ($phones as $manufacturer => $phones_list)
    

<div id="accordion" class="features-boxed" style="background: #343a40;">
    <div class="container">
        <div class="intro shadow-sm">
            <div class="d-flex flex-row justify-content-center">
               
                <div class="px-2 bd-highlight">
                    <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse{{$manufacturer}}" aria-expanded="true" aria-controls="collapse{{$manufacturer}}">
                        <i class="fa fa-plus"></i> &nbsp;  <img src="//logo.clearbit.com/{{$manufacturer}}.com" style="height: 30px;"  alt=""> {{$manufacturer}}
                       </button>
                </div>
              
              </div>
            
        </div>
        <div class="row justify-content-center features" >
           @forelse ($phones_list as $phone)
           <div class="collapse col-sm-6 col-md-5 col-lg-4 item" id="collapse{{$manufacturer}}" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="box" style="background: rgb(43,48,52);">
                <a href="{{ url('phones/'.$phone->id) }}"><img class="rounded img-fluid responsive" src="{{$phone->image_url}}" style="width:120px; height:120px;padding-bottom: 22px;"></a>
                <h3 class="name" style="color: rgb(187,187,187);">{{$phone->name}}</h3>
                <p class="description" style="color: rgb(153,153,153);">Code Name: {{$phone->code_name}}</p>
            </div>
        </div> 
           @empty
           <div class="col-sm-6 col-md-5 col-lg-4 item">
               No Phones
           </div>
           @endforelse   
        </div>
    </div>
</div>
@endforeach
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
