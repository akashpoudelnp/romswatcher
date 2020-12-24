@extends('main.layout')

@section('content')
<header class="masthead text-white text-center mb-2" style="background: #343a40;padding-top: 66px;padding-bottom: 66px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                @csrf
                <input class="typeahead form-control form-control-lg" type="text" placeholder="Search the Kernels" style="background: #636363;color: rgb(12,70,128);">
            </div>
        </div>
    </div>
</header>
@foreach ($kernels as $developer => $kernels_list)
    

<div class="features-boxed" style="background: #343a40;">
    <div class="container">
        <div class="intro">
            <div class="d-flex flex-row justify-content-center">
                <div class="p-2 bd-highlight ">
                    <img src="//logo.clearbit.com/{{$developer}}.com" style="height: 30px;"  alt="">
                </div>
                <div class="p-2 bd-highlight">
                    <h3 class="text-center p-0 m-0" style="color: rgb(205,208,211);">{{$developer}}</h3>
                </div>
              
              </div>
            
        </div>
        <div class="row justify-content-center features">
           @forelse ($kernels_list as $kernel)
           <div class="col-sm-6 col-md-5 col-lg-4 item">
            <div class="box" style="background: rgb(43,48,52);">
                <a href="{{ url('kernels/'.$kernel->id) }}"><img class="rounded img-fluid responsive" src="{{$kernel->image_url}}" style="width:120px; height:120px;padding-bottom: 22px;"></a>
                <h3 class="name" style="color: rgb(187,187,187);">{{$kernel->name}}</h3>
                <p class="description" style="color: rgb(153,153,153);">For : {{$kernel->phone->name}}</p>
            </div>
        </div> 
           @empty
           <div class="col-sm-6 col-md-5 col-lg-4 item">
               No kernels
           </div>
           @endforelse
         
                
          
           
            
           
        </div>
    </div>
</div>
@endforeach
<script type="text/javascript">
    var path = "{{ route('autocompletek') }}";
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
            let url= 'kernels/'+data.id;
                window.location.replace(url);
            }
    });
</script>
@endsection
