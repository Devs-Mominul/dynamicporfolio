@extends('admin.admin')
@section('dashboard')
<div class="col-lg-12">
    <div class="card">
        <div class="row">
            <div class="col-lg-12">
               <form action="{{ route('aboutme.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="title">Decription:</label>
                            <textarea name="desc" id="de" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin-top: 20px">
                        <button type="submit" class="btn btn-success">submit</button>
                    </div>

                </div>
               </form>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12" style="margin-top: 50px;">
   <div class="card">
    <div class="card-header"><h1>About Me</h1></div>
    <div class="card-body">
        <form action="{{ route('whatdo.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="title">Titles:</label>
                        <input type="text" name="title" id="title" class="form-control" >
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="icon">Icon:</label>
                        <input type="file" name="icon" id="icon" class="form-control" >
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="title">Sub Title:</label>
                        <input type="text" name="sub_title" id="titles" class="form-control" >
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="title">Paragraph:</label>
                        <input type="text" name="paragraph" id="titlesss" class="form-control" >
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top: 20px">
                    <button type="submit"  class="btn btn-success" >Submit</button>
                </div>
            </div>
        </form>
    </div>
   </div>
</div>

@endsection
