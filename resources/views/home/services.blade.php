@extends('layout.website')
@section('title')
Services
@endsection

@section('WebsiteSection')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(website/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Services</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Features -->
    <div class="features">
        <div class="row justify-content-center mt-5">
            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon flaticon-decorating"></span></div>
                    <h3>Perfect Design</h3>
                    <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon flaticon-plan"></span></div>
                    <h3>Carefully Planned</h3>
                    <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon flaticon-sketch-3"></span></div>
                    <h3>Smartly Execute</h3>
                    <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Features -->

    <!-- Specialize Section -->
    <section class="specialize-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Services</span>
                <h2>Our Specialization</h2>
            </div>

            <div class="services-carousel-two owl-carousel owl-theme">
                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src={{asset("website/images/resource/service-4.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">ARCHITECTURE DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src={{asset("website/images/resource/service-5.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">INTERIOR DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src={{asset("website/images/resource/service-6.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">COMMERCIAL DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src={{asset("website/images/resource/service-7.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">LANDSCAPE DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src={{asset("website/images/resource/service-4.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">ARCHITECTURE DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src={{asset("website/images/resource/service-5.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">INTERIOR DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src={{asset("website/images/resource/service-6.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">COMMERCIAL DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src={{asset("website/images/resource/service-7.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">LANDSCAPE DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src={{asset("website/images/resource/service-4.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">ARCHITECTURE DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src={{asset("website/images/resource/service-5.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">INTERIOR DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src={{asset("website/images/resource/service-6.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">COMMERCIAL DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><a href="services.html"><img src="{{asset("website/images/resource/service-7.jpg")}} alt=""></a></figure></div>
                        <div class="caption-box">
                            <h3><a href="services.html">LANDSCAPE DESIGN</a></h3>
                            <div class="link-box"><a href="service-detail.html">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Specialize Section -->

    <!-- Specialize Section -->
    {{-- <section class="specialize-section-two alternate mb-5" style="margin-top:-20px">
        <div class="auto-container">
            <div class="row">
                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text">Services</span>
                            <h2>Our Specialization</h2>
                        </div>

                        <div class="text-box">
                            <h4>Architectural Design</h4>
                            <p>Quality over quantity, so the saying goes. With so many concepts floating around the architectural profession, it can be difficult to keep up with all the ideas which you’re expected to know.</p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.It has survived not only five centuries. When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="link-box">
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href={{asset("website/images/resource/special-4.jpg")}} class="lightbox-image" title="Image Caption Here"><img src="images/resource/special-4.jpg" alt=""></a></li>
                                <li><a href={{asset("website/images/resource/special-2.jpg")}} class="lightbox-image" title="Image Caption Here"><img src="images/resource/special-2.jpg" alt=""></a></li>
                                <li><a href={{asset("website/images/resource/special-3.jpg")}} class="lightbox-image" title="Image Caption Here"><img src="images/resource/special-3.jpg" alt=""></a></li>
                                <li><a href={{asset("website/images/resource/special-1.jpg")}} class="lightbox-image" title="Image Caption Here"><img src="images/resource/special-1.jpg" alt=""></a></li>
                                <li><a href={{asset("website/images/resource/special-4.jpg")}} class="lightbox-image" title="Image Caption Here"><img src="images/resource/special-4.jpg" alt=""></a></li>
                                <li><a href={{asset("website/images/resource/special-2.jpg")}} class="lightbox-image" title="Image Caption Here"><img src="images/resource/special-2.jpg" alt=""></a></li>
                                <li><a href={{asset("website/images/resource/special-3.jpg")}} class="lightbox-image" title="Image Caption Here"><img src="images/resource/special-3.jpg" alt=""></a></li>
                                <li><a href={{asset("website/images/resource/special-1.jpg")}} class="lightbox-image" title="Image Caption Here"><img src="images/resource/special-1.jpg" alt=""></a></li>
                            </ul>
                            
                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img src={{asset("website/images/resource/special-thumb-3.jpg")}} alt=""></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img src={{asset("website/images/resource/special-thumb-1.jpg")}} alt=""></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img src={{asset("website/images/resource/special-thumb-2.jpg")}} alt=""></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img src={{asset("website/images/resource/special-thumb-4.jpg")}} alt=""></figure>
                                    <div class="overlay"><span class="icon fa fa-search"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img src={{asset("website/images/resource/special-thumb-3.jpg")}} alt=""></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img src={{asset("website/images/resource/special-thumb-1.jpg")}} alt=""></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img src={{asset("website/images/resource/special-thumb-2.jpg")}} alt=""></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <li class="thumb-box">
                                    <figure><img src={{asset("website/images/resource/special-thumb-4.jpg")}} alt=""></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
    <!-- End Specialize Section -->
    

@endsection