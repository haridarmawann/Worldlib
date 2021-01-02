@extends('layout.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Article</h1>
    </div>
    <div class="dark shadow">
        <div class="card-body">
                <form action="{{ route('article.update',$article->id) }}" method="post">
                    @method('put')  
                    @csrf  
                    <div class="form-group">
                      <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" 
                      placeholder="Enter Item" value="{{ $article->name }}">
                      @error('name')<div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                      <textarea name="description" rows="10" class="d-block w-100 form-control" 
                      placeholder="Enter Description">{{ $article->description}}</textarea>   
                    </div>
                   
                    <div class="form-group">
                      <select name="museum_id" required class="form-control">
                          <option value="">Pilih museum</option>
                          @foreach ($museums as $museum)
                              <option value="{{ $museum->id }}" {{$article->museum_id  == $museum->id  ? 'selected' : ''}}>
                                  {{ $museum->name }}
                              </option>
                          @endforeach
                      </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Submit
                    </button>

                    
                </form>
        </div>
    </div>


</div>

@endsection