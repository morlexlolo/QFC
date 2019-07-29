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
                    <div class="col-md-4">
                        <div class="author-image wow fadeInLeft" data-wow-delay="0.2s">
                            <img src="assets/images/author.jpg" alt="Author Image"> <!--=== author image ===-->
                            <p>Johnathan Doe - <span class="theme-color">Web Developer</span></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                       <div class="about-text wow fadeInRight" data-wow-delay="0.2s">
                            <h3 class="theme-color">Hello, that's me!</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                           <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                           <div class="about-btn">
                               <a class="scroll-btn btn theme-color" href="#">Download Resume</a>
                               <a class="scroll-btn btn theme-color" href="#">Hire Me</a>
                           </div>
                        </div>
                    </div>

                </div><!--/.row-->
            </div><!--/.container-->
        </section>
        <!--============= END ABOUT SECTION =============-->

@include('layouts.footer')
@endsection
