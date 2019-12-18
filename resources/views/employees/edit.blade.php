@extends('layout.newdashboard')
@section('title')
    Employee
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Update Employee Information</h2>

<div class="row justify-content-center">
    <div class="col-md-10 col-sm-12 ">
        {{Form::open(array('url'=>'/employees/'.$data->id,'method'=>'put'))}}
            <div class="row">
            <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('First Name')}}
                    <input type="text" value="{{$data->firstname}}" name="fname" class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Last Name')}}
                    <input type="text" value="{{$data->lastname}}" name="lname" class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Contact')}}
                    <input type="text" value="{{$data->contact}}" name="contact" class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Email')}}
                    <input type="email" value="{{$data->email}}" name="email" class="form-control">
                </div>
                {{-- <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Password')}}
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Confirm Password')}}
                    <input type="password" name="password-confirm" class="form-control">
                </div> --}}
            </div>
            {{Form::submit("Update Employee Information" ,array('class' => 'btn btn-outline-dark btn-block'))}}
        {{Form::close()}}
    </div>
</div>
    
@endsection