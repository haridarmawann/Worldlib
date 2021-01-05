@extends('layout.app')
@section('title')
    country
@endsection

@section('content')

<!-- Header -->
<header class="text-center">
  <div class="container">
    <h2 class="mt-5">
      {{ $country->country_name }}
    </h2>
  </div>

</header>

<!-- main -->
<main>

  <section class="section-content" id="content">
    <div class="container">
      <div class="row section-place justify-content-lg-center">
        <!-- amerika  --> 
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card-country1 text-center d-flex flex-column" 
            style="background-image: url('{{ Storage::url($country->country_image )}}')">

            </div>
          </div>
        </div>
        <p class="col-sm-10 col-md-10 col-lg-10">{{ $country->country_description}}
        </p>
        <h3>{{ $country ->museum_count }} koleksi</h3>
        <div class="row section-place justify-content-lg-center">
          @foreach ($museums as $museum)
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href=" {{ route('museum',$museum->id)}} ">
              <div class="card-country2 text-center d-flex flex-column" 
              style="background-image: url('{{ Storage::url($museum->logo)}}">
                  <div class="country mr-auto">{{ $museum->name }}</div>
                  <div class="item mr-auto">{{ $museum->item_count }} item</div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
          
        <h3>{{ $country->item_count}} item</h3>
        <div class="row section-place justify-content-lg-center">
          <!-- amerika  --> 
          @foreach ($items as $item)
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href=" {{ route('item',$item->id)}} ">
                <div class="card-country3 text-center d-flex flex-column" 
                style="background-image: url('{{ Storage::url($item->photo)}}">
                <div class="country mr-auto">{{ $item->nama }}</div>
                </div>
              </div>
          @endforeach
        </div>
      
        
    </div>
   </section>

</main>
@endsection