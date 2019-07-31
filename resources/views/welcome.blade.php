@extends('layouts.app')
@section('content')
@include('layouts.header')

@include('layouts.cover')


<section class="section_all bg-light" id="about">
        <div class="container">
                <div class="row">
                        <div class="col-md-12 text-center">
                           <div class="section-title">
                            <h2>About QFC</h2>
                            </div>
                        </div>
                </div>
            <div class="row vertical_content_manage mt-5">
                <div class="col-lg-6">
                    <div class="about_header_main mt-3">
                        <div class="about_icon_box">
                            <p class="text_custom font-weight-bold">Lorem Ipsum is simply dummy text</p>
                        </div>
                        <h4 class="about_heading text-capitalize font-weight-bold mt-4">Lorem Ipsum is simply dummy text of the printing industry.</h4>
                        <p class="text-muted mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        <p class="text-muted mt-3"> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img_about mt-3">
                        <img src="https://i.ibb.co/qpz1hvM/About-us.jpg" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="about_content_box_all">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                <i class="fa fa-certificate"></i>
                            </div>
                            <h5 class="">Legitimate</h5>
                            <p class="edu_desc mt-3 mb-0 text-muted">Licensed by the capital martkets authority of Kenya as Financial and Investment Analysts . </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="about_content_box_all mt-3">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                    <i class="fa fa-address-card-o"></i>
                            </div>
                            <h5 class="text-dark text-capitalize mt-3 font-weight-bold">We make Best Result</h5>
                            <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="about_content_box_all mt-3">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                <i class="fa fa-pie-chart"></i>
                            </div>
                            <h5 class="text-dark text-capitalize mt-3 font-weight-bold">best platform </h5>
                            <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--  Services Container  --}}

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
                                            <p>The shore hat this group would how form a family right.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h3>No service at the moment.</h3>
                        @endforelse
                    </div>
                </div>
            </div> <!-- / row -->
            </div>
        </div>
    <!--============== END TESTIMONIAL SECTION ===============-->



     <!--====== QUOTES AREA =====-->
        <div class="quotes-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="quotes-content text-center">
                           <h3>Well get in touch with you</h3>
                           <p>Let us choose the most suitable solution for you.</p>
                            <a class="scroll-btn btn theme-color" href="">Contact us</a>
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </div>
        <!--====== END QUOTES AREA =======-->
@include('layouts.footer')
@endsection
