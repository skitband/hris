@extends('admin.main.master')
@section('title')HRIS | Admin @endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Maintenance</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('settings.index')}}">Settings</a></li>
              <li class="breadcrumb-item active">Maintenance</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- <div class="col-md-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Entry</h3>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="row active tab-pane" id="new_job">
                    <form action="" method="POST">
                          <label>Job Name</label> 
                          <input name="job_name" type="text" class="form-control" placeholder="Job Name">
                          <label>Job Description</label> 
                          <input name="job_description" type="text" class="form-control" placeholder="Job Description">
                    </form>    
                  </div>
                  <div class="row tab-pane" id="new_dept">
                    <form action="" method="POST">
                          <label>Department Name</label> 
                          <input name="dept_name" type="text" class="form-control" placeholder="Department Name">
                          <label>Department Description</label> 
                          <input name="dept_description" type="text" class="form-control" placeholder="Department Description">
                    </form>    
                  </div>
                </div>
              </div>
              <div class="card-footer">
                
              </div>
            </div>
          </div> -->
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#job" data-target="#job" data-toggle="tab">Jobs</a></li>
                  <li class="nav-item"><a class="nav-link" href="#dept" data-target="#dept" data-toggle="tab">Departments</a></li>
                  <li class="nav-item"><a class="nav-link" href="#branch" data-target="#branch" data-toggle="tab">Branches</a></li>
                </ul>
              </div>
                <div class="card-body">
                  <div class="tab-content">
                    <!-- JOB TAB -->
                    <div class="active tab-pane" id="job">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">New Job</h3>
                              </div>
                              <div class="card-body">
                                  <form action="" method="POST">
                                        <label>Job Name</label> 
                                        <input name="job_name" type="text" class="form-control" placeholder="Job Name">
                                        <label>Job Description</label> 
                                        <input name="job_description" type="text" class="form-control" placeholder="Job Description">
                                  </form>
                              </div>
                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-9">
                            <table class="table table-bordered">
                              <tbody>
                                <tr>
                                  <th style="width: 10px">#</th>
                                  <th>Job Name</th>
                                  <th>Job Description</th>
                                </tr>
                                <tr>
                                  <td>1.</td>
                                  <td>Update software</td>
                                  <td>
                                    <div class="progress progress-xs">
                                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="dept">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">New Department</h3>
                              </div>
                              <div class="card-body">
                                  <form action="" method="POST">
                                        <div class="form-group">
                                          <label for="dept_name">Department Name</label>
                                          <input name="dept_name" type="text" class="form-control" placeholder="Department Name">
                                        </div>
                                        <div class="form-group">
                                          <label for="dept_description">Department Description</label>
                                          <textarea name="dept_description" type="text" class="form-control">Department Description</textarea>
                                        </div>
                                        <div class="form-group">
                                          <label for="dept_lead">Department Leads</label><br>
                                          <select class="form-control leads select2-hidden-accessible" multiple="" style="width: 100%;" tabindex="-1" aria-hidden="true" name="dept_leads[]">
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                          </select>
                                        </div>
                                  </form>
                              </div>
                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-9">
                            <table class="table table-bordered">
                              <tbody>
                                <tr>
                                  <th style="width: 10px">#</th>
                                  <th>Job Name</th>
                                  <th>Job Description</th>
                                </tr>
                                <tr>
                                  <td>1.</td>
                                  <td>Update software</td>
                                  <td>
                                    <div class="progress progress-xs">
                                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="branch">
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
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
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection