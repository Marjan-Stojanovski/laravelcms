@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="toolbar px-3 px-lg-6 py-3">
                <div class="position-relative container-fluid px-0">
                    <div class="row align-items-center position-relative">
                        <div class="col-md-8 mb-4 mb-md-0">
                            <h1 class="mb-2">Users</h1>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="{{route('users.create')}}" class="btn btn-primary">Create User</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="{{route('users.show', $user->id)}}" >{{$user->id}}</a></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td><a href="{{route('users.edit', $user->id)}}" class="btn">Edit</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>





@endsection
