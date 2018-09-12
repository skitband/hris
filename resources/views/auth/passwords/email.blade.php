@extends('layouts.master')
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
      <p class="login-box-msg">Forgot Password</p>

      <form role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Enter Email Address">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-block btn-flat btn-primary">
                    Send Password Reset Link
                </button>
            </div>
        </div>
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

