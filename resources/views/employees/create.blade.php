@extends('layout.newdashboard')
@section('title')
    Employee
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Add new Employee</h2>

<div class="row justify-content-center">
    <div class="col-md-10 col-sm-12 ">
        {{Form::open(array('url'=>'/employees','method'=>'post'))}}
            <div class="row">
            <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('First Name')}}
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Last Name')}}
                    <input type="text" name="lname" class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Contact')}}
                    <input type="text" name="contact" class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Email')}}
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Password')}}
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Confirm Password')}}
                    <input type="password" name="password-confirm" class="form-control">
                </div>
            </div>
            {{Form::submit("Insert new Employee" ,array('class' => 'btn btn-outline-dark btn-block'))}}
        {{Form::close()}}
    </div>
</div>
    
@endsection