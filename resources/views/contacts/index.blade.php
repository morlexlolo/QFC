@extends('layouts.app')
@section('content')
@include('layouts.header')

         <!--================ CONTACT INFO SECTION =================-->
        <section id="contact" class="contact-info-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="section-title">
                       <h2>contact.</h2>
                       <p>lets work together projects and just send me email here</p>
                       </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                          <div class="contact-form">
                            <form id="contact-form" method="post" action="contact.php" role="form">

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Name*" required="required" data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email*" required="required" data-error="Valid email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Message*" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-effect theme-color btn-send" value="Send message">
                                        </div>
                                    </div>
                                </div>

                            </form>
                          </div>
                     </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="full-adress">
                            <div class="contact-padding col-md-12">
                                <p class="phone">Phone: <a href="tel:+444123456">+44 4123456</a></p>
                            </div>
                            <div class="contact-padding col-md-12">
                                <p class="mail">Email: <a href="mailto:willey@yourdomain.com">mail@yourdomain.com</a></p>
                            </div>
                            <div class="contact-padding col-md-12">
                                <p class="adress">Address: Bak-One Company<br>12345 Hollywood Bvld Street<br> Los Angeles, California</p>
                            </div>
                        </div>
                    </div>

                 </div><!--/.row-->
            </div><!--/.container-->
        </section>
        <!--================= END CONTACT INFO SECTION ===============-->

@include('layouts.footer')
@endsection
