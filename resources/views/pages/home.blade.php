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
</header>
<!-- main -->
<Main>
 
  <!-- content -->
  <section class="section-content" id="content">
    <div class="container">
      <div class="row section-place justify-content-lg-center">
        <!-- amerika  --> 
            <div class="col-sm-6 col-md-4 col-lg-3">
              <a href="{{ route('detail_c')}}">
              <div class="card-country text-center d-flex flex-column " 
              style="background-image: url('frontend/images/Group 7.png');">
                  <div class="country mr-auto">Amerika Serikat</div>
                  <div class="item mr-auto">1.300.000.00 item</div>
                  <!-- <div class="country-button mt-auto">
                    <a href="" class="btn btn-view-details px-4">
                      View Details
                  </a>
                  </div>                     -->
              </div>
            </a>
            </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-country text-center d-flex flex-column" 
            style="background-image: url('frontend/images/Group\ 8.png');">
                <div class="country mr-auto">Amerika Serikat</div>
                <div class="item mr-auto">1.300.000.00 item</div>
                <!-- <div class="country-button mt-auto">
                  <a href="" class="btn btn-view-details px-4">
                    View Details
                </a>
                </div>                     -->
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-country text-center d-flex flex-column" 
            style="background-image: url('frontend/images/Group 6.png');">
                <div class="country mr-auto">Amerika Serikat</div>
                <div class="item mr-auto">1.300.000.00 item</div>
                <!-- <div class="country-button mt-auto">
                  <a href="" class="btn btn-view-details px-4">
                    View Details
                </a>
                </div>                     -->
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-country text-center d-flex flex-column" 
            style="background-image: url('frontend/images/Group\ 9.png');">
                <div class="country mr-auto">Amerika Serikat</div>
                <div class="item mr-auto">1.300.000.00 item</div>
                <!-- <div class="country-button mt-auto">
                  <a href="" class="btn btn-view-details px-4">
                    View Details
                </a>
                </div>                     -->
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-country text-center d-flex flex-column" 
            style="background-image: url('frontend/images/amerika.jpg');">
                <div class="country mr-auto">Amerika Serikat</div>
                <div class="item mr-auto">1.300.000.00 item</div>
                <!-- <div class="country-button mt-auto">
                  <a href="" class="btn btn-view-details px-4">
                    View Details
                </a>
                </div>                     -->
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-country text-center d-flex flex-column" 
            style="background-image: url('frontend/images/amerika.jpg');">
                <div class="country mr-auto">Amerika Serikat</div>
                <div class="item mr-auto">1.300.000.00 item</div>
                <!-- <div class="country-button mt-auto">
                  <a href="" class="btn btn-view-details px-4">
                    View Details
                </a>
                </div>                     -->
            </div>
          </div>  
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-country text-center d-flex flex-column" 
            style="background-image: url('frontend/images/amerika.jpg');">
                <div class="country mr-auto">Amerika Serikat</div>
                <div class="item mr-auto">1.300.000.00 item</div>
                <!-- <div class="country-button mt-auto">
                  <a href="" class="btn btn-view-details px-4">
                    View Details
                </a>
                </div>                     -->
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-country text-center d-flex flex-column" 
            style="background-image: url('frontend/images/amerika.jpg');">
                <div class="country mr-auto">Amerika Serikat</div>
                <div class="item mr-auto">1.300.000.00 item</div>
                <!-- <div class="country-button mt-auto">
                  <a href="" class="btn btn-view-details px-4">
                    View Details
                </a>
                </div>                     -->
            </div>
          </div>

          

      </div>
          
    </div>
      
  </section>
</Main> 
@endsection