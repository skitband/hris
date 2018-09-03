@extends('layouts.master-emp-login')
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
      <p class="login-box-msg">Login Your Account</p>

      <form action="{{route('login')}}" method="post">
        <div class="form-group">
          <input name="username" type="text" class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" placeholder="Username" autocomplete="off">
        </div>
        <div class="form-group">
          <input name="password" type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" autocomplete="off">
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
      <p class="mb-0 float-right">
        <a href="{{ url('/register') }}" class="text-center">Register</a>
      </p>
      <p class="mb-1">
        <a href="{{ url('/password/reset') }}">Forgot Password</a>
      </p>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection