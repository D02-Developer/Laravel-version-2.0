@extends('employees.layout')
@section('content')

<div class="card-box payment-box"><br>
    <div class="panel panel-default page-border">
        <h2 class="text-center"><b>Employee Form</b></h2><br>
        @if(Session::has('emp'))
        <div class="panel-head ml-15"><b>Welcome {{Session::get('emp')}}!!</b></div>
        @endif
        @if(Session::has('message'))
        <div class="text-danger ml-15">
            <b>{{ Session::get('message') }}</b>
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                        @endphp
                        @foreach ($employees as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item['first_name'] }}</td>
                            <td>{{ $item['last_name'] }}</td>
                            <td>{{ $item['email'] }}</td>
                            <td>
                                <a href="edit/{{$item['id']}}" class="btn btn-primary">Update</i></a>
                                <a href="delete/{{$item['id']}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <a class="btn btn-success" href="create">
                    <i class="fa fa-plus"></i>Add New Employee
                </a>
                <a href="/logout" class="btn btn-default">Logout</a>
            </div>
        </div>
    </div>
</div>
@endsection