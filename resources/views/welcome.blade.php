@extends('layouts.app')
@section('content')
@include('layouts.header')

@include('layouts.cover')
        <!--============ PORTFOLIO SECTION ===========-->
        <section id="work" class="section-padding">
        <div class="container">
            <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="section-title">
                           <h2>work.</h2>
                           <p>Heres some of my recent work from my portfolio</p>
                       </div>
                    </div>
                </div>

                <div class="row">
                <ul class="work">
                    <li class="filter theme-color active" data-filter="all">all</li>
                    <li class="filter theme-color" data-filter=".webdesign">web design</li>
                    <li class="filter theme-color" data-filter=".development">development</li>
                    <li class="filter theme-color" data-filter=".graphic">graphic design</li>
                </ul>
            </div>

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
        </div><!--/.container-->
    </section>
    <!--============== END PORTFOLIO SECTION ===================-->


     <!--====== QUOTES AREA =====-->
        <div class="quotes-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="quotes-content text-center">
                           <h3>Lets work together!</h3>
                            <p>I am available for freelance projects.</p>
                            <a class="scroll-btn btn theme-color" href="#contact">Get Quotes</a>
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </div>
        <!--====== END QUOTES AREA =======-->


    <!--================== TESTIMONIAL SECTION ====================-->
        <div id="testimonial" class="testimonial-section section-padding">
            <div class="container">
               <div class="row">
                   <div class="col-md-12 text-center">
                      <div class="section-title">
                       <h2>What people say.</h2>
                       </div>
                   </div>
               </div>

              <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-list">
                            <div class="single-testimonial">
                                <div class="t-author">
                                   <div class="t-image">
                                        <img src="assets/images/testimonial/1.jpg" alt="">
                                    </div>
                                    <div class="t-name">
                                        <h4>jhon doe</h4>
                                        Graphic Designer
                                    </div>
                                </div>
                                <div class="t-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adiping elit, sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam.</p>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="t-author">
                                    <div class="t-image">
                                        <img src="assets/images/testimonial/2.jpg" alt="">
                                    </div>
                                    <div class="t-name">
                                        <h4>jhon doe</h4>
                                        Graphic Designer
                                    </div>
                                </div>
                                <div class="t-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adiping elit, sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam.</p>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="t-author">
                                    <div class="t-image">
                                        <img src="assets/images/testimonial/3.jpg" alt="">
                                    </div>
                                    <div class="t-name">
                                        <h4>jhon doe</h4>
                                        Graphic Designer
                                    </div>
                                </div>
                                <div class="t-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adiping elit, sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam.</p>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="t-author">
                                    <div class="t-image">
                                        <img src="assets/images/testimonial/4.jpg" alt="">
                                    </div>
                                    <div class="t-name">
                                        <h4>jhon doe</h4>
                                        Graphic Designer
                                    </div>
                                </div>
                                <div class="t-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adiping elit, sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- / row -->
                </div>
            </div>
        <!--============== END TESTIMONIAL SECTION ===============-->



@include('layouts.footer')
@endsection
