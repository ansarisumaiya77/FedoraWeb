@extends('layout.newdashboard')
@section('title')
    Projects
@endsection

@section('DashboardSection')

<h2 class="text-center mt-5">Projects</h2>

<div class="row justify-content-center text-center">
    <div class="col-md-11 col-xs-12 mt-5">
        <div class="row justify-content-center">
            @if (count($data) > 0)
                @foreach ($data as $item)
                    <div class="col-md-3 col-xs-12 card m-2 p-2 hoverable" >
                        <img src="/storage/images/{{$item->image}}" class="card-img-top" alt="{{$item->image}}">
                        {{-- <div class="card-body">
                            <h5 class="card-title">{{$item->projectname}}</h5>
                        </div> --}}
                        <div class="card-body mt-1">
                            <h4 class="card-title">{{$item->projectname}}</h4>
                            <h6 class="mt-1">Price: {{$item->price}}</h6>
                            <h6>Colors: {{$item->color}}</h6>
                            <a href="/projects/{{$item->id}}/edit" class="btn btn-outline-dark btn-block">Edit</a>
                            <a href="/projects/{{$item->id}}" class="btn btn-outline-dark btn-block">Detail</a>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-center">No Record Found</h2>
            @endif
        </div>
    </div>
</div>
    
@endsection