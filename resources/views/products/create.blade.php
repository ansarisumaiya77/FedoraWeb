@extends('layout.dashboard')
@section('title')
    Product
@endsection
@section('DashboardSection')

<h2 class="ml-5 py-4">Add new Product</h2>
<div class="row justify-content-center">
    <div class="col-md-10 col-sm-12 ">
        {{Form::open(array('url'=>'/products','method'=>'post', 'enctype' => 'multipart/form-data'))}}
            <div class="row">
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Product Name')}}
                    {{Form::text('productname',null,array('class' => 'form-control form-border'))}}
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Product Type')}}
                    <select class="form-control" name="producttypeid">
                        @foreach ($data as $item)
                            <option value="{{$item->id}}">{{$item->productType}}</option>
                        @endforeach
                    </select>
                </div>            
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Height')}}
                    {{Form::text('height',null,array('class' => 'form-control'))}}
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Width')}}
                    {{Form::text('width',null,array('class' => 'form-control'))}}
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    {{Form::label('Price')}}
                    {{Form::text('price',null,array('class' => 'form-control'))}}
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    {{Form::label('Quantity')}}
                    {{Form::text('quantity',null,array('class' => 'form-control'))}}
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    {{Form::label('Image')}}
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            {{Form::submit("Insert" ,array('class' => 'btn btn-outline-info btn-block'))}}
        {{Form::close()}}
    </div>
</div>
    
@endsection