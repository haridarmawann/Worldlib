@extends('layout.admin')

@section('content')
 

<div class="container-fluid">
  <div class="row">
    <div class="card-body">
      <div class="col-6">
        
          <h1 class="h3 mb-0 text-gray-800 my-2">Add Type</h1>
          <form action="{{ route('type.store') }}" method="post">
            @csrf
            <div class="form-group">
              <input type="name" class="form-control" name="type" placeholder="Enter Type">
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>  
          </form>
      </div>
    </div>
  </div>
</div> 
    
  
@endsection
