@extends('layout.newdashboard')
@section('title')
    Employee
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Employee Details</h2>

<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <div class="row justify-content-center">
            <table class="table">
                <tr>
                    <td>Employee ID</td>
                    <td>{{$data->id}}</td>
                </tr>
                <tr>
                    <td>Employee Name</td>
                    <td>{{$data->firstname}} {{$data->lastname}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$data->email}}</td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td>{{$data->contact}}</td>
                </tr>
                <tr>
                    <td>Joining Date</td>
                    <td>{{$data->created_at}}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        {{Form::open(array('url'=>'/employees/'.$data->id,'method'=>'delete'))}}
                            {{Form::submit("Delete" ,array('class' => 'btn btn-block btn-outline-dark mt-3'))}}
                        {{Form::close()}}
                    </td>
                </tr>
                {{-- <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Joining Date</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($data) > 0)
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->firstname}} {{$item->lastname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->contact}}</td>
                        <td>{{$item->created_at}}</td>
                    <td>
                        <a href="/employees/{{$item->id}}/edit" class="btn btn-outline-info">Edit</a>
                        <a href="/employees/{{$item->id}}" class="btn btn-outline-info">Detail</a>
                    </td>
                        </tr>
                    @endforeach
                    
                    @else
                        <tr>
                            <td class="text-center" colspan="8">No Record Found</td>
                        </tr>
                    @endif
                </tbody> --}}
            </table>
        </div>
    </div>
</div>
    
@endsection