@extends('admin.app')

@section('content')
<div class="container p-4">
    <div class="card p-2">
      <h3>View Phones</h3>
      <hr>
      <table class="table table-striped">
          <tr>
              <th>Image</th>
              <th>Name</th>
            
              <th></th>
              <th></th>
          </tr>
          @forelse ($phones as $phone)
          <tr>
            <td>
                <img src="{{$phone->image_url}}" width="50" alt="">
            </td>
            <td>{{$phone->name}}</td>
           
            <td>
                <a href="/admin/editphone/{{$phone->id}}">Edit</a>
            </td>
            <td>
                <form action="{{ route('phones.destroy',$phone->id) }}" method="POST">
          
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                   </form> 
            </td>
        </tr>
          @empty
            <tr>
                <td class="" colspan="3">No Phones</td>
            </tr>  
          @endforelse
          
      </table>
    </div>
</div>
@endsection
