@extends('admin.app')

@section('content')
<div class="container p-4">
    <div class="card">
        <div class="form">
           
            <form action="{{ route('phones.store') }}" method="POST" class="form p-2">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Phone Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="build_year" placeholder="Build Year">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="manufacturer" placeholder="Phone Manufacturer">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="code_name" placeholder="Code Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="image_url" placeholder="Phone Image URL">
                </div>
               <div class="form-group">
                   <button class="btn btn-primary btn-small" type="submit">Add</button>
               </div>

            </form>
        </div>
    </div>
</div>
@endsection
