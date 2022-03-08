@extends('style')

@section('content')

@include('navbar')

<div class="product-section mt-150 mb-150">
 <div class="container">
  <div class="row">

  	<div class="col-lg-8 offset-lg-2 text-center">
  	 <div class="section-title">
  	  <h3><span class="orange-text">All</span> Products</h3>
  	 </div>
  	</div>
 </div>
  	<div class="row">
     @foreach($data as $row)
  	  <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
  	  	<div class="single-product-item">

  	  	 <div class="product-image">
  	  	 	<a href="{{ route('show.product',$row['id']) }}"><img src="{{asset('images')}}/{{$row['img_product']}}"></a>
  	  	 </div>	
         <h3>{{ $row['name_product'] }}</h3>
         @php $start=1;  @endphp 

         @while($start <= 5)

           @if($row['rating'] < $start)
              <span class="fa fa-star"></span>
           @else
              <span class="fa fa-star checked"></span>
           @endif
           
           @php $start++;  @endphp
         @endwhile
         <br>
         ${{ $row['price_product'] }}
         <br>
         <a  class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
  	  	</div>
  	  </div>
     @endforeach
  	</div>
 </div>
</div>
@endsection