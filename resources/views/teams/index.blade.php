@extends('layout.newdashboard')
@section('title')
    Teams
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Teams</h2>
    
    <div class="row justify-content-center text-center">
        <div class="col-md-10 col-xs-12 mt-5">
            <div class="row justify-content-center">
                {{-- @if (count($data) > 0) --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>Team ID</th>
                            <th>Team Name</th>
                            <th>Team Lead</th>
                            <th>Total Members</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->leadname}}</td>
                                <td>7</td>
                                <td>
                                    <a href="/teams/{{$item->id}}/details" class="btn btn-outline-dark">Details</a>
                                    <a href="/teams/{{$item->id}}/edit" class="btn btn-outline-dark">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
            
@endsection