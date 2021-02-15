@extends('layout.main')

@section('title', 'Dashboard')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Users Dashboard</h1>
            <br />
            <ul class="list-group">
                @foreach( $authors as $authors )
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $authors->given_name }} {{ $authors->family_name}}
                    <a href="/authors/{{ $authors->id }}" class="badge badge-info">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection