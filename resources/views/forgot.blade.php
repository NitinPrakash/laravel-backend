@extends('layouts.bare')

@section('title','Login')

@section('content')

	<div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo text-center">
                <img src="public/images/your-logo-here.png">
              </div>
              <h6 class="font-weight-light text-center">Reset Password!</h6>
              <form class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username / Email">
                </div>                
                <div class="mt-3">
                  <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="{{env('APP_URL')}}">SUBMIT</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <!--<div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>-->
                  <a href="{{env('APP_URL')}}/" class="auth-link text-black pull-right">Sign IN</a>
                </div>
                <!--<div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>-->
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

@endsection