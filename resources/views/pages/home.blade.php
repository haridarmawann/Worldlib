@extends('layout.app')
@section('title')
    Worldlib
@endsection

@section('content')
 <!-- header -->
 <header class="text-center">
  <h1>
      Find Country
  </h1>   
  <p>
       Mungkin Kau akan mendapat
      <br>
      apa yang kamu cari 
  </p>
  
  <form action="{{ route('country-search')}}" method="GET">
    <div class="d-flex justify-content-center">
      <div class="form-group">
          <div class="col-lg-12 mb-2">
            <input type="text" class="form-control" name="cari" id="search" placeholder="Search"> 
          </div>
          <input type="submit" class ="btn btn-outline-light" value="Search">
      <div>
    </div>
  </form>
  
</header>
<!-- main -->
<Main>
 
  <!-- content -->
  <section class="section-content" id="content">
    <div class="container">
      <div class="row section-place justify-content-lg-center">
        <!-- amerika  --> 
        @foreach ($countries as $country)
            
       
            <div class="col-sm-6 col-md-4 col-lg-3">
              <a href=" {{ route('country',$country->id)}}">
              <div class="card-country text-center d-flex flex-column " 
              style="background-image: url('{{ Storage::url($country->country_image )}}')">
                  <div class="country mr-auto">{{ $country ->country_name }}</div>
                  <div class="item mr-auto">{{ $country ->item_count}} item</div>
              </div>
            </a>
            </div>
          @endforeach
          

          

      </div>
          
    </div>
      
  </section>
</Main> 
@endsection

{{-- <script>
  $(document).ready(function(){
      function fetch_customer_data(query = '')
      $.ajax({
        url:"{{ route(live_search.action) }}",
        method:'GET',
        data:{query:query},
        dataType:'jsons'
        success:function(data)
        {
          $('tbody').html(data.table_data)
        }
      })
  })
</script> --}}