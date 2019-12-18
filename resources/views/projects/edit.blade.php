@extends('layout.newdashboard')
@section('title')
    Project
@endsection


@section('DashboardSection')
<h2 class="text-center mt-5">Update Project</h2>

<div class="row justify-content-center">
    <div class="col-md-10 col-sm-12 ">
        {{Form::open(array('url'=>'/projects/'.$data->id,'method'=>'put', 'enctype' => 'multipart/form-data'))}}
            <div class="row">
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Project Name')}}
                    {{Form::text('projectname',$data->projectname,array('class' => 'form-control form-border'))}}
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Product Type')}}
                    <select class="form-control" name="typeid">
                        @foreach ($type as $item)
                            <option value="{{$item->id}}">{{$item->type}}</option>
                        @endforeach
                    </select>
                </div>            
                <div class="form-group col-md-4 col-xs-12">
                    {{Form::label('Size')}}
                    {{Form::text('size',$data->size,array('class' => 'form-control'))}}
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    {{Form::label('Unit')}}
                    <select class="form-control" name="unit">
                        <option>ft</option>
                        <option>m</option>
                        <option>cm</option>
                        <option>mm</option>
                        <option>yd</option>
                        <option>in</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    {{Form::label('Color')}}
                    {{Form::text('color',$data->color,array('class' => 'form-control'))}}
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Price')}}
                    {{Form::text('price',$data->price,array('class' => 'form-control'))}}
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Image')}}
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            {{Form::submit("Update" ,array('class' => 'btn btn-outline-dark btn-block'))}}
        {{Form::close()}}
    </div>
</div>
    
@endsection