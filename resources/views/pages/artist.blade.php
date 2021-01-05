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
      {{ $artist->name}}
  </h1>
  <p>
    {{$artist->birth_time}} - {{ $artist->dead_time}}
</p>
<div class="container">
<p>{{ $artist->description}}</p>
</div>  
</header>
<!-- main -->
<Main>
 
  <!-- content -->
  <section class="section-content1" id="content">
    <div class="container">
      <div class="row section-place justify-content-lg-center">
        <!-- amerika  --> 
        @foreach ($artist->item as $item) 
        <div class="col-sm-6 col-md-4 col-lg-3">
          <a href=" {{ route('item',$item->id)}}">
          <div class="card-country text-center d-flex flex-column " 
          style="background-image: url('{{ Storage::url($item->photo )}}')">            
          </div>
        </a>
        </div>
        @endforeach
          

          

      </div>
          
    </div>
      
  </section>
</Main> 
@endsection