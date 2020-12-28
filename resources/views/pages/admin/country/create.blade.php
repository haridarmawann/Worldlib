@extends('layout.admin')

@section('content')
 

<div class="container-fluid">
  <div class="row">
    <div class="col-6">
        <h1 class="h3 mb-0 text-gray-800">Add Country</h1>
        <form action="{{ route('country.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <input type="name" class="form-control" name="country_name" placeholder="Enter Country">
          </div>
          <div class="form-group">
             <textarea name="country_description" rows="10" class="d-block w-100 form-control" placeholder="Enter Description"></textarea>
          </div>
          <div class="form-group">
            <input type="file" name="country_image" placeholder="gambar">
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>  
        </form>
    </div>
  </div>
</div> 
    
  
@endsection
