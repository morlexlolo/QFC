@extends('layouts.app')
@section('content')
@include('layouts.header')



<!--======================Cover Header==============-->
<div class="cover" style="background-image: url('http://rel.resultspw.com/images/medium-hero.jpg');">
    <div class="cover-content">
        <h3 class="title">
            Gallery
        </h3>
    </div>
</div>
<!--======================End of Cover Header==============-->

<section id="work" class="section-padding">
        <div class="container">

            <div class="work-inner wow fadeInUp" data-wow-delay="0.4s" id="MixItUp2EC339" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
            <div class="row">
                @forelse ($galleries as $gallery)
                      <div class="col-md-4 col-sm-6 single-work mix webdesign" style="display: inline-block;" data-bound="">
                    <div class="full-work">
                        <img src="{{ Voyager::image( $gallery->image)}}" alt="{{ $gallery->title }}">
                            <div class="itemHover">
                            <div class="work-table theme-color">
                                <div class="table-cell">
                                    <div class="hover-content">
                                       <p>{{ $gallery->title }}</p>
                                        <a href="{{ Voyager::image( $gallery->image)}}" class="image-popup theme-color"><i class="fa fa-eye fa-xl"></i></a>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

                @empty

                @endforelse



            </div><!--/.row-->
            </div>
        </div><!--/.container-->
    </section>


@include('layouts.footer')
@endsection
