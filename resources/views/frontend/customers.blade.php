@extends('frontend.master')

@section('content')
<div class="inner-page-bg-white">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{asset('frontend/images/testimonials.jpg')}}" class="img-responsive center-block" alt="Customers" title="Customers">
    <div class="inner-page-text">
    <p><strong>NOTHING IS MORE IMPORTANT TO US THAN A SATISFIED CLIENT</strong>, each client is important to us whether a client with 10,000 Sqr Feet  order or a client with 1,000 Sqr Feet order….everyone is very important to us.…undoubtedly…we put our 100% efforts with Honesty, Transparency, Quality, Reliability and Integrity…our ultimate goal is to get repeat business and recommendation and that’s the key to our successful business journey for the last 5 years.</p>
    <p>It’s not what we say about ourselves is important but what our customers say that counts….Read About our Customer Success Stories / Customer Testimonials :</p>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h2 class="inner-page-product-title">Our Happy Customers</h2></div>
    </div>
    
    @foreach ($reviews as $review)
        
    <div class="testimonials-text">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
    <div class="testimonials-center">
    <p><img src="{{asset('frontend/images/review/')}}/{{$review->photo}}"></p>
    <b>@for ($i=1; $i<=$review->star; $i++)
        &#9733;
    @endfor</b>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
    <div class="testimonials-right">
        {{$review->review}}       
    </div>
    </div>
    </div>
    </div>
    @endforeach
    
    
    <div class="testimonials-text">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    Coming up more testimonials...
    </div>
    </div>
    </div>
    
    </div>
    
    <div class="qpsd-zone">
    <div class="container-fluid">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="footer-heading"><span>Be 100% Assured for Best Quality, Price, Service &amp; Delivery</span></div></div>
    </div>
    </div>
    </div> 
@endsection