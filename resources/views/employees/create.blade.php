@extends('employees.layout')
@section('content')

<div class="card-box payment-box"><br>
    <div class="card-body">
        <form action="create" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="panel panel-default page-border">
                <h2 class="text-center"><b>Employee Form</b></h2><br>
                @if(Session::has('message'))
                <div class="text-danger ml-15">
                    <b>{{ Session::get('message') }}</b>
                    @php
                    Session::forget('success');
                    @endphp
                </div>
                @endif
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-5">
                                    <label class="form-label">First Name<span class="astrick">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter First Name" name="first_name" class="form-control">
                                        @if ($errors->has('first_name'))
                                        <span class="text-danger">{{ $errors->first('first_name') }}</span></br>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label">Last Name<span class="astrick">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Last Name" name="last_name" class="form-control">
                                        @if ($errors->has('last_name'))
                                        <span class="text-danger">{{ $errors->first('last_name') }}</span></br>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label">Email<span class="astrick">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="email" placeholder="Enter Email" name="email" class="form-control">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span></br>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label">Address</label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Address" name="address" class="form-control">
                                        @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span></br>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label">Phone<span class="astrick">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="number" placeholder="Enter Phone" name="mobile" class="form-control">
                                        @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span></br>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label">Gender<span class="astrick">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="radio" name="gender" value="male"> Male<br>
                                        <input type="radio" name="gender" value="female" checked> Female
                                        @if ($errors->has('gender'))
                                        <span class="text-danger">{{ $errors->first('gender') }}</span></br>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label">Role<span class="astrick">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <select name="role">
                                            <option value="0">Manager</option>
                                            <option value="1">Leader</option>
                                            <option value="2" selected>Agent</option>
                                        </select>
                                        @if ($errors->has('role'))
                                        <span class="text-danger">{{ $errors->first('role') }}</span></br>
                                        @endif
                                    </div><br>
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label">Date of Birth<span class="astrick">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="date" min='1970-01-01' max='1990-12-31' name="dateofbirth" class="form-control">
                                        @if ($errors->has('dateofbirth'))
                                        <span class="text-danger">{{ $errors->first('dateofbirth') }}</span></br>
                                        @endif
                                    </div>
                                </div>

                                <!-- <div class="col-md-5">
                                    <label class="form-label">Upload Photo</label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                </div> -->

                                <!-- <div class="col-md-5">
                                    <label class="form-label">Password<span class="astrick">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="password" placeholder="Enter Password" name="password" class="form-control">
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span></br>
                                        @endif
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Submit" class="btn btn-success"></br>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@stop