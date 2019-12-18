@extends('layout.website')
@section('title')
Project Detail
@endsection

@section('WebsiteSection')

        <!--Page Title-->
        <section class="page-title" style="background-image:url(website/images/background/10.jpg);">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>project Detail</h1>
                        <span class="title">The Interior speak for themselves</span>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Project Detail</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->
        
        <!--Products Section-->
        <div class="container-fluid my-5">
            <h2 class="text-center">{{$pro->projectname}}</h2>
            <div class="row justify-content-center my-5">
                <div class="col-md-4 col-xs-12">
                    <!-- Aside Bar-->
                    <img src="/storage/images/{{$pro->image}}" alt="{{$pro->projectname}}">
                    <!--End Aside Bar-->
                </div>
                <div class="col-md-6 col-xs-12">
                    <table class="table table-hover text-center mt-4">
                        <tr>
                            <td>Project ID</td>
                            <td>{{$pro->id}}</td>
                        </tr>
                        <tr>
                            <td>Size</td>
                            <td>{{$pro->size}}"</td>
                        </tr>
                        <tr>
                            <td>Price (as per ft)</td>
                            <td>Rs. {{$pro->price}}</td>
                        </tr>
                        <tr>
                            <td>Area Type</td>
                            <td>{{$pro->type}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a href="/booking/{{$pro->id}}/form" class="theme-btn btn-style-one btn-block">Renovation booking</a>
                            </td>
                        </tr>
                        {{-- <tr>
                            <td colspan="2">
                                <a href="#" class="theme-btn btn-style-one btn-block">Purchase</a>
                            </td>
                        </tr> --}}
                    </table>
                </div>
            </div>
        </div>
        <!--End Products Section-->

@endsection