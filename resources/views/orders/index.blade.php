@extends('layout.newdashboard')
@section('title')
    Orders
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Orders</h2>

<div class="row">
    <div class="col-md-4 col-xs-12 float-right">
        <input type="text" name="search" id="search" placeholder="Search" class="form-control" />        
    </div>
</div>
<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <div class="row justify-content-center">
            {{-- @if (count($data) > 0) --}}
            <table class="table">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Order Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->userid}}</td>
                            <td>{{$item->customername}}</td>
                            {{-- <td>{{$item->user->firstname}} {{$item->user->lastname}}</td> --}}
                            <td>{{$item->address}}</td>
                            <td>{{$item->status->status}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <a href="/order/detail/{{$item->id}}" class="btn btn-outline-dark">Details</a>
                                <a href="/order/edit/{{$item->id}}" class="btn btn-outline-dark">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
        
@endsection