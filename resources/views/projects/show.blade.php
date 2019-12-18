@extends('layout.newdashboard')
@section('title')
    Project
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Project Details</h2>

<h2 class="p-4">{{$data->projectname}}</h2>
<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <table class="table">
                    <tr>
                        <td>Project Name</td>
                        <td>{{$data->projectname}}</td>
                    </tr>
                    <tr>
                        <td>Price per {{$data->unit}}</td>
                        <td>Rs. {{$data->price}}</td>
                    </tr>
                    <tr>
                        <td>Colors</td>
                        <td>{{$data->color}}</td>
                    </tr>
                    <tr>
                        <td>Area Type</td>
                        <td>{{$data->typeid}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-5 col-xs-12">
                <img src="/storage/images/{{$data->image}}" class="img-fluid" alt="{{$data->projectname}}">
            </div>
            {{Form::open(array('url'=>'/projects/'.$data->id,'method'=>'delete'))}}
                {{Form::submit("Delete" ,array('class' => 'btn btn-block btn-outline-dark mt-3'))}}
            {{Form::close()}}
        </div>
    </div>
</div>
    
@endsection