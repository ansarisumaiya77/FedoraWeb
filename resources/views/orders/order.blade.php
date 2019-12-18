@extends('layout.website')
@section('title')
Orders
@endsection

@section('WebsiteSection')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(website/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Orders</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Orders</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Orders Showcase -->

    <h2 class="text-center my-5">
        Order Details
    </h2>
    <div class="row justify-content-center">
        <table class="table table-hover table-striped col-md-9 col-xs-11 mb-4 text-center">
            @if ($data != null)
                <tr>
                    <td>Order ID</td>
                    <td>{{$data->id}}</td>
                </tr>
                <tr>
                    <td>Customer Name</td>
                    <td>{{$data->customername}}</td>
                </tr>
                <tr>
                    <td>Payment ID</td>
                    <td>{{$data->Paymentid}}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{$data->address}}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{$data->status->status}}</td>
                </tr>
                <tr>
                    <td>Order's Placement time</td>
                    <td>{{$data->created_at}}</td>
                </tr>
            @else
                <tr>
                    <td>You havn't order anything yet</td>
                </tr>
            @endif
        </table>
    </div>
    <!-- End of Orders Showcase -->

    <!-- Orders Details Table -->

    <h2 class="text-center my-5">
        Products that your Order Include
    </h2>

    <div class="row justify-content-center">
        <table class="table table-hover table-striped col-md-9 col-xs-11 mb-4 text-center">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Commands</th>
                </tr>
            </thead>
            <tbody>
                @if ($detail != null)
                    @foreach ($detail as $item)
                        <tr>
                            <td>{{$item->orderid}}</td>
                            <td>{{$item->product->productname}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->price}}</td>
                            <td><a href="/product_detail/{{$item->productid}}" class="theme-btn btn-style-one">More</a></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">No Records Found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>


    <!-- End of Orders Details Table -->
    

@endsection