@extends('layout.website')
@section('title')
Shop
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
        <div class="container-fluid">
            <div class="row my-5">
                <div class="col-md-3 col-xs-12">
            
                    <!-- Aside Bar-->
                    
                    <ul>
                        @foreach ($type as $item)
                            {{-- <li class="list-group-item list-group-item-action">{{$item->productType}}</li> --}}
                            <button  onclick="getProducts({{$item->id}})" type="button" class="list-group-item list-group-item-action">{{$item->productType}}</button>
                        @endforeach
                    </ul>

                    <!--End Aside Bar-->

                </div>
                <div class="col-md-9 col-xs-12">
                    <div class="row" id="products">
                        <!--Product Cards-->
                        <div class="card-columns my-5">
                            @foreach ($data as $item)
                                <div class="card my-3">
                                    <img class="card-img-top" src="/storage/images/{{$item->image}}" height="600" width="600"alt="{{$item->productname}}">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$item->productname}}</h4>
                                        <p class="card-text">{{$item->price}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="/shopping_cart/{{$item->id}}" class="theme-btn btn-style-one btn-block">Add to Cart</a>
                                        <a href="" class="theme-btn btn-style-one btn-block">Purchase</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--End Product Cards-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Products Section-->

@endsection