@extends('layout.admin')

@section('content')
 

<div class="container-fluid">
  <div class="row">
    <div class="col-6">
        <h1 class="h3 mb-0 text-gray-800">Edit Artist</h1>
        <form action="/artist/{{ $artist->id }}" method="post">
          @csrf
          @method('patch')
          <div class="form-group">
            <input type="name" class="form-control" name="country_name" value="{{ $artist->name }}">
          </div>
          <div class="form-group">
            <textarea name="description" rows="10" class="d-block w-100 form-control" placeholder="description">"{{ $artist->description }}</textarea>
          </div>
          <div class="form-group">
            <label for="lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="birth_time" id="Lahir"  placeholder="=Tanggal Lahir" value="{{ $artist->birth_time }}" >
          </div>
          <div class="form-group">
            <label for="Meninggal">Meninggal</label>
            <input type="date" class="form-control" name="dead_time" id="Meninggal"  placeholder="=Meninggal" value="{{ $artist->dead_time }}" >
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div> 
    
  
@endsection
