@extends('layout.app')
@section('title')
    country
@endsection

@section('content')
<header class="text-center">
</header>

<section class="section-detail-item">
  <div class="container">
    
        <div class="col-lg-12">
          <div class="card card-detail-item">
            <div class="features row">
              <div class="col-lg-5">
                <img src="{{ Storage::url($item->photo)}}"
                     class="features-image"/>
              </div>
              <div class="col-lg-7">
                <div class="description">
                      <h3>{{ $item->nama }}</h3>  
                      <br>
                      <a href="{{ route('artist',$item->artist->name)}}">
                      <h4>{{ $item->artist->name}},</a> {{ $item->date_created }}</h4>
                      <p>{{ $item->description }}</p>
                      @if (isset($item->type_id))
                      <a href="{{ route('type',$item->type->type)}}">
                      <h2>{{ $item->type->type  }}</h2>
                      </a>
                      @else
                        
                      @endif
                </div>
              </div>
          </div>
        </div>
        
   
  </div>
</section>

@endsection