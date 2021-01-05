@extends('layout.app')
@section('title')
    Worldlib
@endsection

@section('content')
 <!-- header -->
 
  <h1>
      Find Country
  </h1>   
  <p>
       Mungkin Kau akan mendapat
      <br>
      apa yang kamu cari 
  </p>

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">negara</th>
        <th scope="col">museum</th>
        <th scope="col">items</th>
        
      </tr>
    </thead>
    <tbody>
      @forelse ($countries as $country)   
      <tr>
        <th>#</th>
        <td>{{ $country->country_name }}</td>
        <td>{{ $country->item->count }}</td>
        
        <td>Otto</td>
      </tr>
      @empty
      @endforelse
    </tbody>
  </table>
  
<!-- main -->
@endsection