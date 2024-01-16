@extends('admin.admin')
@section('dashboard')
<div class="col-lg-4">
    <div class="card ">
        <div class="card-header">
            <h5>Profile Update</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('profile.update') }}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" >
                </div>
                <div class="mb-3" style="margin-top: 10px;>
                    <label for="email" class="form-label" >Email:</label>
                    <input type="email" name="email" id="email" class="form-control" >
                </div>
                <div class="mb-3 mt-3" style="margin-top: 10px;" >
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card ">
        <div class="card-header">
            <h5>Profile Update</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('password.update') }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">Current Password:</label>
                    <input type="password" name="current_password" id="current_password" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" >
                </div>

                <div class="mb-3 mt-3" style="margin-top: 10px;" >
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card">
        <div class="card-header">
            <h5>Image Update</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('photo.update') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" id="image" class='form-control' >
                </div>
                <div class="mb-3 mt-3" style="margin-top: 10px;" >
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>


            </form>
        </div>
    </div>
</div>

@endsection
