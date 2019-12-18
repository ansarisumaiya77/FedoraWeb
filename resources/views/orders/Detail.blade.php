@extends('layout.newdashboard')
@section('title')
    Orders
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Order's Detail</h2>

<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <div class="row justify-content-center">
            {{-- @if (count($data) > 0) --}}
                @if (count($data) > 0)
                    <div class="card-columns my-5">
                        @foreach ($data as $item)
                            <div class="card my-3 cards hoverable">
                                <img class="card-img-top p-2" src="/storage/images/{{$item->product->image}}" height=""alt="{{$item->product->proucctname}}">
                                <div class="card-body">
                                    <h4 class="card-title">Product Name: {{$item->product->productname}}</h4>
                                    <p class="card-text">ID: {{$item->id}}</p>
                                    <p class="card-text">Order ID: {{$item->orderid}}</p>
                                    <p class="card-text">Product ID:{{$item->productid}}</p>
                                    {{-- <p class="card-text">Product Name:{{$item->product->productname}}</p> --}}
                                    <p class="card-text">Price: {{$item->price}}</p>
                                    <p class="card-text">Quantity: {{$item->quantity}}</p>
                                </div>
                                {{-- <div class="card-footer">
                                    <a href="/project_detail/{{$item->id}}" class="theme-btn btn-style-one btn-block">Review</a>
                                </div> --}}
                            </div>
                        @endforeach
                    </div>

                @else
                    <div class="col-md-12 col-xs-12 my-3">
                        <h2 class="text-center">No Orders available for this Order ID..</h2>
                    </div>
                    
                @endif
        </div>
    </div>
</div>
    
@endsection