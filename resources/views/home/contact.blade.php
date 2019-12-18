@extends('layout.website')
@section('title')
Contact us
@endsection

@section('WebsiteSection')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(website/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Contact Us</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row">
                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text">informaer</span>
                            <h2>Contact Us</h2>
                        </div>

                        <div class="contact-form">
                            <form method="post" action="/postcontact">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Message or Feedback"></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <input type="submit" class="theme-btn btn-style-three" value="Submit">
                                        {{-- <button class="theme-btn btn-style-three" type="submit" name="submit-form">Submit</button> --}}
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="contact-info">
                            <div class="row">
                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>Location</h4>
                                        <p>Complax interprice company, 882 street Latrobe, PA 15786</p>
                                    </div>
                                </div>

                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>Call Us</h4>
                                        <p>+88 169 787 5256</p>
                                        <p>+88 165 358 5678</p>
                                    </div>

                                </div>

                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>Email</h4>
                                        <p><a href="#">support@contra.com</a></p>
                                        <p><a href="#">info@contra.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="map-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                         <div class="map-outer">
                            <div class="map-canvas"
                                data-zoom="12"
                                data-lat="-37.817085"
                                data-lng="144.955631"
                                data-type="roadmap"
                                data-hue="#ffc400"
                                data-title="Envato"
                                data-icon-path="images/icons/map-marker.png"
                                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

    <!--Clients Section-->
    <section class="clients-section mt-5">
        <div class="inner-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src={{asset("website/images/clients/1.png")}} alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src={{asset("website/images/clients/2.png")}} alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src={{asset("website/images/clients/3.png")}} alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src={{asset("website/images/clients/4.png")}} alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src={{asset("website/images/clients/5.png")}} alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src={{asset("website/images/clients/1.png")}} alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src={{asset("website/images/clients/2.png")}} alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src={{asset("website/images/clients/3.png")}} alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src={{asset("website/images/clients/4.png")}} alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src={{asset("website/images/clients/5.png")}} alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

        
<!--Google Map APi Key-->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBjirg3UoMD5oUiFuZt3P9sErZD-2Rxc68"></script>
<script src={{asset("website/js/map-script.js")}}></script>
<!--End Google Map APi-->

@endsection