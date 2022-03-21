@extends('employees.layout')
@section('content')

<div class="login-form">
    <form action="register" method="post">
        @csrf
        <h2 class="text-center">Signup Employee</h2>
        <div class="form-group">
            <input type="text" placeholder="Enter Name" name="name" class="form-control" required="required">
        </div>
        <div class="form-group">
            <input type="email" placeholder="Enter Email" name="email" class="form-control" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Enter Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
        </div>
    </form>
    <p class="text-center"><a href="/login">Login an Account</a></p>
</div>
@endsection