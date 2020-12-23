@extends('admin.app')

@section('content')
<div class="container p-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit {{$phone->name}}</h4>
        </div>
        <div class="form">
           
            <form action="{{ route('phones.update',$phone->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$phone->name}}" name="name" placeholder="Phone Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$phone->build_year}}" name="build_year" placeholder="Build Year">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$phone->manufacturer}}" name="manufacturer" placeholder="Phone Manufacturer">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$phone->code_name}}" name="code_name" placeholder="Code Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$phone->image_url}}" name="image_url" placeholder="Phone Image URL">
                </div>
               <div class="form-group">
                   <button class="btn btn-primary btn-small" type="submit">Add</button>
               </div>

            </form>
        </div>
    </div>
</div>
@endsection
