@extends('frontend.master')

@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<div class="banner">
<div class="carousel-inner">

<div class="owl-carousel">
    @foreach ($banners as $banner)  
        @if ($banner->status == 1)
            <div>
                <img src="{{asset('frontend/images/banners')}}/{{$banner->bannerimage}}" alt="img">
                <div class="carousel-caption">
                    <div class="tagline">
                    <b>{{$banner->heading_one}}</b>
                    <p>{{$banner->heading_two}}</p>
                    <p>{{$banner->heading_three}}</p>
                    </div>
                    </div>
            </div> 
        @endif
    @endforeach
</div>

</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="icon-prev"></span></a>
<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="icon-next"></span></a>
</div>
</div>
<div class="welcome-bg">
<div class="welcome-bg-white">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h1 class="welcome-title-heading">Australia's Top Marble   Company Which Provides A Grade Quality. Retailer Manufacturer & Wholesaler.</h1>
<img src="{{asset('frontend/images/2nd')}}/{{$banners2->first()->bannerimage}}" alt="Granite Suppliers India" title="Granite Suppliers India" class="img-responsive center-block">
<div class="welcome-text">
<p></p>
<p>{{$banners2->first()->bannername}}</p>

</div>
</div>
</div>
</div>
</div>


<style>
    .slideshow {
  margin: 0 auto;
  padding-top: 50px;
  height: 400px;
  box-sizing: border-box;
}
.content {
  margin: auto;
  width: 190px;
  perspective: 1000px;
  position: relative;
  margin-top: 50px;
}
.content-carrousel {
  width: 100%;
  position: absolute;
  float: right;
  animation: rotateit 40s infinite linear;
  transform-style: preserve-3d;
}
.content-carrousel:hover {
  aniation-play-state: paused;
  cursor: pointer;
}

.content-carrousel figure {
  width: 100%;
  height: 120px;
  border: 1px solid #4d444d;
  overflow: hidden;
  position: absolute;
}
.content-carrousel figure:nth-child(1) {
  transform: rotateY(0deg) translateZ(300px)
}
.content-carrousel figure:nth-child(2) {
  transform: rotateY(40deg) translateZ(300px)
}
.content-carrousel figure:nth-child(3) {
  transform: rotateY(80deg) translateZ(300px)
}
.content-carrousel figure:nth-child(4) {
  transform: rotateY(120deg) translateZ(300px)
}
.content-carrousel figure:nth-child(5) {
  transform: rotateY(160deg) translateZ(300px)
}
.content-carrousel figure:nth-child(6) {
  transform: rotateY(200deg) translateZ(300px)
}
.content-carrousel figure:nth-child(7) {
  transform: rotateY(240deg) translateZ(300px)
}
.content-carrousel figure:nth-child(8) {
  transform: rotateY(280deg) translateZ(300px)
}
.content-carrousel figure:nth-child(9) {
  transform: rotateY(320deg) translateZ(300px)
}
.shadow {
  position: absolute;
  box-shadow: 0px 0px 20px 0px #000;
  border-radius: 2px;
}
/*new property used for the first time by me image-rendering*/
.content-carrousel img {
  image-rendering: auto;
  transition: all 300ms;
  width: 100%;
  height: 100%;
}
.content-carrousel img:hover {
  transform: scale(1.2);
  transition: all 300ms;
}

@keyframes rotateit {
  from {
    transform: rotateY(0deg);
  }
  to {
    transform: rotateY(360deg);
  }
}
</style>

<section class="slideshow">
    <div class="content">
      <div class="content-carrousel">

        @foreach ($marbels as $marbel)
            <figure class="shadow">
                <a href="{{route('marbel.details', $marbel->id)}}">
                    <img src="{{asset('/frontend/images/marble/pictures')}}/{{$marbel->marbel_photo}}" alt="">
                </a>
            </figure>
        @endforeach

      </div>
    </div>
  </section>



<div class="product-zone">
<div class="product-zone-bg">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h2>Retailer Manufacturer & Wholesaler.</h2>
</div>
</div>

<div class="row">

@foreach ($categoriesRoom as $room)

<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
<a href="{{url('/new-Stone/'.$room->id)}}"><img src="{{asset('frontend/images/categoryroom')}}/{{$room->category_room_image}}" alt="Top Marble Slabs Exporters in India" title="Top Marble Slabs Exporters in India" class="img-responsive center-block"></a>
<h3>{{$room->categoryroom_name}}</h3>
<div class="product-zone-text"></div>
<a href="{{url('/new-Stone/'.$room->id)}}"><button type="button" class="product-zone-button">Learn More</button></a>
</div>
@endforeach

</div>

</div>
</div>



<div class="color-zone">
<div class="color-zone-bg">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h2>Largest Marble Wholesaler and Retailer In Australia</h2>
</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab1.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Fantasy Brown Marble Slabs Wholsaler in Australia" class="img-responsive center-block"></a></div>
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab2.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Fantasy Brown Marble Slabs Manufacturer in Australia" class="img-responsive center-block"></a></div>
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab3.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Marble Slabs Wholsaler in Australia" class="img-responsive center-block"></a></div>
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab4.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Marble Slabs Wholsaler in Australia" class="img-responsive center-block"></a></div>
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab5.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Marble Slabs Wholsaler in Australia" class="img-responsive center-block"></a></div>
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab6.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Marble Slabs Wholsaler in Australia" class="img-responsive center-block"></a></div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab7.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Marble Slabs Wholsaler in Australia" class="img-responsive center-block"></a></div>
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab8.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Australia Star Galaxy Granite Supplier" class="img-responsive center-block"></a></div>
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab6.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Marble Slabs Wholsaler in Australiar" class="img-responsive center-block"></a></div>
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab1.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Marble Slabs Wholsaler in Australia" class="img-responsive center-block"></a></div>
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab2.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Marble Slabs Wholsaler in Australia" class="img-responsive center-block"></a></div>
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href=""><img src="{{asset('frontend/images/slab10.jpg')}}" alt="Marble Slabs Wholsaler in Australia" title="Marble Slabs Wholsaler in Australia" class="img-responsive center-block"></a></div>
</div>

</div>
</div>

<div class="why-choose-zone">
<div class="why-choose-zone-bg">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h2>Why Choose KBG Stone</h2></div>
<div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
<div class="why-choose-zone-text">
<p>We always want our customer to be completely satisfied with our stones and our customer service. We do whatever it takes to make you happy. No hassles, no problems…..here are just a few reasons to choose us…</p>

<ul>
<li><strong>QUALITY:</strong> 100% customer satisfaction guaranteed! No fuss. No gimmick.</li>
<li><strong>FAIR PRICING ALWAYS:</strong> Not interested at all in making a quick buck.</li>
<li><strong>PEACE OF MIND:</strong> Email / whatsapp updates at each step of the shipment.</li>
<li><strong>TIMELY CONTAINER DESPATCH:</strong> Scheduled workings.</li>
<li><strong>LONG TERM RELATIONSHIP:</strong> 95% customer retention YoY basis.</li>
<li><strong>QUICK COMMUNICATION:</strong> Always respond to enquiries within 24 hours.</li>
<li><strong>FAITHFUL:</strong> Every customer is equally important to us.</li>
<li><strong>CONTAINER LOADING:</strong> Experienced and trained container loading workers.</li>
<li><strong>VAST RANGE:</strong> Own / outsourced, only the best quality slabs, tiles, blocks.</li>
</ul>

<p style="text-align:center;"><b>Hope you will give us a chance to serve you.</b></P>

</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">

<!--<video controls class="video-size" controlsList="nodownload" autoplay loop>
<source src="video/aravali.mp4" type="video/mp4">
<source src="video/aravali.ogg" type="video/ogg">
Your browser does not support HTML video.
</video> -->

<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/C1Ua8gM0bTc"></iframe>
<!-- <iframe width="1237" height="696" src="https://www.youtube.com/embed/C1Ua8gM0bTc" title="Real marble tiles Buy Best Price | Natural Marble & Marble Look Tiles" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
</div>

</div>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 welcome-text text-center">
<p>Our customers LOVE our Marbles! Knock us and get FREE QUOTE!
Are you searching for the most exquisite, modern, and premium Marbles and Tiles for your home or office? We've recently revised our product offerings, and we can't wait to assist you in furnishing your house or place of business.
Builders, architects, landscapers, stonemasons, and homeowners may all get exquisite and beautiful Marble from Bulk Discount Warehouse for a fair price.</p>
<br>
<p style="font-size:24px;text-align:center;font-weight:bold">“Your consideration is greatly appreciated”</p><br>
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

<!-- <div class="container certificates">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><img src="images/aravali-india-marbles-granites-membership.jpg" alt="Aravali India Marbles & Granites Membership" title="Aravali India Marbles & Granites Membership" class="img-responsive center-block"></div>
</div>
</div> -->

<!-- <div class="categories-zone">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<b>Our Brand Directory</b><br />
<h3><a href="granite-slabs-manufacturers.html">Granit</a></h3> 
| <h3><a href="granite-slabs-manufacturers.html">Granity</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Marmor</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Marmur</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Marmury</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Sandstein</a></h3> 
| <h3><a href="quartzite-tile-suppliers.html">Quarzit</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Kamien Naturalny</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Pedra Arenito</a></h3> 
| <h3><a href="granite-slabs-manufacturers.html">Granito</a></h3> 
| <h3><a href="quartzite-tile-suppliers.html">Quartzito</a></h3> 
| <h3><a href="granite-slabs-manufacturers.html">Graniet</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Marmeren</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Marbre</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Marmoles</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Marmair</a></h3> 
| <h3><a href="granite-slabs-manufacturers.html">Granitos</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Marmo</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Marmors</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Mramor</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Marmura</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Mármore</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Mermer</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">Мрамор</a></h3> 
| <h3><a href="granite-slabs-manufacturers.html">гранит</a></h3> 
| <h3><a href="index.html">камень</a></h3> 
| <h3><a href="marble-slabs-manufacturers.html">marmori</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">pavimentazione</a></h3> 
| <h3><a href="slate-tiles-exporters.html">stenfiner</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">sandsteinkugel</a></h3> 
| <h3><a href="slate-tiles-exporters.html">dachówka</a></h3> 
| <h3><a href="slate-tiles-exporters.html">okładziny kamienne</a></h3> 
| <h3><a href="slate-tiles-exporters.html">kamień formatowany</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Mermer lupkiwapienie</a></h3> 
| <h3><a href="slate-tiles-exporters.html">Pizarra</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Piedra Natural</a></h3> 
| <h3><a href="limestone-paving-suppliers.html">Calizas</a></h3> 
| <h3><a href="granite-slabs-manufacturers.html">Schody</a></h3> 
| <h3><a href="index.html">Indie</a></h3> 
| <h3><a href="index.html">Pietre</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Naturstein Sandstein</a></h3> 
| <h3><a href="index.html">Indien</a></h3> 
| <h3><a href="index.html">Inde</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Naturstein</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Pedra Arenito</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Pietra Natural</a></h3> 
| <h3><a href="index.html">Indija</a></h3> 
| <h3><a href="quartzite-tile-suppliers.html">Cuarcita</a></h3> 
| <h3><a href="index.html">Indië</a></h3> 
| <h3><a href="quartzite-tile-suppliers.html">Kvartsit</a></h3> 
| <h3><a href="basalt-stone-suppliers-india.html">Basalto</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Arenisca</a></h3> 
| <h3><a href="slate-tiles-exporters.html">Schiefer</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Kamien Naturalny</a></h3> 
| <h3><a href="quartzite-tile-suppliers.html">Kwarcyt</a></h3> 
| <h3><a href="slate-tiles-exporters.html">Lupki</a></h3> 
| <h3><a href="sandstone-paving-suppliers.html">Piaskowce</a></h3> 
| <h3><a href="semi-precious-stone-slabs.html">Halbedelstein Platten</a></h3>
</div>
</div>
</div>
</div> -->

@endsection

@section('footer_script')
<script>
    var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>
@endsection