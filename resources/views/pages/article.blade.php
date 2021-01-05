@extends('layout.app')
@section('title')
    country
@endsection

@section('content')

 <!-- Header -->
 <header class=" header1 text-center">
  <div class="container">
    <h2 class="">
      {{ $article->name }}
    </h2>
    <h3 class="mb-5">
      {{ $article->museum->name}}
    </h3>
  </div>

</header>

<!-- main -->
<main>

  <section class="section-content1" id="content">
    <div class="container">
      <div class="row section-place justify-content-lg-center">
        <!-- amerika  --> 
          <div class="col-sm-12 col-md-12 col-lg-12">
          </div>
        </div>
        <p class="col-sm-10 col-md-10 col-lg-10">
          {{ $article->description }}
        </p>
        <div class="col-sm-12 col-md-12 col-lg-12">
          @foreach ($article->item as $item)
          <div class="card-country text-center d-flex flex-column" 
          style="background-image: url('{{ Storage::url($item->photo)}}" >
        </div>
        <a href=" {{ route('item',$item->id)}} ">
        <p class="text-center mt-1">{{ $item->nama }}, {{$item->museum->name }}, {{ $item->date_created }}, Dari koleksi: {{$item->museum->name }}</P>
        <a>
          @endforeach 
          </div>
        </div>
        
        
      
        
    </div>
   </section>

</main>

@endsection