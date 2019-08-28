@extends('layouts.app')
@section('content')
@include('layouts.header')

<!--======================Cover Header==============-->
{{--  <div class="cover" style="background-image: url('http://rel.resultspw.com/images/medium-hero.jpg');">
    <div class="cover-content">
        <h3 class="title">
            About us
        </h3>
    </div>
</div>  --}}
<!--======================End of Cover Header==============-->
        <!--============= ABOUT SECTION =============-->
        <section id="about" class="about-section section-padding">
            <div class="container">
                <div class="row">
                  @forelse ($abouts as $ab)
                    <div class="col-md-12">
                       <div class="about-text wow fadeInRight" data-wow-delay="0.2s">
                            <h3 class="theme-color">{{$ab->title}}</h3>
                           <p>{!! $ab->content!!}</p>
                        </div>
                    </div>
                    @empty
                <h4 align="center">There is no content at moment!</h4>
            @endforelse

                </div><!--/.row-->
            </div><!--/.container-->
        </section>
        <!--============= END ABOUT SECTION =============-->

@include('layouts.footer')
@endsection
