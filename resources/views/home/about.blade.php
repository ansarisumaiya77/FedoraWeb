@extends('layout.website')
@section('title')
About us
@endsection

@section('WebsiteSection')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(website/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>About Us</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Testimonial Section Two-->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Testimonial</span>
                <h2>What Clients Says</h2>
            </div>

            <div class="testimonial-carousel-two owl-carousel owl-theme">
                <!-- Testimonial block two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">I got an excellent design for my future home, from cooperation i was very pleased, everything was done at the highest level.Boldly I recommend to all this company.</div>
                        <div class="info-box">
                            <div class="thumb"><img src={{asset("website/images/resource/thumb-2.jpg")}} alt=""></div>
                            <h5 class="name">Elena Gomes</h5>
                            <span class="date">July 28 - 2018</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial block two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">I got an excellent design for my future home, from cooperation i was very pleased, everything was done at the highest level.Boldly I recommend to all this company.</div>
                        <div class="info-box">
                            <div class="thumb"><img src={{asset("website/images/resource/thumb-3.jpg")}} alt=""></div>
                            <h5 class="name">Aliza Norka</h5>
                            <span class="date">July 28 - 2018</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial block two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">I got an excellent design for my future home, from cooperation i was very pleased, everything was done at the highest level.Boldly I recommend to all this company.</div>
                        <div class="info-box">
                            <div class="thumb"><img src={{asset("website/images/resource/thumb-2.jpg")}} alt=""></div>
                            <h5 class="name">Elena Gomes</h5>
                            <span class="date">July 28 - 2018</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial block two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">I got an excellent design for my future home, from cooperation i was very pleased, everything was done at the highest level.Boldly I recommend to all this company.</div>
                        <div class="info-box">
                            <div class="thumb"><img src={{asset("website/images/resource/thumb-3.jpg")}} alt=""></div>
                            <h5 class="name">Aliza Norka</h5>
                            <span class="date">July 28 - 2018</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section Two-->

    <!-- Fun Fact And Features -->
    <section class="fun-fact-and-features alternate"  style="background-image: url(website/images/background/3.jpg);">
        <div class="outer-box">
            <div class="auto-container">
                <!-- Fact Counter -->
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

                <!-- Features -->
                <div class="features">
                    <div class="row">
                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-decorating"></span></div>
                                <h3><a href="service-detail.html">Perfect Design</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-plan"></span></div>
                                <h3><a href="service-detail.html">Carefully Planned</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-sketch-3"></span></div>
                                <h3><a href="service-detail.html">Smartly Execute</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- Process Section -->
    <section class="process-section w-100" style="background-image: url(website/images/background/8.jpg); width:100%;">
        <div class="auto-container">
            <div class="sec-title light">
                <span class="float-text">HOW WE WORK</span>
                <h2>Proven Process</h2>
            </div>
            <div class="row">
                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">01</span>
                        <h4><a href="service-detail.html">Concept</a></h4>
                        <div class="text">When an unknown printer took a galley of type and scrambled it to make a book.</div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">02</span>
                        <h4><a href="service-detail.html">Idea</a></h4>
                        <div class="text">When an unknown printer took a galley of type and scrambled it to make a book.</div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">03</span>
                        <h4><a href="service-detail.html">Design</a></h4>
                        <div class="text">When an unknown printer took a galley of type and scrambled it to make a book.</div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">04</span>
                        <h4><a href="service-detail.html">excecution</a></h4>
                        <div class="text">When an unknown printer took a galley of type and scrambled it to make a book.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Process Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Our Team</span>
                <h2>Project Expert</h2>
            </div>

            <div class="row clearfix">
                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><img src={{asset("website/images/resource/team-1.jpg")}} alt=""></div>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                            <h3 class="name"><a href="team.html">Scott Grey</a></h3>
                        </div>
                        <span class="designation">Architect</span>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><img src={{asset("website/images/resource/team-2.jpg")}} alt=""></div>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                            <h3 class="name"><a href="team.html">Russel Reed</a></h3>
                        </div>
                        <span class="designation">Project Manager</span>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><img src={{asset("website/images/resource/team-3.jpg")}} alt=""></div>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                            <h3 class="name"><a href="team.html">Cheryl Ray</a></h3>
                        </div>
                        <span class="designation">Interior Designer</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Team Section -->

    <!-- Video Section -->
    <section class="video-section style-two">
        <div class="outer-box">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="float-text">See Video</span>
                                <h2>Campaign Video</h2>
                            </div>
                            <span class="title">We Give You The Best</span>
                            <div class="text">Present all the speakers and participants in GenesisExpo`s beautiful layouts. Choose your favorite variant of layout and create your own. You can create also single speaker profile with all relevant information.</div> 
                        </div>
                    </div>

                    <!-- Video Column -->
                    <div class="video-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="video-box">
                                    <figure class="image"><img src={{asset("website/images/resource/video-img.jpg")}} alt="">
                                    <a href="https://www.youtube.com/watch?v=-aBemPGizkc" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play"></span></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Video Section -->
    

@endsection