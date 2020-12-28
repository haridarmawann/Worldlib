@extends('layout.admin')

@section('content')
 

<div class="container-fluid">
  <div class="row">
    <div class="col-6">
        <h1 class="h3 mb-0 text-gray-800 my-2">Edit Artist</h1>
        <form action="{{ route('type.update', $type->id ) }}" method="post">
          @csrf
          @method('patch')
          <div class="form-group">
            <input type="name" class="form-control" name="type" value="{{ $type->type }}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div> 
    
  
@endsection
