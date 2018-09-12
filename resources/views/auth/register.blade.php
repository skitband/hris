@extends('layouts.master-register')
@section('title')COMPANY | HRIS @endsection

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>COMPANY |</b> HRIS</a>
  </div>
  @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{Session::get('message')}}
    </div>
  @endif

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
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register</p>

      <form action="{{ url('/register') }}" method="POST">
        <div class="form-group">
          <input name="username" type="text" class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" placeholder="Username" autocomplete="off">
        </div>
        <div class="form-group">
          <input name="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email" autocomplete="off">
        </div>
        <div class="form-group">
          <input name="password" type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" autocomplete="off">
        </div>
        <div class="form-group">
          <input name="password_confirmation" type="password" class="form-control {{$errors->has('confirm') ? 'is-invalid' : ''}}" placeholder="Confirm Password" autocomplete="off">
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
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
      <p class="mb-0">
        <a href="{{ url('/login') }}" class="text-center">back</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection