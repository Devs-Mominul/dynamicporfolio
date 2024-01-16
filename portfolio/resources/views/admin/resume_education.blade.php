@extends('admin.admin').
@section('dashboard')
<div class="col-lg-6">
    <div class="card">
        <div class="card-header"><h4>Resume Education</h4></div>
        <div class="card-body">
            <form action="{{ route('resume.education.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="academy">Academy Name:</label>
                    <input type="text" name="academy_name" id="academy_name" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="year">Year:</label>
                    <input type="text" name="year" id="year" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="paragraph">Pragraph:</label>
                    <input type="text" name="paragraph" id="para" class="form-control" >
                </div>
                <div class="mb-3" style="margin-top: 15px;">
                    <button type="submit" class="btn btn-success" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
