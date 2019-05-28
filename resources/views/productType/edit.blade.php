@extends('layout.dashboard')
@section('title')
    Product Type
@endsection
@section('DashboardSection')

    <h2>Update Product Type</h2>
    <div class="row">
        <div class="col-md-6 col-xs-12 offset-1">
            {{Form::open(array('url'=>'/producttype/'.$data->id,'method'=>'put'))}}
                <div class="form-group my-5">
                    {{Form::label('Product Type')}}
                    {{Form::text('productType',$data->productType,array('class' => 'form-control'))}}
                </div  >
            {{Form::submit("Update",array('class' => 'btn btn-outline-info btn-block btn-lg'))}}
            {{Form::close()}}
        </div>
    </div>
    
@endsection