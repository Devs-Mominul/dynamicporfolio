@extends('admin.admin')
@section('dashboard')
<div class="col-lg-10">
    <div class="card">
        <div class="card-header"><h1>Testomonial</h1></div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title">Paragraph</label>
                            <input type="text" name="paragraph" id="paragraph" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="title">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin-top: 15px;" >
                        <button type="submit" class="btn btn-success" >Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
