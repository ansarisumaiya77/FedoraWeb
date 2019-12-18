@extends('layout.newdashboard')
@section('title')
    Product
@endsection
@section('DashboardSection')

<h2 class="text-center mt-5">Products</h2>

<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <div class="row justify-content-center">
            @if (count($data) > 0)
                @foreach ($data as $item)
                    <div class="col-md-3 col-xs-12 card m-2 p-2 hoverable" id="mycard" >
                        <img src="/storage/images/{{$item->image}}" class="card-img-top" alt="{{$item->productname}}">
                        {{-- <div class="card-body">
                            <h5 class="card-title">{{$item->productname}}</h5>
                        </div> --}}
                        <div class="card-body mt-1">
                            <h4 class="card-title">{{$item->productname}}</h4>
                            <h6>Size: {{$item->height}} x {{$item->width}}</h6>
                            <h6>Price: {{$item->price}}</h6>
                            <h6>Product Type: {{$item->Producttype->productType}}</h6>
                            <h6>Quantity: {{$item->quantity}}</h6>
                            <a href="/products/{{$item->id}}/edit" class="btn btn-outline-dark btn-block">Edit</a>
                            <a href="/products/{{$item->id}}" class="btn btn-outline-dark btn-block">Detail</a>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-center">No Record Found</h2>
            @endif
        </div>
    </div>
</div>

@endsection