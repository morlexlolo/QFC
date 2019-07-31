@extends('layouts.app')
@section('content')
@include('layouts.header')
<!--======================Cover Header==============-->
<div class="cover" style="background-image: url('http://rel.resultspw.com/images/medium-hero.jpg');">
    <div class="cover-content">
        <h3 class="title">
            Services
        </h3>
    </div>
</div>
<!--======================End of Cover Header==============-->



    <!--================== TESTIMONIAL SECTION ====================-->
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
                        @forelse($services as $service)
                            <div class="">
                                <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                    <div class="single_blog_item_div image_fulwidth text-center">
                                        <a href="{{ route('services.show',$service->slug) }}"><img alt="{{ $service->title }}" src="{{ Voyager::image( $service->image)}}"></a>
                                        <div class="single_bloG_item_content para_default">
                                            <a href="{{ route('services.show',$service->slug) }}"><h3>{{ $service->title }}</h3></a>
                                            <p> {!!  substr(strip_tags($service->content),0,120) !!}...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        <p>No service at the moment.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== END TESTIMONIAL SECTION ===============-->

@include('layouts.footer')
@endsection
