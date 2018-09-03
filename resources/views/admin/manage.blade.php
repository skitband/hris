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
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
                <table id="table_employees" class="table table-bordered table-hover">
                  <tr>
                    <th>EMP NO.</th>
                    <th>NAME</th>
                    <th>BIRTHDATE</th>
                    <th>ADDRESS</th>
                    <th>POSITION</th>
                  </tr>
                  @foreach($employees as $employee)
                      <tr onclick="viewEmployee({{$employee->id}})" style="cursor: pointer;">
                    		<td>{{$employee->emp_id}}</td>
                    		<td>{{$employee->last_name}}, {{$employee->first_name}} {{$employee->middle_name}}</td>
                    		<td>{{$employee->birthdate}}</td>
                    		<td>{{$employee->address}}</td>
                    		<td>{{$employee->job}}</td>
                    	</tr>
                  @endforeach
                </table>
              </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
      	</div> -->
      	<div class="card-footer clearfix">
      		<ul class="pagination pagination-sm m-0 float-right">
            	{{$employees->links()}}
            </ul>
      	</div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection