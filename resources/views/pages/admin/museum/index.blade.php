@extends('layout.admin')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Museum</h1>
      <a href="{{ route('museum.create')}}" class="btn btn-primary">
        <i class="fas fa-plus text-white"> Tambah Museum</i>
       </a>
       
    
  </div>
  {{-- Table country --}}
  
  <div class="row">
    <div class="card-body">
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @elseif (session('delete'))
            <div class="alert alert-danger">
                {{ session('delete') }}
            </div>
        @endif
    <div class="table-responsive">
        <table class="table" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Negara</th>  
                    <th>Museum</th>
                    <th>Description</th>
                    <th>city</th>
                    <th>Logo</th>
                    <th>Action</th>
                </tr>
            </thead>
            @forelse ($museums as $museum)
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $museum->country->country_name}}</td>
                    <td>{{ $museum->name }}</td>
                    <td>{{ $museum->description }}</td>
                    <td>{{ $museum->city }}</td>
                    <td>
                        <img src="{{ Storage::url($museum->logo)}}" style="width: 150px" class="iGallery" >
                    </td>
                
                    <td>
                        <a href="{{ route('museum.edit',$museum->id)}}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('museum.destroy',$museum->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')">
                                <i class="fa fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                
            @empty
            <tbody>
                <tr>
                    <td colspan="7" class="text-center">
                        Data Kosong
                    </td>
                </tr>
                
            @endforelse
           
                 
             </tbody>
        </table>
        {{ $museums->links() }}
      </div>
    </div>
      
  </div>
  

 

  

</div>
<!-- /.container-fluid -->
@endsection
