@extends('layout.website')
@section('title')
Profile
@endsection

@section('WebsiteSection')

        <!--Page Title-->
        <section class="page-title" style="background-image:url(website/images/background/10.jpg);">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Profile</h1>
                        <span class="title">The Interior speak for themselves</span>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!--Profile Section-->

        <div class="container-fluid">
            <h2 class="text-center my-4">Your profile</h2>
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-11">
                    <table class="table table-hover text-center">
                        <tr>
                            <td>Name</td>
                            <td>{{$data->firstname}} {{$data->lastname}}</td>
                            <td>
                                <button type="button" class="theme-btn btn-style-one" data-toggle="modal" data-target="#namechange">
                                    Edit
                                </button>
                            </td>
                            <div class="modal fade" id="namechange" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Change Your Name</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{Form::open(array('url'=>"/profile/$data->id/name",'method'=>'put'))}}
                                            <input type="text" value="{{$data->id}}" name="id" class="form-control" hidden>
                                                <div class="row justify-content-center">
                                                    <div class="form-group col-sm-11">
                                                        <label>First Name</label>
                                                        <input type="text" value="{{$data->firstname}}" name="firstname" class="form-control @error('firstname') is-invalid @enderror" required>
                                                        @error('firstname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-11">
                                                        <label>Last Name</label>
                                                        <input type="text" value="{{$data->lastname}}" name="lastname" class="form-control  @error('lastname') is-invalid @enderror" required>
                                                        @error('lastname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="theme-btn btn-style-one" data-dismiss="modal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                {{Form::submit("Save Changes" ,array('class' => 'theme-btn btn-style-one'))}}
                                            {{Form::close()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <td>Contact</td>
                            <td>{{$data->contact}}</td>
                            <td>
                                <button type="button" class="theme-btn btn-style-one" data-toggle="modal" data-target="#contactchange">
                                    Edit
                                </button>
                            </td>
                            <div class="modal fade" id="contactchange" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Change Your Name</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{Form::open(array('url'=>"/profile/$data->id/contact",'method'=>'put'))}}
                                            <input type="text" value="{{$data->id}}" name="id" class="form-control" hidden>
                                                <div class="row justify-content-center">
                                                    <div class="form-group col-sm-11">
                                                        <label>Contact</label>
                                                        <input type="text" value="{{$data->contact}}" name="contact" class="form-control" required>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="theme-btn btn-style-one" data-dismiss="modal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                {{Form::submit("Save Changes" ,array('class' => 'theme-btn btn-style-one'))}}
                                            {{Form::close()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$data->email}}</td>
                            <td>
                                <button type="button" class="theme-btn btn-style-one" data-toggle="modal" data-target="#emailchange">
                                    Edit
                                </button>
                            </td>
                            <div class="modal fade" id="emailchange" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Change Your Name</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{Form::open(array('url'=>"/profile/$data->id/email",'method'=>'put'))}}
                                            <input type="text" value="{{$data->id}}" name="id" class="form-control" hidden>
                                                <div class="row justify-content-center">
                                                    <div class="form-group col-sm-11">
                                                        <label>Email</label>
                                                        <input type="text" value="{{$data->email}}" name="email" class="form-control" required>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="theme-btn btn-style-one" data-dismiss="modal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                {{Form::submit("Save Changes" ,array('class' => 'theme-btn btn-style-one'))}}
                                            {{Form::close()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>It's a good idea to use a strong password that you're not using elsewhere</td>
                            <td>
                                <button type="button" class="theme-btn btn-style-one" data-toggle="modal" data-target="#passwordchange">
                                    Edit
                                </button>
                            </td>
                            <div class="modal fade" id="passwordchange" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Change Your Name</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{Form::open(array('url'=>"/profile/$data->id/password",'method'=>'put'))}}
                                            <input type="text" value="{{$data->id}}" name="id" class="form-control" hidden>
                                                <div class="row justify-content-center">
                                                    <div class="form-group col-sm-11">
                                                        <label>Old Password</label>
                                                        <input type="password" name="oldpassword" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-sm-11">
                                                        <label>New Password</label>
                                                        <input type="password" name="newpassword" class="form-control @error('password') is-invalid @enderror" required>
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-11">
                                                        <label>Confirm Password</label>
                                                        <input type="password" name="confirmpassword" class="form-control" required>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="theme-btn btn-style-one" data-dismiss="modal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                {{Form::submit("Save Changes" ,array('class' => 'theme-btn btn-style-one'))}}
                                            {{Form::close()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    </table>
                    {{-- <form action="/profile" method="POST" id="checkout-form">
                        {{ csrf_field() }}
                        <div class="row justify-content-center">
                            <div class="form-group col-md-6 col-xs-12">
                                <label>First Name</label>
                                <input type="text" value="{{$data->firstname}}" name="name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Last Name</label>
                                <input type="text" value="{{$data->lastname}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Email</label>
                                <input type="text" value="{{$data->email}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Contact</label>
                                <input type="text" value="{{$data->contact}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>User Type</label>
                                <input type="text" value="{{$data->user_type}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label>Card Expiration Year</label>
                                <input type="text" id="year" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4 col-xs-11 mb-5 mt-4">
                                <button type="submit"  class="theme-btn btn-style-one btn-block">Save Changes</button>
                            </div>
                            <div class="form-group col-md-4 col-xs-11 mb-5 mt-4">
                                <a href="/profile" class="theme-btn btn-style-one btn-block">Cancel</a>
                            </div>
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
        
        <!--End Profile Section-->
        
@endsection