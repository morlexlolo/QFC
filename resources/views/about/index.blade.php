@extends('layouts.app')
@section('content')
@include('layouts.header')

<!--======================Cover Header==============-->
<div class="cover" style="background-image: url('http://rel.resultspw.com/images/medium-hero.jpg');">
    <div class="cover-content">
        <h3 class="title">
           About us
        </h3>
        <div class="subtitle">Look at how he moves. How he shakes his cute little bum in the water as he fluffs himself. Look at it!</div>
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
