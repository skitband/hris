@extends('admin.main.master')
@section('title')HRIS | Admin @endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Employee Profile</h1>
          </div>
          <!-- Breadcrumb -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.manage')}}">Manage Employee</a></li>
              <li class="breadcrumb-item active">Create Employee</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="card card-primary card-outline">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#personal" data-toggle="tab">Personal</a></li>
                  <li class="nav-item"><a class="nav-link" href="#work" data-toggle="tab">Work</a></li>
                  <li class="nav-item"><a class="nav-link" href="#others" data-toggle="tab">Others</a></li>
                  <li class="nav-item"><a class="nav-link" href="#files" data-toggle="tab">Files</a></li>
                </ul>

              </div><!-- /.card-header -->
              <form class="add_profile" name="form_profile" method="POST" action="{{route('employee.store')}}" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="tab-content">
                    <!-- PERSONAL TAB -->
                    <div class="active tab-pane" id="personal">
                        <div class="row">
                          <div class="col-3">
                            <label>First Name</label> @if($errors->has('first_name')) <small class="text-danger"> First Name Cannot Be Empty</small> @endif
                            <input name="first_name" type="text" class="form-control {{$errors->has('first_name') ? 'is-invalid' : ''}}" placeholder="First Name" >
                          </div>
                          <div class="col-3">
                            <label>Middle Name</label> 
                            <input name="middle_name" type="text" class="form-control" placeholder="Middle Name">
                          </div>
                          <div class="col-3">
                            <label>Last Name</label> @if($errors->has('last_name')) <small class="text-danger"> Last Name Cannot Be Empty</small> @endif
                            <input name="last_name" type="text" class="form-control" placeholder="Last Name" >
                          </div>
                          <div class="col-3">
                            <label>Photo</label>
                            <input name="photo" type="file" class="form-control">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-2">
                            <label>Date of Birth</label> @if($errors->has('birthdate')) <small class="text-danger"> Invalid Date of Birth</small> @endif
                            <input name="birthdate" type="date" class="form-control" placeholder="Date of Birth" >
                          </div>
                          <div class="col-2">
                            <label>Contact</label> @if($errors->has('contact')) <small class="text-danger"> Invalid Contact Details</small> @endif
                            <input name="contact" type="number" class="form-control" placeholder="Contact" >
                          </div>
                          <div class="col-3">
                            <label>Address</label> 
                            <input name="address" type="text" class="form-control" placeholder="Contact" >
                          </div>
                          <div class="col-2">
                            <label>Email</label> 
                            <input name="email" type="text" class="form-control" placeholder="Email Address" >
                          </div>
                          <div class="col-1">
                            <label>Height</label> 
                            <input name="height" type="text" class="form-control" placeholder="Height">
                          </div>
                          <div class="col-1">
                            <label>Weight</label> 
                            <input name="weight" type="text" class="form-control" placeholder="Weight">
                          </div>
                          <div class="col-1">
                            <label>Blood Type</label> 
                            <input name="blood_type" type="text" class="form-control" placeholder="Blood Type">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <label>Fathers Name</label>
                            <input name="fathers_name" type="text" class="form-control {{$errors->has('first_name') ? 'is-invalid' : ''}}" placeholder="Fathers Name">
                          </div>
                          <div class="col-6">
                            <label>Mothers Name</label>
                            <input name="mothers_name" type="text" class="form-control {{$errors->has('mothers_name') ? 'is-invalid' : ''}}" placeholder="Mothers Name">
                          </div>
                        </div>
                    </div>
                    <!-- WORK TAB -->
                    <div class="tab-pane" id="work">
                        <div class="row">
                          <div class="col-3">
                            <label>Position</label>
                            <input name="job" type="text" class="form-control" placeholder="Position">
                          </div>
                          <div class="col-3">
                            <label>Department</label>
                            <input name="department" type="text" class="form-control" placeholder="Department">
                          </div>
                          <div class="col-3">
                            <label>Rank</label>
                            <input name="rank" type="text" class="form-control" placeholder="Rank">
                          </div>
                          <div class="col-3">
                            <label>Level</label>
                            <input name="level" type="text" class="form-control" placeholder="Level">
                          </div>
                          
                        </div>
                    </div>
                    <!-- OTHERS TAB -->
                    <div class="tab-pane" id="others">
                        <div class="row">
                          <div class="col-6">
                            <label>School</label>
                            <input name="school" type="text" class="form-control" placeholder="School">
                          </div>
                          <div class="col-4">
                            <label>Course</label>
                            <input name="course" type="text" class="form-control" placeholder="Course">
                          </div>
                          <div class="col-2">
                            <label>Year</label>
                            <input name="year_graduated" type="text" class="form-control" placeholder="Year Graduated">
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <label>Skills</label>
                            <input name="skills" type="text" class="form-control" placeholder="Skills">
                          </div>
                          <div class="col-6">
                            <label>Hobbies / Interest</label>
                            <input name="hobbies" type="text" class="form-control" placeholder="Hobbies / Interest">
                          </div>
                        </div>
                    </div>
                    <!-- FILES TAB -->
                    <div class="tab-pane" id="files">
                      
                        <div class="box">
                            <div class="box-header">
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <input type="file" name="file[]" multiple>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
                {{csrf_field()}}
                {{method_field('POST')}}
                <div class="card-footer">
                  <button id="addemployee" type="submit" class="btn btn-primary float-right">Save</button>
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