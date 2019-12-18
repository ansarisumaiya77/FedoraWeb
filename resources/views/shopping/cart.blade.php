@extends('layout.website')
@section('title')
Shopping Cart
@endsection

@section('WebsiteSection')

        <!--Page Title-->
        <section class="page-title" style="background-image:url(website/images/background/10.jpg);">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Shopping Cart</h1>
                        <span class="title">The Interior speak for themselves</span>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!--Products Section-->
        {{-- <nav class="navbar navbar-expand-md navbar-laravel">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            Fedora Shop
                        </a>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3">
                        <a class="navbar-item" href="">
                            Cart List
                            <span class="badge">{{ Session ::has ('cart') ? Session::get('cart')->quantity :''}}</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav> --}}
        {{-- <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand" href="#">Fedora Shop</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/cart">
                                Cart List
                            <span class="badge">{{ Session ::has('cart') ? Session::get('cart')->quantity :''}}</span>
                        </a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav> --}}
        <!--End Products Section-->
        
        
        <!--Session Section-->
        <div class="container-fluid">
            <h2 class="text-center mt-5">Shopping Cart List</h2>
            <div class="row justify-content-center">
                <div class="col-md-10 col-xs-12">
                    @if(Session::has('cart'))
                        <table class="table table-hover text-center my-5">
                            <tr>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            @foreach($products as $product)
                                <tr>
                                    <td><span class="badge">{{$product['qty']}}</span></td>
                                    <td><span class="label label-success">{{$product['price']}}</span></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="theme-btn btn-style-one btn-block dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="/increase/{{$product['item']['id']}}">Increase by 1</a></li>
                                                <li><a href="/reduce/{{$product['item']['id']}}">Reduce by 1</a></li>
                                                <li><a href="/remove/{{$product['item']['id']}}">Reduce All</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3">
                                    <strong>Total: {{$price}}</strong>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <a href="/checkout" class="theme-btn btn-style-one btn-block">Checkout</a>
                                </td>
                            </tr>
                        </table>
                        {{-- <div class="row">
                            <div class="col-md-9 col-xs-12">
                                <strong>Total: {{$price}}</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-xs-12">
                                <a href="/checkout" class="theme-btn btn-style-one btn-block">Checkout</a>
                            </div>
                        </div>         --}}
                    @else
                        <div class="row">
                            <div class="col-md-9 col-xs-12">
                                <h2>No products in cart</h2>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        {{-- @if(Session::has('cart'))
            <div class="row justify-content-center">
                <div class="col-md-9 col-xs-12">
                    <table class="col-md-8 col-xs-12">
                        @foreach($products as $product)
                            <tr>
                                <td><span class="badge">{{$product['qty']}}</span></td>
                                <td><span class="label label-success">{{$product['price']}}</span></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="theme-btn btn-style-one btn-block dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Reduce by 1</a></li>
                                            <li><a href="#">Reduce All</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <span class="badge">{{$product['qty']}}</span>
                                <span class="label label-success">{{$product['price']}}</span>
                                <div class="btn-group">
                                    <button class="theme-btn btn-style-one btn-block dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Reduce by 1</a></li>
                                        <li><a href="#">Reduce All</a></li>
                                    </ul>
                                </div>
                            </tr>
                        @endforeach
                        </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <strong>Total: {{$price}}</strong>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <button type="button" class="theme-btn btn-style-one btn-block">Checkout</button>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <h2>No products in cart</h2>
                </div>
            </div>

        @endif --}}
        <!--End Session Section-->


         <!--Products Section-->
         <!--End Products Section-->

@endsection