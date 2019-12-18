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
        <!--End Products Section-->
        
        <!--Products Section-->
        <div class="container-fluid">
            <div class="row my-5">
                <div class="col-md-3 col-xs-12">
            
                    <!-- Aside Bar-->
                    
                    <ul>
                        @foreach ($type as $item)
                            <li class="list-group-item list-group-item-action"><a href="/shop/{{$item->id}}">{{$item->productType}}</a></li>
                            {{-- <a href="" type="button" class="list-group-item list-group-item-action">{{$item->productType}}</button> --}}
                            {{-- <button  onclick="getProducts({{$item->id}})" type="button" class="list-group-item list-group-item-action">{{$item->productType}}</button> --}}
                        @endforeach
                    </ul>

                    <!--End Aside Bar-->

                </div>
                <div class="col-md-9 col-xs-12">
                    <div class="row" id="products">

                        <!--Mini Navbar-->
                        {{-- <nav class="navbar navbar-expand-sm navbar-light bg-light">
                            <a class="navbar-brand" href="/shop"><h3>Fedora Shop</h3></a>
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
                        <!--End of Mini Navbar-->

                        <!--Success Message Div-->
                        @if (Session::has('success'))
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-xs-12">
                                    <div id="charge-message" class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!--End of Success Message Div-->

                        <!--Product Cards-->

                        {{-- <div id="card">
                            @include('home.pagination')
                        </div> --}}

                        <div class="card-columns my-5">
                            @foreach ($data as $item)
                                <div class="card my-3 cards hoverable">
                                    <form action="">
                                        <input type="text" id="pro_id" value="{{$item->id}}" hidden>
                                    </form>
                                    <img class="card-img-top" src="/storage/images/{{$item->image}}" height="600" width="600"alt="{{$item->productname}}">
                                    <div class="card-body">
                                        <h4 class="card-title">Name: {{$item->productname}}</h4>
                                        <p class="card-text">Price: {{$item->price}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="/product_detail/{{$item->id}}" class="theme-btn btn-style-one btn-block">Review</a>
                                        <a href="/shopping_cart/{{$item->id}}" class="theme-btn btn-style-one btn-block">Add to Cart</a>
                                     </div>
                                </div>
                            @endforeach
                        </div>

                        {!! $data->links() !!}

                        <!--End Product Cards-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Products Section-->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}

    {{-- <script>
        $(document).ready(function(){
            $(document).on('click', '.pagination a', function(event){
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });
            
            function fetch_data(page)
            {
                $.ajax({
                    url:"/pagination/fetch_data?page="+page,
                    success:function(data)
                    {
                        $('#card').html(data);
                    }
                });
            }
        });
    </script> --}}
@endsection
@section('scripts')
    <script>
    </script>
@endsection