@extends('admin.admin')
@section('dashboard')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header"><h4>Resume Update</h4></div>
        <div class="card-body">
            <form action="{{ route('resume_update.store',$resume_id->id) }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="mb-3">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="dese">Desegnation:</label>
                    <input type="text" name="deseg" id="deseg" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="icon">Icon:</label>
                    <input type="text" name="icon" id="icon" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name">Email:</label>
                    <input type="email" name="email" id="names" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name">Birthday:</label>
                    <input type="text" name="birthday" id="birthday" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name">Location:</label>
                    <input type="text" name="location" id="location" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name">Image:</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success" style="margin-top: 20px;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

