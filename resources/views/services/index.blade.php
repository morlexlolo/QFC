@extends('layouts.app')
@section('content')
@include('layouts.header')

        <!--================= SERVICES SECTION ==============-->
        <section id="services" class="services-section scontactection-padding">
            <div class="container">
               <div class="row">
                   <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <div class="section-title">
                       <h2>what i do.</h2>
                       </div>
                   </div>
               </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-service text-center">
                            <div class="servise-icon theme-color">
                                <i class="fa fa-code"></i>
                            </div>
                            <h4>web design</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-service text-center">
                            <div class="servise-icon theme-color">
                                <i class="fa fa-wordpress"></i>
                            </div>
                            <h4>development</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-service text-center">
                            <div class="servise-icon theme-color">
                                <i class="fa fa-pencil-square"></i>
                            </div>
                            <h4>Graphic design</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-service text-center">
                            <div class="servise-icon theme-color">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <h4>UI/UX DESIGN</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                </div>

            </div><!--/.container-->
        </section>
        <!--=============== END SERVICES SECTION =================-->

@include('layouts.footer')
@endsection
