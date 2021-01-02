@extends('layout.admin')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Country</h1>
      <a href="{{ route('artist.create') }}" class="btn btn-primary">
        <i class="fas fa-plus text-white"> Add Artist</i>
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
                    <th>Nama</th>  
                    <th>Deskripsi</th>
                    <th>Tanggal lahir</th>
                    <th>Meninggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            @forelse ($artists as $artist)
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $artist->name }}</td>
                    <td>{{ $artist->description }}</td>
                    <td>{{ $artist->birth_time }}</td>
                    <td>{{ $artist->dead_time }}</td>
                    <td>
                        <a href="{{ route('artist.edit',$artist->id)}}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('artist.destroy',$artist->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="ConfirmDelete()">
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
      </div>
    </div>
      
  </div>
  

 

  

</div>
<!-- /.container-fluid -->
@endsection
