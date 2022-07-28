@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="row">
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">College Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('students.store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Student ID</label>
                    <input type="text" 
                    name="student_id"
                    class="form-control" id="student_id" placeholder="Enter Student Id">
                  </div>
                 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
@endsection