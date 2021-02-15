@extends('layout.main')

@section('title', 'Dashboard')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Users Dashboard</h1>
            <br />
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Secondname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $user)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$user->user_id}}</td>
                        <td>{{$user->given_name}}</td>
                        <td>{{$user->family_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection