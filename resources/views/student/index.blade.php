@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Information</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Mobile</th>
                      <th>Picture</th>
                      <th>DOB</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($students as $s)
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->email }}</td>
                    <td>{{ $s->gender }}</td>
                    <td>{{ $s->mobile }}</td>
                    <td>{{ $s->picture }}</td>
                    <td>{{ $s->dob }}</td>
                    <td>{{ $s->action }}</td>
                    <td>
                      <a href={{ route('students.show',$s->id) }}> 
                        Show
                      </a> | 
                      <a href={{ route('students.edit',$s->id) }}> 
                        Edit
                      </a>
                    </td>
                    <td>
                      <form method ="POST" action="{{route('students.destroy', $s->id)}}"
                      style="display:inline">
                      @method('DELETE') 
                      @csrf
                        <button type="submit" class="btn btn-danger"
                          id="id_btn_branch_delete">
                          DELETE
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection