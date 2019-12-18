@extends('layout.newdashboard')
@section('title')
    Teams
@endsection


@section('DashboardSection')

    <!-- Button trigger modal -->

    <div class="row position-absolute float-right">
        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#addemployee">
           Add Employee
        </button>
    </div>
    
<div class="row justify-content-center">
    <h2 class="text-center mt-5">Update Team</h2>
</div>



<!-- Modal -->
    <div class="modal fade" id="addemployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Employee to this Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{Form::open(array('url'=>'/teams/add','method'=>'post'))}}
                        <div class="row">
                            <div class="form-group col-md-6 col-xs-12">
                                {{Form::label('Team Name')}}
                                <input type="text" name="teamid" value="{{$data->id}}" hidden class="form-control">
                                <input type="text" name="name" value="{{$data->name}}" disabled class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                {{Form::label('Lead Name')}}
                                <input type="text" name="leadname" value="{{$data->leadname}}" disabled class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                {{Form::label('Employee')}}
                                <select name="employee" class="form-control">
                                    @foreach ($addemp as $item)
                                        <option value="{{$item->id}}">{{$item->firstname}} {{$item->lastname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                    {{Form::submit("Add Employee" ,array('class' => 'btn btn-outline-dark'))}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12 ">
            {{Form::open(array('url'=>"/teams/$data->id",'method'=>'put'))}}
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        {{Form::label('Team Name')}}
                        <input type="text" name="name" value="{{$data->name}}" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        {{Form::label('Lead Name')}}
                        <input type="text" name="leadname" value="{{$data->leadname}}" class="form-control">
                    </div>                    
                    <div class="form-group col-md-12 col-xs-12">
                        {{Form::label('Description')}}
                        <textarea  name="description" class="form-control" rows="3">{{$data->description}}</textarea>
                    </div>
                </div>
                {{Form::submit("Update Team Information" ,array('class' => 'btn btn-outline-dark btn-block'))}}
            {{Form::close()}}
        </div>
    </div>
    <div class="row justify-content-center">
        <h2 class="text-center my-5">
            Update Team Members
        </h2>
        <div class="col-md-10 col-sm-12">
            @foreach ($detail as $item)
                <div class="col-md-12 col-xs-12">
                    {{Form::open(array('url'=>"/teams/$item->id/update",'method'=>'put'))}}
                        <div class="row justify-content-center">

                        <input type="text" name="id" value="{{$item->id}}" hidden>

                        <div class="form-group col-md-4 col-xs-12">
                            {{Form::label('Employee Name')}}
                            <select name="employee" class="form-control">
                                @foreach ($emp as $e)
                                    @if ($item->employeeid == $e->id)
                                    <option value="{{$e->id}}" selected >{{$e->firstname}} {{$e->lastname}}</option>
                                    @else
                                    <option value="{{$e->id}}">{{$e->firstname}} {{$e->lastname}}</option>
                                    @endif
                                    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-xs-12">
                            {{Form::label('Employee Role')}}
                            <select name="role" class="form-control">
                                @if ($item->role == "Leader")
                                <option value="Leader" selected>Leader</option>
                                <option value="Worker">Worker</option>
                                @else
                                <option value="Leader">Leader</option>
                                <option value="Worker" selected>Worker</option>
                                @endif
                            </select>
                        </div>

                        <input type="text" name="teamid" value="{{$data->id}}" hidden class="form-control">
                        <div class="form-group col-md-2 col-xs-12">
                            {{Form::submit("Update Employee" ,array('class' => 'btn btn-outline-dark'))}}
                        </div>
                    {{Form::close()}}

                        
                        <div class="form-group col-md-2 col-xs-12">
                            {{Form::open(array('url'=>"/teams/".$item->id."/destroy",'method'=>'delete'))}}
                                <input type="text" name="teamid" value="{{$data->id}}" hidden class="form-control">
                                {{Form::submit("Delete Employee" ,array('class' => 'btn btn-outline-dark'))}}
                            {{Form::close()}}
                
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
        
@endsection

{{-- @section('DashboardSection')

<h2 class="ml-5 py-4">Add new Product</h2>
<div class="row justify-content-center">
    <div class="col-md-10 col-sm-12 ">
            <input type="text" class="form-control" id="tokenfield" value="" />
    </div>
</div>

@endsection
 --}}

