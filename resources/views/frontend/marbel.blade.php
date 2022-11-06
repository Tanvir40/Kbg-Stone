@extends('frontend.master')

@section('content')
<div class="inner-page-bg-white">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
    <h1 class="inner-page-title-heading">Marble Slabs Manufacturers</h1> 
    <div style="text-align: center">Unit 6, 1003-1009 Canley Vale Road Wetherill Park,</br> NSW, Australia 2164</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="inner-page-text">
    <p>  <strong><a href="index.html">FINEST MARBLE Collection</a></strong> from all over Australia, you can choose from more blends, colors, & styles below….today we are counted amongst the Best Marble Slabs Manufacturer in Austrlia. KBG Stone, one of the top  Marble Companies in Austrlia offers high quality marble slabs for your bathroom vanities, walls, showers and more. If you are looking for more colors you can find them in our inventory below…</p>
    
    <p>Our company is a premier Manufacturer, Retailer and Wholesaler of Marble Slabs, Marble Tiles and Marble Blocks of various colors like the fastest moving. KBG Stone offer various  Marbles in various sizes and finishes in the form of slabs & steps risers etc.</p> 
    </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><img src="{{asset('frontend/images/303142152_10224400654776543_6550171894049598402_n.jpg')}}" alt="Marble Slabs Manufacturers" title="Marble Slabs Manufacturers" class="img-responsive center-block"></div>
    
    
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="inner-page-text">
    <ul>
        @foreach ($categories as $category)
            <li><a href="{{url('/new-Stones/'.$category->id)}}">{{$category->category_name}}</a></li>
        @endforeach

    </ul>
    
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
    
    <div class="container certificates">
    <div class="row">
    
    </div>
    </div>
@endsection