@extends('layouts.app')
@section('content')
@include('layouts.header')
<!--======================Cover Header==============-->

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
     @forelse ($services as $key => $slider)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
        <img src="{{ Voyager::image( $slider->image)}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $slider->title }}</h5>
           <button type="button" class="btn  btn-outline-light"><a href="{{ route('services.show',$slider->slug) }}">Read More</a></button>
        </div>
      </div>
     @empty
     @endforelse
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--======================End of Cover Header==============-->
    <!--================== TESTIMONIAL SECTION ====================-->
     <section  class="contact-info-section section-padding">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="full-adress">
                            <h2>Our Services</h2>
                                 <div class="contact-padding col-md-12">
                                      <ul class="services-list">
                                @forelse ($servicesList as $service)
                                <li><a href="{{ route('services.show',$service->slug) }}">{{ $service->title }}</a></li>
                                @empty
                                <li>No services yet!</li>
                                @endforelse
                                </ul>
                                  </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                  @foreach ($serviceCatItem as $ser)
                  <h3>{{ $ser->title }}</h3>
                          <p>{!! $ser->content !!}</p>
                  @endforeach
                     </div>
                 </div><!--/.row-->
            </div><!--/.container-->
        </section>
    <!--============== END TESTIMONIAL SECTION ===============-->
@include('layouts.footer')
@endsection
