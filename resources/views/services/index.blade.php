@extends('layouts.app')
@section('content')
@include('layouts.header')
<!--======================Cover Header==============-->
<div class="mod-homepage-feature">
  <div id="home_feature" class="ft_left">
    <div class="hf_img_holder" style="background-image:url(http://rel.resultspw.com/images/medium-hero.jpg);"></div>
    <div class="container">
      <div id="feature_text" class="ft_left">
        {{--  <h2>Services</h2>  --}}
      </div>
    </div>
  </div>
</div>
<!--======================End of Cover Header==============-->
<div class="container">
    <div class="work-inner wow fadeInUp" data-wow-delay="0.4s">
            <div class="row">
                <div class="col-md-4 col-sm-6 single-work mix webdesign">
                    <div class="full-work">
                        <img src="assets/images/portfolio/item1.jpg" alt="">
                            <div class="itemHover">
                            <div class="work-table theme-color">
                                <div class="table-cell">
                                    <div class="hover-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                       <a href="#" class="theme-color"><i class="fa fa-link"></i></a>
                                        <a href="assets/images/portfolio/item1.jpg" class="image-popup theme-color"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 single-work mix webdesign">
                    <div class="full-work">
                        <img src="assets/images/portfolio/item2.jpg" alt="">
                            <div class="itemHover">
                            <div class="work-table theme-color">
                                <div class="table-cell">
                                    <div class="hover-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                       <a href="#" class="theme-color"><i class="fa fa-link"></i></a>
                                        <a href="assets/images/portfolio/item2.jpg" class="image-popup theme-color"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 single-work mix development">
                    <div class="full-work">
                        <img src="assets/images/portfolio/item3.jpg" alt="">
                            <div class="itemHover">
                            <div class="work-table theme-color">
                                <div class="table-cell">
                                    <div class="hover-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                       <a href="#" class="theworkme-color"><i class="fa fa-link"></i></a>
                                        <a href="assets/images/portfolio/item3.jpg" class="image-popup theme-color"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 single-work mix development">
                    <div class="full-work">
                        <img src="assets/images/portfolio/item4.jpg" alt="">
                            <div class="itemHover">
                            <div class="work-table theme-color">
                                <div class="table-cell">
                                    <div class="hover-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                       <a href="#" class="theme-color"><i class="fa fa-link"></i></a>
                                        <a href="assets/images/portfolio/item4.jpg" class="image-popup theme-color"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 single-work mix graphic">
                    <div class="full-work">
                        <img src="assets/images/portfolio/item5.jpg" alt="">
                            <div class="itemHover">
                            <div class="work-table theme-color">
                                <div class="table-cell">
                                    <div class="hover-content">content
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                       <a href="#" class="theme-color"><i class="fa fa-link"></i></a>
                                        <a href="assets/images/portfolio/item5.jpg" class="image-popup theme-color"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-work mix graphic">
                    <div class="full-work">
                        <img src="assets/images/portfolio/item6.jpg" alt="">
                            <div class="itemHover">
                            <div class="work-table theme-color">
                                <div class="table-cell">
                                    <div class="hover-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                       <a href="#" class="theme-color"><i class="fa fa-link"></i></a>
                                        <a href="assets/images/portfolio/item6.jpg" class="image-popup theme-color"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

            </div><!--/.row-->
            </div>
</div>

@include('layouts.footer')
@endsection
