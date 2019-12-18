@extends('layout.newdashboard')
@section('title')
    Feedbacks
@endsection

@section('DashboardSection')

<h2 class="text-center mt-5">Feedbacks</h2>

<div class="row justify-content-center text-center">
    <div class="col-md-10 col-xs-12 mt-5">
        <div class="row justify-content-center">
            @if (count($data) > 0)
                @foreach ($data as $item)
                    <div class="col-md-4 col-xs-12 card m-2 p-2 cards hoverable" >
                        <div class="card-body mt-1">
                            <h3 class="mb-4">{{$item->username}}</h3>
                            <h4>{{$item->email}}</h4>
                            <h5 class="my-4">{{$item->message}}</h5>
                            <a class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#exampleModalCenter">Reply</a>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">to: {{$item->email}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="/send" method="POST" id="checkout-form">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <input type="hidden" name="email" value="{{$item->email}}" class="form-control" required>
                                                <div class="row text-left">
                                                    <div class="form-group col-md-12 col-xs-12">
                                                        <label>Subject</label>
                                                        <input type="text" name="subject" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-12 col-xs-12">
                                                        <label>Message</label>
                                                        <textarea rows="3" name="message" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-outline-primary" value="Send Email">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-center">No Record Found</h2>
            @endif
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@endsection