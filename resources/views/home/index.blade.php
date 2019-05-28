@extends('layout.website')
@section('title')
Fedora
@endsection

@section('WebsiteSection')

    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <div class="slide-item" style="background-image: url(website/images/main-slider/image-1.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Architecture is a <br> Visual Art.</h2>
                        <div class="text">The buildings speak for themselves</div>
                        <div class="link-box">
                            <a href="about.html" class="theme-btn btn-style-one">Check Art</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item" style="background-image: url(website/images/main-slider/image-2.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Architecture is a <br> Visual Art.</h2>
                        <div class="text">The buildings speak for themselves</div>
                        <div class="link-box">
                            <a href="about.html" class="theme-btn btn-style-one">Check Art</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item" style="background-image: url(website/images/main-slider/image-3.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Architecture is a <br> Visual Art.</h2>
                        <div class="text">The buildings speak for themselves</div>
                        <div class="link-box">
                            <a href="about.html" class="theme-btn btn-style-one">Check Art</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-box">
            <div class="auto-container clearfix">
                <ul class="contact-info">
                    <li><span>Phone :</span> (+84) 867-557-243</li>
                    <li><span>EMAIL :</span> <a href="#">Support@yourdomain.com</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->


    <!-- About Section -->
    <section class="about-section" style="background-image: url(website/images/background/1.jpg);">
        <div class="auto-container">
            <div class="row no-gutters">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                            <h2>ABOUT <br> US</h2>
                        </div>
                        <div class="image-box">
                            <figure class="alphabet-img wow fadeInRight"><img src={{asset("website/images/resource/alphabet-image.png")}} alt=""></figure>
                            <figure class="image wow fadeInRight" data-wow-delay='600ms'><img src={{asset("website/images/resource/image-1.jpg")}} alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="content-box">
                            <div class="title">
                                <h2>Any  Complexity <br>For Any Cat</h2>
                            </div>
                            <div class="text">Our company has many years experience and specializes in manufacturing, salling, serviceing and repairing cardan shafts (cardans) for various vehicles, technological equipment, tractor, special machinery and agricultural machinery of verious domestic and foreign manufacturers.</div>
                            <div class="link-box"><a href="about.html" class="theme-btn btn-style-one">About Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->
    
    <!-- Services Section -->
    <section class="services-section col-md-12 col-xs-12">
        <div class="upper-box" style="background-image: url(website/images/background/2.jpg);">
            <div class="auto-container">    
                <div class="sec-title text-center light">
                    <span class="float-text">Specialization</span>
                    <h2>Our Specialization</h2>
                </div>
            </div>
        </div>

        <div class="services-box">
            <div class="auto-container">
                <div class="services-carousel owl-carousel owl-theme">
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src={{asset("website/images/resource/service-1.jpg")}} alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Architectural Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src={{asset("website/images/resource/service-2.jpg")}} alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Interior Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src={{asset("website/images/resource/service-3.jpg")}} alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Corporate Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src={{asset("website/images/resource/service-1.jpg")}} alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Architectural Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src={{asset("website/images/resource/service-2.jpg")}} alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Interior Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src={{asset("website/images/resource/service-3.jpg")}} alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Corporate Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src={{asset("website/images/resource/service-1.jpg")}} alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Architectural Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src={{asset("website/images/resource/service-2.jpg")}} alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Interior Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src={{asset("website/images/resource/service-3.jpg")}} alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Corporate Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->
    <!-- Fun Fact Section -->
    <div class="row justify-content-center">
        <div class="col-md-11 col-xs-12">
            <section class="fun-fact-section">
                <div class="outer-box" style="background-image: url(website/images/background/3.jpg);">
                    <div class="auto-container">
                        <div class="fact-counter">
                            <div class="row">
                                <!--Column-->
                                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                                    <div class="count-box">
                                        <div class="count"><span class="count-text" data-speed="5000" data-stop="14">0</span></div>
                                        <h4 class="counter-title">Years of <br>Experience</h4>
                                    </div>
                                </div>
        
                                <!--Column-->
                                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="count-box">
                                        <div class="count"><span class="count-text" data-speed="5000" data-stop="237">0</span></div>
                                        <h4 class="counter-title">Project <br>Taken</h4>
                                    </div>
                                </div>
        
                                <!--Column-->
                                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                                    <div class="count-box">
                                        <div class="count"><span class="count-text" data-speed="5000" data-stop="11">0</span>K</div>
                                        <h4 class="counter-title">Twitter <br> Follower</h4>
                                    </div>
                                </div>
        
                                <!--Column-->
                                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                                    <div class="count-box">
                                        <div class="count"><span class="count-text" data-speed="5000" data-stop="12">0</span></div>
                                        <h4 class="counter-title">Awards<br>won</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
        </div>        
    </div>
    <!--End Fun Fact Section -->
    
    <!-- Project Section -->
    <section class="projects-section">
        <div class="auto-container">
            <div class="sec-title text-right">
                <span class="float-text">Project</span>
                <h2>Our Project</h2>
            </div>
        </div>
        
        <div class="inner-container">
            <div class="projects-carousel owl-carousel owl-theme">
                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src={{asset("website/images/gallery/1.jpg")}} alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.html">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src={{asset("website/images/gallery/2.jpg")}} alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.html">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src={{asset("website/images/gallery/3.jpg")}} alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.html">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src={{asset("website/images/gallery/4.jpg")}} alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.html">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src={{asset("website/images/gallery/5.jpg")}} alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.html">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src={{asset("website/images/gallery/3.jpg")}} alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.html">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Project Section -->
            
    <!-- Testimonial Section -->
    <section class="testimonial-section mt-5">
        <div class="outer-container clearfix">
            <!-- Title Column -->
            <div class="title-column clearfix">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">testimonial</span>
                        <h2>What Client Says</h2>
                    </div>
                    <div class="text">Looking at its layout. The point of using very profectly is that it has a more-or-less normal distribution of letters, as opposed</div>
                </div>
            </div>

            <!-- Testimonial Column -->
            <div class="testimonial-column clearfix" style="background-image: url(website/images/background/4.jpg);">
                <div class="inner-column">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img src={{asset("website/images/resource/thumb-1.jpg")}} alt=""></div>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                <div class="info-box">
                                    <h4 class="name">Jane Smith</h4>
                                    <span class="designation">CEO, InDesign</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img src={{asset("website/images/resource/thumb-1.jpg")}} alt=""></div>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                <div class="info-box">
                                    <h4 class="name">Jane Smith</h4>
                                    <span class="designation">CEO, InDesign</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img src={{asset("website/images/resource/thumb-1.jpg")}} alt=""></div>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                <div class="info-box">
                                    <h4 class="name">Jane Smith</h4>
                                    <span class="designation">CEO, InDesign</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->
     
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
        
        
@endsection