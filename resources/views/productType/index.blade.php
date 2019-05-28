@extends('layout.dashboard')
@section('title')
    Product Type
@endsection
@section('DashboardSection')

<h2>Product Types</h2>
<div class="row justify-content-center text-center">
    <div class="col-md-6 col-xs-12">
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
                        <td>{{$item->productType}}</td>
                <td>
                    <a href="/producttype/{{$item->id}}" class="btn btn-outline-info">Detail</a>
                    <a href="/producttype/{{$item->id}}/edit" class="btn btn-outline-info">Edit</a>
                </td>
                    </tr>
                @endforeach
                
                @else
                    <tr>
                        <td class="text-center" colspan="3">No Record Found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
    
@endsection