@extends('frontend.master')

@section('content')
<div class="inner-page-bg-white">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h1 class="inner-page-title-heading">KBG Stones</h1></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="inner-page-text">
    <p>Keep on checking this <strong><a href="{{route('/')}}">KBG Stones</a></strong> section, we are updating this page with new stone quarries' material. We can Manufacturer and Wholesale  kitchen tiles, bathroom tiles, wall tiles, flooring tiles and exterior wall tiles and slabs for countertops in these new stones.</p> 
    
    
    
    <p>For below shown, new <strong>KBG Stones</strong> business inquiries, please write to the <strong>KBG Stone Marbles </strong>:</p>
    
    </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h2 class="inner-page-product-title">New Marble Countertop Slabs - Ready to Load</h2></div>
    
    @foreach ($marbels as $marbel)
        
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <div class="product-radius">
    <div class="product-img">
    <div class="hover01">
    <div><figure><a class="fancybox" href="{{route('marbel.details', $marbel->id)}}" data-fancybox-group="gallery" title="Dazzling Dunes Granite"><img src="{{asset('/frontend/images/marble/pictures')}}/{{$marbel->marbel_photo}}" class="img-responsive"></a></figure>
    </div>
    <div>   
    </div>
    <div class="product-title-3">{{$marbel->marbel_name}}</div>
    </div>
    </div>
    </div>
    </div>
    
    @endforeach
    
    
    
    
    
    
    
    
    
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