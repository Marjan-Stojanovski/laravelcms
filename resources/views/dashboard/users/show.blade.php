@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="toolbar px-3 px-lg-6 py-3">
                <div class="position-relative container-fluid px-0">
                    <div class="row align-items-center position-relative">
                        <div class="col-md-8 mb-4 mb-md-0">
                            <h1 class="mb-2">User</h1>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="{{route('users.index')}}" class="btn btn-primary">Users</a>
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
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>





@endsection
