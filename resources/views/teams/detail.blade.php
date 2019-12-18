@extends('layout.newdashboard')
@section('title')
    Team Details
@endsection

@section('DashboardSection')
<h2 class="text-center mt-5">Team Detail</h2>

    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <table class="table table-hover text-center">
                <tbody>
                    <tr>
                        <td>Team id: {{$data->id}}</td>
                        <td>Team Name: {{$data->name}}</td>
                        <td>Team Lead: {{$data->leadname}}</td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <h1>Team mates</h1>
                        </td>
                    </tr>
                    @if (count($detail) > 0)
                        @foreach ($detail as $item)
                            <tr>
                                <td>Name: {{$item->user->firstname}} {{$item->user->lastname}}</td>
                                <td>Contact: {{$item->user->contact}}</td>
                                <td>Role: {{$item->role}}</td>
                            </tr>
                        @endforeach
                    @else
                        <h2 class="text-center">No Record Found</h2>
                    @endif

                </tbody>
                {{-- <tfoot>
                    <tr>
                        
                    </tr>            
                </tfoot> --}}
            </table>
            {{Form::open(array('url'=>'/teams/'.$data->id,'method'=>'delete'))}}
                {{Form::submit("Delete Team" ,array('class' => 'btn btn-outline-dark btn-block mt-4'))}}
            {{Form::close()}}  
        </div>
    </div>
        
@endsection