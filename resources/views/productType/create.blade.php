@extends('layout.dashboard')
@section('title')
    Product Type
@endsection
@section('DashboardSection')

    <h2>Insert a new Product Type</h2>
    <div class="row">
        <div class="col-md-6 col-xs-12 offset-1">
            {{Form::open(array('url'=>'/producttype','method'=>'post'))}}
                <div class="form-group my-5">
                    {{Form::label('Product Type')}}
                    {{Form::text('productType',null,array('class' => 'form-control'))}}
                </div  >
            {{Form::submit("Insert" ,array('class' => 'btn btn-outline-info btn-block btn-lg'))}}
            {{Form::close()}}
        </div>
    </div>
    
@endsection