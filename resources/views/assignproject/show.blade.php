@extends('layout.newdashboard')
@section('title')
    Assign Projects
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Update an Assign a Project</h2>

<h2>Employees</h2>
<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        {{-- <table class="table">
            <thead>
                <tr>
                    <th>Project</th>
                    <th>Team Name</th>
                    <th>Starting Date</th>
                    <th>Ending Date</th>
                    <th>Created date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assign as $item)
                <tr>
                    <td>{{$item->bookingid}}</td>
                    <td>{{$item->team->name}}</td>
                    <td>{{$item->startingdate}}</td>
                    <td>{{$item->endingdate}}</td>
                    <td>{{$item->created_at}}</td>
                <td>
                    <a href="/assignprojects/{{$item->id}}/edit" class="btn btn-outline-info">Edit</a>
                    <a href="/assignprojects/{{$item->id}}" class="btn btn-outline-info">Details</a>
                </td>
                    </tr>
                @endforeach
                
                @else
                    <tr>
                        <td class="text-center" colspan="8">No Record Found</td>
                    </tr>
                @endif
            </tbody>
        </table> --}}
    </div>
</div>
    
@endsection