@extends('layout.newdashboard')
@section('title')
    Project Type
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Insert a new Project Type</h2>

    <div class="row">
        <div class="col-md-6 col-xs-12 offset-1">
            {{Form::open(array('url'=>'/projecttypes','method'=>'post'))}}
                <div class="form-group my-5">
                    {{Form::label('Project Type')}}
                    {{Form::text('type',null,array('class' => 'form-control'))}}
                </div  >
            {{Form::submit("Insert" ,array('class' => 'btn btn-outline-dark btn-block'))}}
            {{Form::close()}}
        </div>
    </div>
    
@endsection