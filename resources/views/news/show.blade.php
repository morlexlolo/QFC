@extends('layouts.app')
@section('content')
@include('layouts.header')
<!--======================Cover Header==============-->
<div class="cover" style="background-image: url('{{ Voyager::image( $new->image)}}');">
    <div class="cover-content">
        <h3 class="title">
            {{ $new->title }}
        </h3>
    </div>
</div>
<!--======================End of Cover Header==============-->

 <section  class="contact-info-section section-padding">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="full-adress">
                            <h2>More news</h2>
                                 <div class="contact-padding col-md-12">
                                      <ul class="services-list">
                                @forelse ($news as $item)
                                <li><a href="{{ route('news.show',$item->slug) }}">{{ $item->title }}</a></li>
                                @empty
                                <li>No services yet!</li>
                                @endforelse
                                </ul>
                                  </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>{!! $new->body !!}</p>
                     </div>
                 </div><!--/.row-->
            </div><!--/.container-->
        </section>
@include('layouts.footer')
@endsection





