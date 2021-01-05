@extends('layout.app')
@section('title')
    country
@endsection

@section('content')

<!-- Header -->
<header class="text-center">
  <div class="container">
    <h3 class="mt-5">
      {{ $museum->name }}
    </h3>
    <p>
      {{ $museum->city }}, {{ $museum->country->country_name }}
 </p>
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
            style="background-image: url('{{ Storage::url($museum->logo)}}">

            </div>
          </div>
        </div>
        <p class="col-sm-10 col-md-10 col-lg-10">{{ $museum->description}}</p>
        @if (isset($articles))
        <h3>{{ $museum->article_count}} Artikel</h3>
        <div class="row section-article justify-content-lg-center">
          @foreach ($articles as $article)
          <div class="col-sm-6 col-lg-4">
            <a href="{{ route('article',$article->id)}}">
              <div class="card-artikel text-center d-flex flex-column">
                  <div class="story mr-auto">Cerita</div>
                  <div class="artikel mr-auto my-2" style="font-size:18px;">{{ $article->name}}</div>
                  <div class="item mr-auto">{{ $article->museum->name}}</div>
              </div>
            </a>
          </div>
          @endforeach 
        </div>
        @else

        @endif
        
        
        @if (isset($items))
        <h3>{{ $museum->item_count}} item</h3>
        <div class="row section-place justify-content-lg-center">
          <!-- amerika  -->
          @foreach ($items as $item) 
              <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ route('item',$item->id)}}">
                  <div class="card-country3 text-center d-flex flex-column" 
                  style="background-image: url('{{ Storage::url($item->photo)}}">
                      <div class="country mr-auto">{{ $item->nama }}</div>
                  </div>
                </a>
              </div>
          @endforeach
        </div>
        @else

        @endif

        
      
        
    </div>
   </section>

</main>

@endsection