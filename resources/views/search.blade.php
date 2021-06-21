@extends('master')
@section('content')
<div class="custom-product">
   <div class="trending-wrapper">
       <h3>Tredning Products</h3>
       @foreach ($product as $item )
       <div class="searched-item">
            <a href="detail/{{ $item->id }}">
            <div class="trending-item">
                <img class="trending-image" src="{{ $item['gallery'] }}" >
                <div class="">
                    <h2>{{ $item['name'] }}</h2>
                    <h5>{{ $item['description'] }}</h5>
                </div>
            </a>
      </div>
   </div>
       @endforeach
   </div>

</div>
@endsection
