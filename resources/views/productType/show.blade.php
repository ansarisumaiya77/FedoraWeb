@extends('layout.dashboard')
@section('title')
    Product Type
@endsection
@section('DashboardSection')

<h2>Product Types</h2>
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
                            {{Form::submit("Delete" ,array('class' => 'btn btn-outline-info btn-block'))}}
                        {{Form::close()}}  
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>
</div>
<a href="/producttype" class="mt-5">back to list</a>
@endsection