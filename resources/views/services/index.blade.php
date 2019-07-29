@extends('layouts.app')
@section('content')
@include('layouts.header')
<!--======================Cover Header==============-->
<div class="cover" style="background-image: url('http://rel.resultspw.com/images/medium-hero.jpg');">
    <div class="cover-content">
        <h3 class="title">
            Services
        </h3>
        <div class="subtitle">Look at how he moves. How he shakes his cute little bum in the water as he fluffs himself. Look at it!</div>
    </div>
</div>
<!--======================End of Cover Header==============-->
    {{--  Services Container  --}}

    <!--================== SERVICES SECTION ====================-->
    <div id="testimonial" class="testimonial-section section-padding">
        <div class="container">
           <div class="row">
               <div class="col-md-12 text-center">
                  <div class="section-title">
                   <h2>Our Services</h2>
                   </div>
               </div>
           </div>
          <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-list">
                        <div class="">
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="single_blog_item_div image_fulwidth text-center">
                                            <a href="#"><img alt="images" src="{{ asset('images/test.jpg') }}"></a>
                                            <div class="single_bloG_item_content para_default">
                                                <h3>Self Motivation</h3>
                                                <p>The shore hat this group would how form a family right.</p>
                                            </div>
                                        </div>
                                        </div>
                        </div>
                        <div class="">
                                <div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="single_blog_item_div image_fulwidth text-center">
                                        <a href="#"><img alt="images" src="{{ asset('images/test.jpg') }}"></a>
                                        <div class="single_bloG_item_content para_default">
                                            <h3>Self Motivation</h3>
                                            <p>The shore hat this group would how form a family right.</p>
                                        </div>
                                    </div>
                                    </div>
                       </div>
                        <div class="">
                            <div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="single_blog_item_div image_fulwidth text-center">
                                    <a href="#"><img alt="images" src="{{ asset('images/test.jpg') }}"></a>
                                    <div class="single_bloG_item_content para_default">
                                        <h3>Self Motivation</h3>
                                        <p>The shore hat this group would how form a family right.</p>
                                    </div>
                                </div>
                                </div>
                       </div>
                       <div class="">
                        <div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="single_blog_item_div image_fulwidth text-center">
                                <a href="#"><img alt="images" src="{{ asset('images/test.jpg') }}"></a>
                                <div class="single_bloG_item_content para_default">
                                    <h3>Self Motivation</h3>
                                    <p>The shore hat this group would how form a family right.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="">
                        <div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="single_blog_item_div image_fulwidth text-center">
                            <a href="#"><img alt="images" src="{{ asset('images/test.jpg') }}"></a>
                            <div class="single_bloG_item_content para_default">
                                <h3>Self Motivation</h3>
                                <p>The shore hat this group would how form a family right.</p>
                            </div>
                        </div>
                        </div>
                       </div>
                    </div>
                </div>
            </div> <!-- / row -->
            </div>
        </div>
    <!--============== END SERVICES SECTION ===============-->

@include('layouts.footer')
@endsection
