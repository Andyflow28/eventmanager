@extends('login.index')

@section('content')

<div class="container-fluid form-container d-flex justify-content-center align-items-center border">
    <div class="d-flex">
        <form>
            <div class="mb-3">
                <label for="User_Name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="User_Name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up </button>
        </form>
    </div>
</div>

@endsection