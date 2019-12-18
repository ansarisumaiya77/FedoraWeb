@extends('layout.website')
@section('title')
Booking Form
@endsection

@section('WebsiteSection')

        <!--Page Title-->
        <section class="page-title" style="background-image:url(website/images/background/10.jpg);">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Projects</h1>
                        <span class="title">The Interior speak for themselves</span>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Projects</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->



        <!--Start of Form-->
        <div class="container-fluid">
            <h2 class="text-center my-4">Form for Renovation</h2>
            <div class="row justify-content-center">
                <div class="col-md-10 col-xs-12">
                    <form action="/booking" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <input type="hidden" name="id" value='{{$data}}'>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            {{-- <div class="form-group col-md-6 col-xs-12">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Contact</label>
                                <input type="text" name="contact" class="form-control" required>
                            </div> --}}
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Size(sq.ft)</label>
                                <input type="text" name="size" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <label>Address</label>
                                <textarea rows="3" name="address" class="form-control" required></textarea>
                            </div>
                            <div class="form-group col-md-12 col-xs-12 mb-5">
                                {{-- <input type="submit" value="Purchase" class="theme-btn btn-style-one btn-block"> --}}
                                <button type="submit"  class="theme-btn btn-style-one btn-block">Purchase</button>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>    
        </div>
        <!--End of Form-->


@endsection