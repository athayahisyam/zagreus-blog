@extends('layout.main')

@section('title', 'Dashboard')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Author Detail</h1>
            <br />
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $authors->given_name }} {{ $authors->family_name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Author ID: {{ $authors->id }}</h6>
                    <p class="card-text">{{ $authors->email }}</p>
                    
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="/dashboard" class="card-link">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection