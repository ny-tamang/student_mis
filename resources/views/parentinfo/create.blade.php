@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="row">
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Parent Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('parentinfos.store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" 
                    name="name"
                    class="form-control" id="name" placeholder="Enter Name">
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="fathers_name">Father's Name</label>
                    <input type="text"
                    name="fathers_name"
                     class="form-control" id="fathers_name" 
                     placeholder="Enter your Fathers Name">
                  </div>
                  <div class="form-group">
                    <label for="mothers_name">Mother's Name</label>
                    <input type="text"
                    name="mothers_name"
                     class="form-control" id="mothers_name" 
                     placeholder="Enter your Mothers Name">
                  </div>

                  <div class="form-group">
                    <label for="guardian_name"></label>
                    <input type="text"
                    name="guardian_name"
                     class="form-control" id="guardian_name" 
                     placeholder="Enter your Permanent Address">
                  </div>
                  <div class="form-group">
                    <label for="t_address">Temporary Address</label>
                    <input type="text"
                    name="t_address"
                     class="form-control" id="t_address" 
                     placeholder="Enter your Temporary Address">
                  </div>
             
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div> -->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
@endsection