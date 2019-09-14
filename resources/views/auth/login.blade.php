@extends('layouts.app')

@section('content')
  
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-success">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3"><small>Sign in with</small></div>
                <div class="btn-wrapper text-center">
                  <a href="#" class="mt-2 col-md-12 col-lg-6 btn-icon">
                    <span class="btn-inner--icon">
                      <img alt="image" src="../assets/img/icons/common/github.svg">
                    </span>
                    <span class="btn-inner--text">Github</span>
                  </a>
                  <a href="#" class="mt-2 col-md-12 col-lg-6 btn-icon">
                    <span class="btn-inner--icon">
                      <img alt="image" src="../assets/img/icons/common/google.svg">
                    </span>
                    <span class="btn-inner--text">Google</span>
                  </a>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-4">
                <div class="text-center text-muted mb-4">
                  <small>Or sign in with credentials</small>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input name="email" class="form-control" placeholder="Email" type="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input name="password" class="form-control" placeholder="Password" type="password">
                    </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input name="remember" class="custom-control-input" id="customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for="customCheckLogin">
                      <span>Remember me</span>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-success my-4 btn-block">
                        <i class="ni ni-active-40"></i>
                        Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-6">
                <a href="{{ route('password.request') }}" class="text-light"><small>Forgot password?</small></a>
              </div>
              <div class="col-6 text-right">
                <a href="/register" class="text-light"><small>Create new account</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endsection