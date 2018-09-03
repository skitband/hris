@extends('layouts.master-admin-login')
@section('title')MAA | HRIS @endsection

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>MAA |</b> HRIS</a>
  </div>
  <!-- /.login-logo -->
  @if($errors->any())
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>     
  @endif
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Administrator Login</p>

      <form action="{{route('admin.login.submit')}}" method="post">
        <div class="form-group">
          <input id="username" name="username" type="text" class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" placeholder="Username" autocomplete="off">
        </div>
        <div class="form-group">
          <input id="password" name="password" type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" autocomplete="off">
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
          </div>
          <!-- /.col -->
        </div>
        {{csrf_field()}}
        {{method_field('POST')}}
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->
      <br>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection