@extends('frontend.master')

@section('content')
<div class="inner-page-bg-white inner-page-text">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h1 class="inner-page-title-heading">{{$product_info->marbel_title}}</h1></div>
    
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    
        {!!$product_info->long_desp!!}
    
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <p><img src="{{asset('frontend/images/marble/pictures')}}/{{$product_info->marbel_photo}}" alt="Fantasy Brown Marble Exporters" class="img-responsive img-thumbnail"></p>
    <div class="enquiry-now-bg">
    <div class="enquiry-now-title">Buy Now</div>
    <div class="clr"></div>
    <div class="enquiry-now-text">
    <p style="font-size:15px"><span style="background:#FFFF00;padding:5px;font-weight:bold">» Note:- Minimum Order Quantity - 3000 square feet (1 container - arround 280 sqm)</span></p>
    </div>
    <form method="post" action="{{route('contact_submit')}}">
        @csrf
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><input type="text" name="name" class="form-control contact_input_box" placeholder="Your Name*" required></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><input type="email" name="email" class="form-control contact_input_box" placeholder="Your Email*" required></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><input type="text" name="phone" class="form-control contact_input_box" placeholder="Your Phone*" required></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><input type="hidden" name="marbel_name" class="form-control contact_input_box" value="{{$product_info->marbel_name}}"></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><textarea name="requirement" rows="5" cols="30" class="form-control contact_input_box" placeholder="Your Requirement*" required></textarea></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <button type="submit" class="btn btn-primary contact_button">
        Send Message
    </button></div>
    </div>
    </form>
    </div></div>
    
    <div class="clr"></div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div id="product-btn"><a href="{{route('new_Stones')}}"><button type="button" class="btn btn-danger btn-lg">Back to Brown Marbles</button></a></div>
    <img src="{{asset('frontend/images/marble/thumbnails')}}/{{$product_info->thumbnail}}"  class="img-responsive img-thumbnail">
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