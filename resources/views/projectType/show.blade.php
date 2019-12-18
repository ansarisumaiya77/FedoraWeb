@extends('layout.newdashboard')
@section('title')
    Project Type
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Project Type</h2>

<div class="row justify-content-center text-center">
    <div class="col-md-6 col-xs-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->type}}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        {{Form::open(array('url'=>'/projecttypes/'.$data->id,'method'=>'delete'))}}
                            {{Form::submit("Delete" ,array('class' => 'btn btn-outline-dark btn-block'))}}
                        {{Form::close()}}  
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>
</div>
<a href="/producttype" class="mt-5">back to list</a>
@endsection