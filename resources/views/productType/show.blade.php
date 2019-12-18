@extends('layout.newdashboard')
@section('title')
    Product Type
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Product Types</h2>


<div class="row justify-content-center text-center">
    <div class="col-md-6 col-xs-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->productType}}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        {{Form::open(array('url'=>'/producttype/'.$data->id,'method'=>'delete'))}}
                            {{Form::submit("Delete" ,array('class' => 'btn btn-outline-dark btn-block'))}}
                        {{Form::close()}}  
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>
</div>
@endsection