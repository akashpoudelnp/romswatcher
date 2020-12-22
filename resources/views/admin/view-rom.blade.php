@extends('admin.app')

@section('content')
<div class="container p-4">
    <div class="card p-2">
      <h3>View Roms</h3>
      <hr>
      <table class="table table-striped">
          <tr>
            <th></th>
              <th>Name</th>
              <th>Version</th>
            
                <th></th> 
              <th></th>
          </tr>
          @forelse ($roms as $rom)
          <tr>
            <td>
                <img src="{{$rom->image_url}}" width="50" alt="">
            </td>
            <td>{{$rom->name}}</td>
           
            <td>Edit</td>
            <td>
                <form action="{{ route('roms.destroy',$rom->id) }}" method="POST">
          
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                   </form> 
            </td>
        </tr>
          @empty
            <tr>
                <td class="" colspan="3">No Roms Added Yet</td>
            </tr>  
          @endforelse
          
      </table>
    </div>
</div>
@endsection
