@extends('layout.dashboard')
@section('title')
    Product
@endsection
@section('DashboardSection')

<h2 class="p-4">{{$data->productname}}</h2>
<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <table class="table">
                    <tr>
                        <td>Product Name</td>
                        <td>{{$data->productname}}</td>
                    </tr>
                    <tr>
                        <td>Size</td>
                        <td>{{$data->height}} x {{$data->width}}</td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>Rs. {{$data->price}}</td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td>{{$data->quantity}}</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>{{$data->producttypeid}}</td>
                    </tr>
                    {{-- <tr>
                        <td colspan="2">Image</td>
                        <td>
                            <img src="/storage/images/{{$data->image}}" class="img-fluid" alt="{{$data->productname}}">
                        </td>
                    </tr> --}}
                    {{-- <tr>
                        <td colspan="2">
                            {{Form::open(array('url'=>'/products/'.$data->id,'method'=>'delete'))}}
                                {{Form::submit("Delete" ,array('class' => 'btn btn-outline-info btn-block'))}}
                            {{Form::close()}}
                        </td>
                    </tr> --}}
                </table>
            </div>
            <div class="col-md-5 col-xs-12">
                <img src="/storage/images/{{$data->image}}" class="img-fluid" alt="{{$data->productname}}">
            </div>
            {{Form::open(array('url'=>'/products/'.$data->id,'method'=>'delete'))}}
                {{Form::submit("Delete" ,array('class' => 'btn btn-block btn-outline-info mt-3'))}}
            {{Form::close()}}
        </div>
    </div>
</div>
    
@endsection