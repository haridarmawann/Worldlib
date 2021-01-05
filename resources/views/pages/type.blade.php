@extends('layout.app')
@section('title')
    Worldlib
@endsection

@section('content')
 <!-- header -->
 <header class="text-center">
   <br>
   <br>
  <h1>
      {{ $type->type}}
  </h1>   
</header>
<!-- main -->
<Main>
 
  <!-- content -->
  <section class="section-content" id="content">
    <div class="container">
      <div class="row section-place justify-content-lg-center">
        <!-- amerika  --> 
        @foreach ($type->item as $item) 
        <div class="col-sm-6 col-md-4 col-lg-3">
          <a href=" {{ route('item',$item->id)}}">
          <div class="card-country text-center d-flex flex-column " 
          style="background-image: url('{{ Storage::url($item->photo )}}')">
              <div class="country mr-auto">{{ $item->nama }}</div>
              
          </div>
        </a>
        </div>
        @endforeach
          

          

      </div>
          
    </div>
      
  </section>
</Main> 
@endsection