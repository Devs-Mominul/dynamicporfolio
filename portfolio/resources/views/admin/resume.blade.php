@extends('admin.admin')
@section('dashboard')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header"><h4>Resume</h4></div>
        <div class="card-body">
            <form action="{{ route('resume.store') }}" method="post" enctype="multipart/form-data" >
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
<br><br><br>
<div class="col-lg-12" style="margin-top: 50px;">
    <div class="card">
        <div class="card-header"><h4>Resume Details List</h4></div>
        <div class="card-body">
            <table class="table table-bordered">
               <thead>
                <tr>
                    <th>name</th>
                    <th>desegnation</th>
                    {{--  <th>icon</th>  --}}
                    {{--  <th>email</th>  --}}
                    <th>phone</th>
                    <th>birthday</th>
                    {{--  <th>location</th>  --}}
                    {{--  <th>image</th>  --}}
                    <th>action</th>
                </tr>

               </thead>
               <tbody>
                @foreach ($resumes as $resume)
                <tr>
                    <td>{{ $resume->name }}</td>
                    <td>{{ $resume->desecnation }}</td>
                    {{--  <td>{{ $resume->social_icon }}</td>  --}}
                    {{--  <td>{{ $resume->email }}</td>  --}}
                    <td>{{ $resume->phone }}</td>
                    <td>{{ $resume->birthday }}</td>
                    {{--  <td>{{ $resume->location }}</td>  --}}
                    {{--  <td><img src="{{ asset('upload/resume/') }}/{{ $resume->image }}" width="40px" alt=""></td>  --}}
                    <td><div class="d-flex">
                        <a href="" class="btn btn-danger">Delete</a> <a href="{{ route('resume.view',$resume->id) }}" class="btn btn-success">update</a>
                        </div></td>


                </tr>

                @endforeach
               </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
