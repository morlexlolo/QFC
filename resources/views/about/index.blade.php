@extends('layouts.app')
@section('content')
@include('layouts.header')

<!--======================Cover Header==============-->
<div class="mod-homepage-feature">
  <div id="home_feature" class="ft_left">
    <div class="hf_img_holder" style="background-image:url(http://rel.resultspw.com/images/medium-hero.jpg);"></div>
    <div class="container">
      <div id="feature_text" class="ft_left">
        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
        <a style="background: #7C3273;" class="btn learn" href="/online/mobile_banking/">Learn More</a>
      </div>
    </div>
  </div>
</div>
<!--======================End of Cover Header==============-->

        <!--============= ABOUT SECTION =============-->
        <section id="about" class="about-section section-padding">
            <div class="container">
                <div class="row">
                  @forelse ($abouts as $ab)
                    <div class="col-md-4">
                        <div class="author-image wow fadeInLeft" data-wow-delay="0.2s">
                            <img src="assets/images/author.jpg" alt="Author Image"> <!--=== author image ===-->
                            <p>Johnathan Doe - <span class="theme-color">Web Developer</span></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                       <div class="about-text wow fadeInRight" data-wow-delay="0.2s">
                            <h3 class="theme-color">{{$ab->title}}</h3>
                           <p>{{$ab->content}}</p>
                           <div class="about-btn">
                               <a class="scroll-btn btn theme-color" href="#">Download Resume</a>
                               <a class="scroll-btn btn theme-color" href="#">Hire Me</a>
                           </div>
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
