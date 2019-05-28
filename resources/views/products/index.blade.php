@extends('layout.dashboard')
@section('title')
    Product
@endsection
@section('DashboardSection')

<h2>Products</h2>
<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Products</th>
                    <th>Height</th>
                    <th>Width</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Commands</th>
                </tr>
            </thead>
            <tbody>
                @if (count($data) > 0)
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->productname}}</td>
                    <td>{{$item->height}}</td>
                    <td>{{$item->width}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->image}}</td>
                    <td>{{$item->producttypeid}}</td>
                <td>
                    <a href="/products/{{$item->id}}/edit" class="btn btn-outline-info">Edit</a>
                    <a href="/products/{{$item->id}}" class="btn btn-outline-info">Detail</a>
                </td>
                    </tr>
                @endforeach
                
                @else
                    <tr>
                        <td class="text-center" colspan="8">No Record Found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
    
@endsection