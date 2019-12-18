@extends('layout.website')
@section('title')
Product Detail
@endsection

@section('WebsiteSection')

        <!--Page Title-->
        <section class="page-title" style="background-image:url(website/images/background/10.jpg);">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Shop</h1>
                        <span class="title">The Interior speak for themselves</span>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->
        
        <!--Products Section-->
        <div class="container-fluid my-5">
            <div class="row justify-content-center my-5">
                <div class="col-md-4 col-xs-12">
                    <!-- Aside Bar-->
                    <img src="/storage/images/{{$pro->image}}" alt="{{$pro->productname}}">
                    <!--End Aside Bar-->
                </div>
                <div class="col-md-6 col-xs-12">
                    <table class="table table-hover text-center mt-4">
                        <tr>
                            <td>Product Name</td>
                            <td>{{$pro->productname}}</td>
                        </tr>
                        <tr>
                            <td>Size</td>
                            <td>{{$pro->height}} x {{$pro->width}}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>Rs. {{$pro->price}}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{$pro->Producttype->productType}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a href="/shopping_cart/{{$pro->id}}" class="theme-btn btn-style-one btn-block">Add to Cart</a>
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