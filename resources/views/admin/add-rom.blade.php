@extends('admin.app')

@section('content')
<div class="container p-4">
    <div class="card">
        <div class="form">
            <form action="{{route('roms.store')}}" method="POST" class="form p-2">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Rom Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="description" placeholder="Description">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="link" placeholder="Link">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="version" placeholder="Version Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="android_version" placeholder="Android Version">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="developer" placeholder="Developer Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="date" placeholder="Release Date">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="image_url" placeholder="Image Url ">
                </div>
                <div class="form-group">
                    <label for="">For </label>
                   <select name="phone_id" id="" required>
                       <option>-None-</option>
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
@endsection
