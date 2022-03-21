@extends('employees.layout')
@section('content')

@if(Session::has('message'))
<div class="text-danger text-center">
    <b>{{ Session::get('message') }}</b>
    @php
    Session::forget('success');
    @endphp
</div>
@endif
<!-- @if ($errors->any())
<div class="text-danger text-center">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif -->

<div class="login-form">
    <form action="login" method="post">
        @csrf
        <h2 class="text-center">Login Employee</h2>
        <div class="form-group">
            <input type="email" placeholder="Enter Email" name="email" class="form-control" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Enter Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
    </form>
    <p class="text-center"><a href="/register">Create an Account</a></p>
</div>
@endsection