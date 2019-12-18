@extends('layout.newdashboard')
@section('title')
    Project Types
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Project Types</h2>

<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Types</th>
                    <th>Commands</th>
                </tr>
            </thead>
            <tbody>
                @if (count($data) > 0)
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->type}}</td>
                        <td>
                            <a href="/projecttypes/{{$item->id}}/edit" class="btn btn-outline-dark">Edit</a>
                            <a href="/projecttypes/{{$item->id}}" class="btn btn-outline-dark">Detail</a>
                        </td>
                    </tr>
                @endforeach
                
                @else
                    <tr>
                        <td class="text-center" colspan="2">No Record Found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
    
@endsection