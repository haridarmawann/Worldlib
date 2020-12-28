@extends('layout.admin')

@section('content')
 

<div class="container-fluid">
  <div class="row">
    <div class="card-body">
      <div class="col-6">
        
          <h1 class="h3 mb-0 text-gray-800 my-2">Add Artist</h1>
          <form action="{{ route('artist.store') }}" method="post">
            @csrf
            <div class="form-group">
              <input type="name" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <textarea name="description" rows="10" class="d-block w-100 form-control" placeholder="Enter Description"></textarea>
            </div>
            <div class="form-group">
              <label for="lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" name="birth_time" id="Lahir"  placeholder="=Tanggal Lahir">
            </div>

            <div class="form-group">
              <label for="Meninggal">Meninggal</label>
              <input type="date" class="form-control" name="dead_time" id="Meninggal"  placeholder="=Meninggal">
            </div>

              <button type="submit" class="btn btn-primary">Submit</button>  
          </form>
      </div>
    </div>
  </div>
</div> 
    
  
@endsection
