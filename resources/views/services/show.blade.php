@extends('layouts.app')
@section('content')
@include('layouts.header')
<!--======================Cover Header==============-->
<div class="cover" style="background-image: url('{{ Voyager::image( $service->image)}}');">
    <div class="cover-content">
        <h3 class="title">
            {{ $service->title }}
        </h3>
    </div>
</div>
<!--======================End of Cover Header==============-->

 <section  class="contact-info-section section-padding">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="full-adress">
                            <h2>Our Services</h2>
                                  <div class="contact-padding col-md-12">
                                      <ul class="services-list">
                                @forelse ($services as $item)
                                <li><a href="{{ route('services.show',$item->slug) }}">{{ $item->title }}</a></li>
                                @empty
                                <li>No services yet!</li>
                                @endforelse
                                </ul>
                                  </div>
                        </div>
                        <div class="full-adress">
                            <h2>contact us</h2>
                             <div class="contact-padding col-md-12">
                                <p class="phone">Phone: <a href="tel:+444123456">+44 4123456</a></p>
                            </div>
                            <div class="contact-padding col-md-12">
                                <p class="mail">Email: <a href="mailto:info@qfc.com">info@qfc.com</a></p>
                            </div>
                            <div class="contact-padding col-md-12">
                                <p class="adress">Address: QFC Corp<br>62157-00200 T-MALL Langata Road Nairobi, Kenya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>{!! $item->content !!}</p>
                     </div>
                 </div><!--/.row-->
            </div><!--/.container-->
        </section>
@include('layouts.footer')
@endsection





