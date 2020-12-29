@extends('layout.admin')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">item</h1>
      <a href="{{ route('item.create')}}" class="btn btn-primary">
        <i class="fas fa-plus text-white"> Tambah Item</i>
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
                    <th>Description</th>
                    <th>Dibuat</th>
                    <th>museum</th>
                    <th>artist</th>
                    <th>jenis</th>
                    <th>foto</th>
                    <th>action</th>
                </tr>
            </thead>
            @forelse ($items as $item)
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama}}</td>
                    <td>{{ $item->description}}</td>
                    <td>{{ $item->date_created }}</td>
                    <td>{{ $item->museum->name }}</td>
                    <td>{{ $item->artist->name }}</td>
                    <td>{{ $item->type->type }}</td>
                    
                    <td>
                        <img src="{{ Storage::url($item->photo  )}}" style="width: 150px" class="iGallery" >
                    </td>
                
                    <td>
                        <a href="{{ route('item.edit',$item->id)}}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('item.destroy',$item->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
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
