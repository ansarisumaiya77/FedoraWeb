@extends('layout.newdashboard')
@section('title')
    Assign Projects
@endsection


@section('DashboardSection')
<h2 class="text-center mt-5">Assign a Project</h2>

<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        {{Form::open(array('url'=>'/assignprojects','method'=>'post'))}}
            <div class="row">
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Project')}}
                    <select class="form-control" name="bookingid">
                        @foreach ($booking as $item)
                            <option value="{{$item->id}}">{{$item->id}}</option>
                        @endforeach
                    </select>
                </div>            
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Team')}}
                    <select class="form-control" name="teamid">
                        @foreach ($team as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>  
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Starting Date')}}
                    {{Form::date('startingdate',null,array('class' => 'form-control'))}}
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    {{Form::label('Ending Date')}}
                    {{Form::date('endingdate',null,array('class' => 'form-control'))}}
                </div>
            </div> 
            {{Form::submit("Insert" ,array('class' => 'btn btn-outline-dark btn-block'))}}
        {{Form::close()}}
    </div>
</div>
    
@endsection