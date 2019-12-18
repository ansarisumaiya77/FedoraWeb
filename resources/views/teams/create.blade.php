@extends('layout.newdashboard')
@section('title')
    Teams
@endsection


@section('DashboardSection')
<h2 class="text-center mt-5">Add new Team</h2>

    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12 ">
            {{Form::open(array('url'=>'/teams','method'=>'post'))}}
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        {{Form::label('Team Name')}}
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        {{Form::label('Lead Name')}}
                        <input type="text" name="leadname" class="form-control">
                    </div>
                    <div class="form-group col-md-12 col-xs-12">
                        {{Form::label('Employee')}}
                        <select name="employee[]" class="form-control" multiple>
                            @foreach ($data as $item)
                                <option value="{{$item->id}}">{{$item->firstname}} {{$item->lastname}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-xs-12">
                        {{Form::label('Description')}}
                        <textarea  name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                {{Form::submit("Create Team" ,array('class' => 'btn btn-outline-dark btn-block'))}}
            {{Form::close()}}
        </div>
    </div>
        
@endsection

{{-- @section('DashboardSection')

<h2 class="ml-5 py-4">Add new Product</h2>
<div class="row justify-content-center">
    <div class="col-md-10 col-sm-12 ">
            <input type="text" class="form-control" id="tokenfield" value="" />
    </div>
</div>

@endsection
 --}}

{{-- @section('javascript')
    <script src="{{asset('dist/bootstrap-tokenfield.min.js')}}"></script>
    <script>
        $('document').ready(function(){
            $.getJSON('/selectemp/getemployeesdata',function(data){
                console.log(data);
               $('#tokenfield').tokenfield('setTokens',[{value:'A',label:'aa'},{value:'B',label:'bb'},{value:'C',label:'c'}]);
            })
        })
        
    </script>
@endsection --}}