@extends('admin.main.master')
@section('title')HRIS | Admin @endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Manage Employees</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Employee List</h3>
          <div class="card-tools">
            <a href="{{route('employee.create')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Add Employee</a>
            <!-- <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> -->
          </div>
        </div>
        <div class="card-body">
          <table id="table_employees" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>EMP NO.</th>
                <th>NAME</th>
                <th>BIRTHDATE</th>
                <th>ADDRESS</th>
                <th>POSITION</th>
                <th>DATE ADDED</th>
                <th></th>
              </tr>
            </thead>
          </table>
        </div>
      	<div class="card-footer clearfix"> </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection