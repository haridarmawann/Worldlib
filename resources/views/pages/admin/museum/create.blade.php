@extends('layout.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Museum</h1>
    </div>
    <div class="dark shadow">
        <div class="card-body">
                <form action="{{ route('museum.store') }}" method="post" enctype="multipart/form-data">  
                    @csrf
                    <div class="form-group">
                        <label for="country_id">Negara</label>
                        <select name="country_id" required class="form-control">
                            <option value="">Pilih Negara</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">
                                    {{ $country->country_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                      <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Museum">
                      @error('name')<div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    

                    <div class="form-group">
                      <textarea name="description" rows="10" class="d-block w-100 form-control" placeholder="Enter Description"></textarea>   
                    </div>

                   <div class="form-group">
                    <input type="name" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Enter City">
                    @error('city')<div class="invalid-feedback">{{$message}}</div> @enderror
                </div>

                    <div class="form-group">
                        <input type="file" name="logo" placeholder="gambar">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Submit
                    </button>

                    
                </form>
        </div>
    </div>


</div>

@endsection