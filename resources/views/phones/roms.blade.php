<div class="box mt-2 p-2">
    <form class="form-inline">
        @csrf
        <label class="sr-only" for="inlineFormInputName2">Search By Rom Name</label>
        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Rom Name">
      
        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
        <div class="input-group mb-2 mr-sm-2">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Sort By</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>Choose...</option>
                <option value="1">Popularity</option>
                <option value="2">Date Added</option>
                <option value="3">Most Downloaded</option>
              </select>
        
        </div>
      

        <button type="submit" class="btn btn-primary mb-2">Search</button>
      </form>
      <ul class="list-unstyled">
       @forelse ($roms as $rom)
       <li class="media py-2">
      <a href="{{ url('roms/'.$rom->id, []) }}">  <img src="{{$rom->image_url}}" height="64" class="mr-3" style=" max-width: 128px;" alt="..."> </a>
        <div class="media-body">
          <h5 class="mt-0 mb-1">{{$rom->name}}</h5>
             For: {{$phone->name}}, Version: {{$rom->verison}}, Android Version: {{$rom->android_version}}
      </div>
      </li> 
       @empty
          <li class="media">No Roms Found</li> 
       @endforelse
        
        
      </ul>
</div>