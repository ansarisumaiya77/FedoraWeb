@extends('layout.newdashboard')
@section('title')
    Orders
@endsection
@section('DashboardSection')

<h2 class="text-center mt-5">Update Status</h2>
<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <form method="POST" action="/booking/update/{{$item->id}}">
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
                            <td>Email</td>
                            <td>{{$item->customername}}</td>
                        </tr>
                        <tr>
                            <td>Contact</td>
                            <td>{{$item->contact}}</td>
                        </tr>
                        <tr>
                            <td>Size</td>
                            <td>{{$item->size}}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>{{$item->price}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                <div class="form-group">
                                    <select name="status" class="form-control">
                                        @foreach ($status as $item)
                                            <option value="{{$item->id}}">{{$item->status}}</option>                                            
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