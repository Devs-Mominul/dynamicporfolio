@extends('admin.admin')
@section('dashboard')
<div class="col-lg-6">
    <div class="card">
        <div class="card-header"><h4>Resume Exprience</h4></div>
        <div class="card-body">
            <form action="{{ route('resume.expreince.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="academy">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" >
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
<div class="col-lg-6"  >
    <div class="card">
        <div class="card-header"><h4>Resume Skill</h4></div>
        <div class="card-body">
            <form action="{{ route('resume.skill.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="academy">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="paragraph">Parcentage:</label>
                    <input type="text" name="parcantage" id="para" class="form-control" >
                </div>
                <div class="mb-3" style="margin-top: 15px;">
                    <button type="submit" class="btn btn-success" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
