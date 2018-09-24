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
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.manage')}}">Manage Employee</a></li>
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
              <!-- <div><button class="btn btn-warning btn-sm " id="enableprofile">Upload Photo</button></div> -->
              <div class="card-body box-profile">
                
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle profilepic"
                         src="{{Storage::url('uploads/'.$employee->photo)}}"
                         alt="User profile picture">
                    <div class="profilemiddle">
                      <!-- <div class="profiletext">Upload Photo</div> -->
                    </div>
                </div>

                <h3 class="profile-username text-center">{{$employee->first_name}} {{str_limit($employee->middle_name,1,'.')}} {{$employee->last_name}} </h3>

                <p class="text-muted text-center">{{$employee->job}}</p>
                
                <form class="form_photo" action="{{route('employee.store_photo', $employee->id)}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <input type="file" id="photo" name="photo">
                  <input type="submit" class="btn btn-primary btn-sm float-right" name="change_photo" value="Save">
                </form>
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
                  {{$employee->course}} <br> {{$employee->school}} {{$employee->year_graduated}}
                </p>

                <hr>

                <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                <p class="text-muted">{{$employee->address}}</p>

                <hr>

                <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                @if ($employee->skills != "")
                  <p>
                  @foreach(explode(',', $employee->skills) as $skills) 
                    <span class="badge badge-primary">{{$skills}}</span>
                  @endforeach
                  </p>
                @endif

                <hr>

                <strong><i class="fa fa-soccer-ball-o mr-1"></i> Hobbies & Interest</strong>

                @if ($employee->hobbies != "")
                  <p>
                  @foreach(explode(',', $employee->hobbies) as $hobbies) 
                    <span class="badge badge-primary">{{$hobbies}}</span>
                  @endforeach
                  </p>
                @endif

                <hr>

                <strong><i class="fa fa-file-text-o mr-1"></i> More Info</strong>

                <p class="text-muted">{{$employee->more_info}}</p>
              </div>
              <!-- /.card-body -->
            </div>

            <!-- User Credentials Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Credentials</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b><i class="fa fa-briefcase"></i> Employee No.</b> <a class="float-right">{{$employee->emp_id}}</a>
                  </li>
                  <li class="list-group-item">
                    <b><i class="fa fa-user"></i> Username</b> <a class="float-right">{{str_limit($employee->first_name,1,$employee->last_name)}}</a>
                  </li>
                  <li class="list-group-item">
                    <b><i class="fa fa-lock"></i> Password</b> <a class="float-right">*****************</a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">Reset Password</a> <a class="float-right" href="#">Deactivate Account</a>
                  </li>
                </ul>
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
            <div class="card card-primary card-outline">
              <div class="card-header p-2">
                <button class="btn btn-primary btn-sm float-right" id="enableprofile">Edit</button>
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#personal" data-toggle="tab">Personal</a></li>
                  <li class="nav-item"><a class="nav-link" href="#work" data-toggle="tab">Work</a></li>
                  <li class="nav-item"><a class="nav-link" href="#others" data-toggle="tab">Others</a></li>
                  <li class="nav-item"><a class="nav-link" href="#files" data-toggle="tab">Files</a></li>
                </ul>

              </div><!-- /.card-header -->
              <form class="form_profile" name="form_profile" method="POST" action="{{route('employee.update', $employee->id)}}">
                <div class="card-body">
                  <div class="tab-content">
                    <!-- PERSONAL TAB -->
                    <div class="active tab-pane" id="personal">
                        <div class="row">
                          <div class="col-4">
                            <label>First Name</label> @if($errors->has('first_name')) <small class="text-danger"> First Name Cannot Be Empty</small> @endif
                            <input name="first_name" type="text" class="form-control {{$errors->has('first_name') ? 'is-invalid' : ''}}" placeholder="First Name" value="{{$employee->first_name}}">
                          </div>
                          <div class="col-4">
                            <label>Middle Name</label> 
                            <input name="middle_name" type="text" class="form-control" placeholder="Middle Name" value="{{$employee->middle_name}}">
                          </div>
                          <div class="col-4">
                            <label>Last Name</label> @if($errors->has('last_name')) <small class="text-danger"> Last Name Cannot Be Empty</small> @endif
                            <input name="last_name" type="text" class="form-control" placeholder="Last Name" value="{{$employee->last_name}}">
                          </div>
                          <div class="col-2">
                            <label>Date of Birth</label> @if($errors->has('birthdate')) <small class="text-danger"> Invalid Date of Birth</small> @endif
                            <input name="birthdate" type="date" class="form-control" placeholder="Date of Birth" value="{{$employee->birthdate}}">
                          </div>
                          <div class="col-1">
                            <label>Age</label>
                            @php $age = 2018; @endphp
                            <input type="text" class="form-control" placeholder="Age" value="@php echo $age - date('Y',strtotime($employee->birthdate)) @endphp" disabled>
                          </div>
                          <div class="col-2">
                            <label>Contact</label> @if($errors->has('contact')) <small class="text-danger"> Invalid Contact Details</small> @endif
                            <input name="contact" type="number" class="form-control" placeholder="Contact" value="{{$employee->contact}}">
                          </div>
                          <div class="col-4">
                            <label>Address</label> 
                            <input name="address" type="text" class="form-control" placeholder="Contact" value="{{$employee->address}}">
                          </div>
                          <div class="col-1">
                            <label>Height</label> 
                            <input name="height" type="text" class="form-control" placeholder="Height" value="{{$employee->height}}">
                          </div>
                          <div class="col-1">
                            <label>Weight</label> 
                            <input name="weight" type="text" class="form-control" placeholder="Weight" value="{{$employee->weight}}">
                          </div>
                          <div class="col-1">
                            <label>Blood Type</label> 
                            <input name="blood_type" type="text" class="form-control" placeholder="Blood Type" value="{{$employee->blood_type}}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <label>Fathers Name</label>
                            <input name="fathers_name" type="text" class="form-control {{$errors->has('first_name') ? 'is-invalid' : ''}}" placeholder="Fathers Name" value="{{$employee->fathers_name}}">
                          </div>
                          <div class="col-6">
                            <label>Mothers Name</label>
                            <input name="mothers_name" type="text" class="form-control {{$errors->has('mothers_name') ? 'is-invalid' : ''}}" placeholder="Mothers Name" value="{{$employee->mothers_name}}">
                          </div>
                        </div>
                    </div>
                    <!-- WORK TAB -->
                    <div class="tab-pane" id="work">
                        <div class="row">
                          <div class="col-3">
                            <label>Position</label>
                            <input name="job" type="text" class="form-control" placeholder="Position" value="{{$employee->job}}">
                          </div>
                          <div class="col-3">
                            <label>Department</label>
                            <input name="department" type="text" class="form-control" placeholder="Department" value="{{$employee->department}}">
                          </div>
                          <div class="col-3">
                            <label>Rank</label>
                            <input name="rank" type="text" class="form-control" placeholder="Rank" value="{{$employee->rank}}">
                          </div>
                          <div class="col-3">
                            <label>Level</label>
                            <input name="level" type="text" class="form-control" placeholder="Level" value="{{$employee->level}}">
                          </div>
                          
                        </div>
                    </div>
                    <!-- OTHERS TAB -->
                    <div class="tab-pane" id="others">
                        <div class="row">
                          <div class="col-6">
                            <label>School</label>
                            <input name="school" type="text" class="form-control" placeholder="School" value="{{$employee->school}}">
                          </div>
                          <div class="col-4">
                            <label>Course</label>
                            <input name="course" type="text" class="form-control" placeholder="Course" value="{{$employee->course}}">
                          </div>
                          <div class="col-2">
                            <label>Year</label>
                            <input name="year_graduated" type="text" class="form-control" placeholder="Year Graduated" value="{{$employee->year_graduated}}">
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <label>Skills</label>
                            <input name="skills" type="text" class="form-control" placeholder="Skills" value="{{$employee->skills}}">
                          </div>
                          <div class="col-6">
                            <label>Hobbies / Interest</label>
                            <input name="hobbies" type="text" class="form-control" placeholder="Hobbies / Interest" value="{{$employee->hobbies}}">
                          </div>
                        </div>
                    </div>
                    <!-- FILES TAB -->
                    <div class="tab-pane" id="files">
                        <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">Condensed Full Width Table</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                              <table class="table table-condensed">
                                <tbody><tr>
                                  <th style="width: 10px">#</th>
                                  <th>Task</th>
                                  <th>Progress</th>
                                  <th style="width: 40px">Label</th>
                                </tr>
                                <tr>
                                  <td>1.</td>
                                  <td>Update software</td>
                                  <td>
                                    <div class="progress progress-xs">
                                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                    </div>
                                  </td>
                                  <td><span class="badge bg-red">55%</span></td>
                                </tr>
                                <tr>
                                  <td>2.</td>
                                  <td>Clean database</td>
                                  <td>
                                    <div class="progress progress-xs">
                                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                    </div>
                                  </td>
                                  <td><span class="badge bg-yellow">70%</span></td>
                                </tr>
                                <tr>
                                  <td>3.</td>
                                  <td>Cron job running</td>
                                  <td>
                                    <div class="progress progress-xs progress-striped active">
                                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                    </div>
                                  </td>
                                  <td><span class="badge bg-light-blue">30%</span></td>
                                </tr>
                                <tr>
                                  <td>4.</td>
                                  <td>Fix and squish bugs</td>
                                  <td>
                                    <div class="progress progress-xs progress-striped active">
                                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                    </div>
                                  </td>
                                  <td><span class="badge bg-green">90%</span></td>
                                </tr>
                              </tbody></table>
                            </div>
                            <!-- /.box-body -->
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