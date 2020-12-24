@extends('admin.app')

@section('content')
<div class="container p-4">
    <div class="row">
        <div class="col">
            <div class="card ">
                <div class="card-body">
                    Total Phones: {{$phones->count()}}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card ">
                <div class="card-body">
                    Total Roms: {{$roms->count()}}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card ">
                <div class="card-body">
                    Total Kernels: {{$kernels->count()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
