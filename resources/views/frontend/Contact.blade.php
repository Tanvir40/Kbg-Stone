@extends('frontend.master')

@section('content')
<div class="inner-page-bg-white">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    
    <h1 class="inner-page-title-heading">Contact Aravali Marbles</h1>
    
    <p>Whatever your request, we are at your disposal for any questions, pricing or samples or anything else…please feel free to contact us at <a href="mailto:aravalimarbles@gmail.com?cc=info@aravalimarbles.com" style="color:#990000">info@kbgstone.com.au</a> / <a href="mailto:info@aravalimarbles.com?cc=aravalimarbles@gmail.com" style="color:#990000">info@kbgstone.com.au</a> or fill out the form below. We're always happy to hear!</p>
    
    <p>We respond to emails as soon as possible!</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="inner-page-text"><p><span style="background:#FFFF00;padding:5px;font-weight:bold;line-height: 30px;">» Note:- Minimum Order Quantity - **** square meter </span></p></div>
    
    @if (session('success'))
        <div class="alert alert-success"><strong>{{session('success')}}</strong></div>
    @endif

    <div class="contact_form">
    <form method="post" action="{{route('contact_submit')}}">
        @csrf
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="fild-text-form">Your Name: *</div>
    <input type="text" name="name" class="form-control contact_input_box" required>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="fild-text-form">Your Email: *</div>
    <input type="email" name="email" class="form-control contact_input_box" required>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="fild-text-form">Your Phone: *</div>
    <input type="number" name="phone" class="form-control contact_input_box" required>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="fild-text-form">Your Requirement: *</div>
    <textarea name="requirement" rows="5" cols="30" class="form-control contact_input_box" required></textarea>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <button type="submit" class="btn btn-primary contact_button">
            Send Message
        </button>
    </div>
    </div>
    </form>
    </div>
    
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="contact-page-text">
    <p>
    <span class="contect-red-txt">Call Us:</span><br>
    Direct: +61 451 210 406 - <span style="font-size:12px;background:#CC0000;padding:5px;color:#fff;font-weight:bold">Call / Whatsapp</span><br>
    Phone: +61 451 210 406<br>
    
    Email: <a href="mailto:aravalimarbles@gmail.com?cc=aravalimarbles@hotmail.com">info@kbgstone.com.au</a> / <a href="mailto:info@aravalimarbles.com?cc=aravalimarbles@gmail.com">info@kbgstone.com.au</a> / <a href="mailto:aravalimarbles@hotmail.com?cc=aravalimarbles@gmail.com">aravalimarbles@hotmail.com</a></p>
    <br>
    <p>
    <span class="contect-red-txt">Registered &amp; Head Office:</span><br>
    
    Unit 6, 1003-1009 Canley Vale Road Wetherill Park, NSW, Australia 2164
    </p>
    <br>
    
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d261.2954607626478!2d150.89639513799858!3d-33.85054738673783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b1296fd576ccf13%3A0x1fb1a2f210f75454!2s1003%20Canley%20Vale%20Rd%2C%20Wetherill%20Park%20NSW%202164%2C%20Australia!5e1!3m2!1sen!2sbd!4v1664476280675!5m2!1sen!2sbd" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    
    
    
    
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