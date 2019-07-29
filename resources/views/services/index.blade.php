@extends('layouts.app')
@section('content')
@include('layouts.header')



                <br>
                <br>
                <br>
                <br>


        <!--================= SERVICES SECTION ==============-->
        <section id="services" class="services-section scontactection-padding">
            <div class="container">
                <br>
                <br>
                <br>
                <br>

                <div class="row">
                    @forelse($services as $service)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-service text-center">
                                <div class="servise-icon theme-color">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>{!! $service->title !!}</h4>
                                <p>{!!  substr(strip_tags($service->content), 0, 50) !!}...</p>
                            </div>
                        </div>
                    @empty
                        <h2>No service at the moment.</h2>
                    @endforelse


                </div><br><br>

            </div><!--/.container-->
        </section>
        <!--=============== END SERVICES SECTION =================-->

@include('layouts.footer')
@endsection
