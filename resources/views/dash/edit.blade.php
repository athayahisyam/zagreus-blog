@extends('layout.main')

@section('title', 'Dashboard')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Edit Author</h1>
            <br />
            <form method="POST" action="/authors/{{ $authors->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="given_name">Given Name</label>
                    <input type="text" 
                        class="form-control @error('given_name') is-invalid @enderror" 
                        id="given_name" 
                        placeholder="Insert your Given Name/Firstname" 
                        name="given_name"
                        value="{{ $authors->given_name }}">
                    @error('given_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="family_name">Family Name</label>
                    <input type="text" 
                        class="form-control @error('family_name') is-invalid @enderror" 
                        id="family_name" 
                        placeholder="Insert your Family Name/Secondname" 
                        name="family_name"
                        value="{{ $authors->family_name }}">
                    @error('family_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" 
                    class="form-control @error('email') is-invalid @enderror" 
                    id="email" 
                    placeholder="Insert your Email" 
                    name="email"
                    value="{{ $authors->email }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection