@extends('admin.main.master')
@section('title')HRIS | Admin @endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Manage Employee</li>
              <li class="breadcrumb-item active">Employee Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle profilepic"
                         src="../../dist/img/user4-128x128.jpg"
                         alt="User profile picture">
                    <div class="profilemiddle">
                      <div class="profiletext">Upload Photo</div>
                    </div>
                </div>

                <h3 class="profile-username text-center">{{$employee->emp_fname}} {{str_limit($employee->emp_mname,1,'.')}} {{$employee->emp_lname}} </h3>

                <p class="text-muted text-center">{{$employee->emp_position}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Employee No.</b> <a class="float-right">{{$employee->emp_number}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right">{{$employee->emp_username}}</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fa fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-9">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="card">
              <div class="card-header p-2">
                <button class="btn btn-warning float-right" id="enableprofile">Edit</button>
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#personal" data-toggle="tab">Personal</a></li>
                  <li class="nav-item"><a class="nav-link" href="#work" data-toggle="tab">Work</a></li>
                  <li class="nav-item"><a class="nav-link" href="#" data-toggle="tab">Others</a></li>
                  <li class="nav-item"><a class="nav-link" href="#" data-toggle="tab">Files</a></li>
                </ul>

              </div><!-- /.card-header -->
              <form class="form_profile" name="form_profile" method="POST" action="{{route('employee.update', $employee->id)}}">
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="personal">
                        <div class="row">
                          <div class="col-4">
                            <label>First Name</label> @if($errors->has('emp_fname')) <small class="text-danger"> First Name Cannot Be Empty</small> @endif
                            <input name="emp_fname" type="text" class="form-control {{$errors->has('emp_fname') ? 'is-invalid' : ''}}" placeholder="First Name" value="{{$employee->emp_fname}}">
                          </div>
                          <div class="col-4">
                            <label>Middle Name</label>
                            <input name="emp_mname" type="text" class="form-control" placeholder="Middle Name" value="{{$employee->emp_mname}}">
                          </div>
                          <div class="col-4">
                            <label>Last Name</label>
                            <input name="emp_lname" type="text" class="form-control" placeholder="Last Name" value="{{$employee->emp_lname}}">
                          </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="work">
                        <div class="row">
                          <div class="col-6">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Contact" value="{{$employee->emp_address}}">
                          </div>
                          <div class="col-3">
                            <label>Position</label>
                            <input type="text" class="form-control" placeholder="Position" value="{{$employee->emp_position}}">
                          </div>
                          <div class="col-3">
                            <label>Contact</label>
                            <input type="text" class="form-control" placeholder="Contact" value="{{$employee->emp_contact}}">
                          </div>
                        </div>
                    </div>
                    
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="card-footer">
                  <button id="updateprofile" type="submit" class="btn btn-primary float-right invisible">Save</button>
                </div>
              </form>
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection