@extends('admin.app')

@section('content')
<div class="container p-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                Editing ROM
            </h4>
        </div>
        <div class="card-body">
            <div class="form">
                <form action="{{ route('roms.update',$rom->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$rom->name}}" name="name" placeholder="Rom Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$rom->description}}" name="description" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$rom->link}}" name="link" placeholder="Link">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$rom->version}}" name="version" placeholder="Version Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$rom->android_version}}" name="android_version" placeholder="Android Version">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$rom->developer}}" name="developer" placeholder="Developer Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$rom->date}}" name="date" placeholder="Release Date">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$rom->image_url}}" name="image_url" placeholder="Image Url ">
                    </div>
                    <div class="form-group">
                        <label for="">For </label>
                       <select name="phone_id" id="" required>
                           <option value="{{$rom->phone_id}}">-Selected-{{$rom->phone->name}}</option>
                           @forelse ($phones as $phone)
                                <option class="" value="{{$phone->id}}">{{$phone->name}}</option>
                           @empty
                               <option>No Phones Added</option>
                           @endforelse
                       </select>
                    </div>
                   <div class="form-group">
                       <button class="btn btn-primary btn-small" type="submit">Add</button>
                   </div>
    
                </form>
            </div>
        </div>
    
    </div>
</div>
@endsection
