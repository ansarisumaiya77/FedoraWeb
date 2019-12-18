@extends('layout.newdashboard')
@section('title')
    Orders
@endsection


@section('DashboardSection')
<h2 class="text-center mt-5">Update Order's Detail</h2>

<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <form method="POST" action="/order/update/{{$item->id}}">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            <div class="row justify-content-center">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Customer Name</td>
                            <td>{{$item->customername}}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>{{$item->Payment}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                <div class="form-group">
                                    <select name="status" class="form-control">
                                        @foreach ($status as $sts)
                                            <option value="{{$sts->id}}">{{$sts->status}}</option>                                            
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-group">
                                   <button type="submit" href="" class="btn btn-outline-dark btn-block">Update Status</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
    
@endsection