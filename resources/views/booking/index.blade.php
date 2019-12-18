@extends('layout.newdashboard')
@section('title')
    Bookings | Fedora
@endsection
@section('DashboardSection')

<h2 class="text-center mt-5">Renovation Bookings</h2>
<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <div class="row justify-content-center">
            {{-- @if (count($data) > 0) --}}
                @foreach ($data as $item)
                    <div class="col-md-4 col-xs-12 card p-2 m-1 cards hoverable" >
                        <div class="card-body mt-1">
                            <h4 class="mb-4">Customer Name: <br>{{$item->customername}}</h4>
                            <h4>Customer Email: {{$item->email}}</h4>
                            <h5 class="my-4">Customer Contact: {{$item->contact}}</h5>
                            <h5 class="my-4">Address: {{$item->address}}</h5>
                            <h5 class="my-4">Project: {{$item->project->projectname}}</h5>
                            <h5 class="my-4">Area Size: {{$item->size}}</h5>
                            <h5 class="my-4">Total Charges: {{$item->price}}</h5>
                            <h5 class="my-4">Project Status: {{$item->status->status}}</h5>
                            <a href="/booking/edit/{{$item->id}}" class="btn btn-outline-dark btn-block">Edit</a>
                        </div>
                    </div>
                @endforeach
            {{-- @else
                <h2 class="text-center">No Record Found</h2>
            @endif --}}
        </div>
    </div>
</div>
    
@endsection