@extends('layout.website')
@section('title')
Checkout
@endsection

@section('WebsiteSection')

        <!--Page Title-->
        <section class="page-title" style="background-image:url(website/images/background/10.jpg);">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Checkout</h1>
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

        
        <!--Session Section-->
        <div class="container-fluid">
            <h2 class="text-center mt-5">Checkout</h2>
            <h4 class="text-center mt-5">Billed Price: Rs. {{$total}}</h4>
            <div class="row justify-content-center">
                <div class="col-md-6 col-xs-12">
                    <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''}}">
                        {{ Session::get('error')}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9 col-xs-12">
                     <form action="/checkout" method="POST" id="checkout-form">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Card Holder Name</label>
                                <input type="text" id="holdername" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Card Number</label>
                                <input type="text" id="cardnumber" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>CVC Code</label>
                                <input type="text" id="cvc" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Card Expiration Month</label>
                                <input type="text" id="month" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Card Expiration Year</label>
                                <input type="text" id="year" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <label>Address</label>
                                <textarea rows="3" id="address" name="address" class="form-control" required></textarea>
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
        <!--End Session Section-->


         <!--Products Section-->
         <!--End Products Section-->

@endsection
@section('scripts')
<script src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="{{ asset('js/checkout.js') }}"></script>    
@endsection
