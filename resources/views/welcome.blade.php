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
            <div class="row vertical_content_manage">
                <div class="col-lg-6">
                    <div class="about_header_main mt-3">
                        <p class="text-muted mt-3">Quantum Financials is a global leader in investment services, offering financial and investment solutions to both individuals and corporations across the globe. 
                         Licensed by the Capital Markets Authority of Kenya as Financial and Investment Analysts, we have a great passion for finding lucrative investment opportunities where we have an unparalleled edge through a meticulously developed position of knowledge in all our active sectors and an uncanny ability to identify opportunity giving us first mover’s advantage.
                         Our goal is to offer all our clients a transparent and collaborative approach to Investment that is founded on fidelity, prudence, mastery and rigorous execution of  our unique strategies with an aim not only limited to yield high-returns and risk managed deals but fosters our core value – TRUST.
                         Our success has been bolstered by a well-respected track record that includes collaborations with global hedge funds therein offering an exceptional network of universal opportunities in our diverse investment portfolio.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img_about ">
                        <img src="https://i.ibb.co/qpz1hvM/About-us.jpg" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="about_content_box_all mt-3">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                <i class="fa fa-certificate"></i>
                            </div>
                            <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Advanced Financial Planning</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="about_content_box_all mt-3">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                    <i class="fa fa-line-chart"></i>
                            </div>
                            <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Robust investing</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="about_content_box_all mt-3">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                <i class="fa fa-pie-chart"></i>
                            </div>
                            <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Unmatched Market Edge </h5>
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
                                          <p> {!!  substr(strip_tags($service->content),0,120) !!}...</p>
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

<section class="market">
 <div class="container">
       <div class="row">
                        <div class="col-md-12 text-center">
                           <div class="section-title">
                            <h2>Markets summery analysis</h2>
                            </div>
                        </div>
       </div>
  <div class="row">
    <div class="col-sm">
     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Top Gainers</th>
      <th scope="col">Price(KES)</th>
      <th scope="col">Change(%)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>4.50</td>
      <td><span class="badge badge-success">+ 5.16 </span> <i style="color:green" class="fa fa-angle-up fa-lg"></i></td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>30.0</td>
      <td><span class="badge badge-success">+ 5.16 </span> <i style="color:green" class="fa fa-angle-up fa-lg"></i></td>
    </tr>
    <tr>
      <td>Larry</td>
      <td>2.75</td>
      <td><span class="badge badge-success">+ 5.16 </span> <i style="color:green" class="fa fa-angle-up fa-lg"></i></td>
    </tr>
  </tbody>
</table>
    </div>
    <div class="col-sm">
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Lossers</th>
      <th scope="col">Price(KES)</th>
      <th scope="col">Change(%)</th>
    </tr>
  </thead>
   <tbody>
    <tr>
      <td>Mark</td>
      <td>3.23</td>
      <td><span class="badge badge-danger">- 3.46 </span> <i style="color:red" class="fa fa-angle-down fa-lg"></i></td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>3.05</td>
      <td><span class="badge badge-danger">- 4.16 </span> <i style="color:red" class="fa fa-angle-down fa-lg"></i></td>
    </tr>
    <tr>
      <td>Larry</td>
      <td>2.05</td>
      <td><span class="badge badge-danger">- 5.16 </span> <i style="color:red" class="fa fa-angle-down fa-lg"></i></td>
    </tr>
  </tbody>
</table>
    </div>
    <div class="col-sm">
     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</div>
</section>


     <!--====== QUOTES AREA =====-->
        <div class="quotes-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="quotes-content text-center">
                           <h3>Well get in touch with you</h3>
                           <p>Let us choose the most suitable solution for you.</p>
                            <a class="scroll-btn btn theme-color" href="{{ route('contact') }}">Contact us</a>
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </div>
        <!--====== END QUOTES AREA =======-->
@include('layouts.footer')
@endsection
