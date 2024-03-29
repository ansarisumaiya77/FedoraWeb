@extends('layout.website')
@section('title')
FAQ's
@endsection
@section('WebsiteSection')

    <!--Page Title-->
    <section class="page-title img-fluid" style="background-image:url(website/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Frequently Asked Question</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="#">Home</a></li>
                    <li>FAQ's</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Faq Question -->
    <div class="row justify-content-center my-5">
        <div class="accordion-column col-lg-8 col-md-12 col-sm-12">
            <div class="inner-column">
                <div class="sec-title">
                    <span class="float-text">some FAQ’s</span>
                    <h2>Frequently Asked Question</h2>
                </div>
                <ul class="accordion-box">
                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn">Do you do the design and the execution yourselves? <div class="icon fa fa-plus-square"></div></div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">We give a Contra for a Period of 5 years and promise to rectify any fault arising out of faulty workmanship at our cost. However the guarantee does not hold good for mishandling and breakable items.</div>
                            </div>
                        </div>
                    </li>
    
                    <!--Block-->
                    <li class="accordion block active-block">
                        <div class="acc-btn active">Do you give Contra and After sales service? <div class="icon fa fa-plus-square"></div></div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">We give a Contra for a Period of 5 years and promise to rectify any fault arising out of faulty workmanship at our cost. However the guarantee does not hold good for mishandling and breakable items.</div> 
                            </div>
                        </div>
                    </li>
                    
                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn">Will you be able to give a quote, if given the floor plan? <div class="icon fa fa-plus-square"></div></div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">We give a Contra for a Period of 5 years and promise to rectify any fault arising out of faulty workmanship at our cost. However the guarantee does not hold good for mishandling and breakable items.</div> 
                            </div>
                        </div>
                    </li>
    
                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn">At what stage an interior designing work could be started?<div class="icon fa fa-plus-square"></div></div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">We give a Contra for a Period of 5 years and promise to rectify any fault arising out of faulty workmanship at our cost. However the guarantee does not hold good for mishandling and breakable items.</div> 
                            </div>
                        </div>
                    </li>
    
                    <!--Block-->
                    <li class="accordion block mb-5">
                        <div class="acc-btn">Do you charge for giving a Proposal?<div class="icon fa fa-plus-square"></div></div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">We give a Contra for a Period of 5 years and promise to rectify any fault arising out of faulty workmanship at our cost. However the guarantee does not hold good for mishandling and breakable items.</div> 
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>     
    </div>
    <!-- End Faq Question -->

    <!-- Faq Form Section -->
    <section class="faq-form-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Question</span>
                <h2>Ask Your Frequently Question</h2>
            </div>


            <!-- Faq Form -->
            <div class="faq-form">
                <form method="post" action="https://expert-themes.com/html/contra/index.html">
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-12">
                            <input type="text" name="username" placeholder="Name" required>
                        </div>
                        
                        <div class="form-group col-lg-6 col-md-12">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>

                        <div class="form-group col-lg-12 col-md-12">
                            <textarea name="message" placeholder="Massage"></textarea>
                        </div>
                        
                        <div class="form-group col-lg-12 col-md-12">
                            <button class="theme-btn btn-style-three" type="submit" name="submit-form">Submit</button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Contact Section -->

@endsection