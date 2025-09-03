@extends('frontend.master')

@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Admin Login</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="contact-us-form" style="padding-top: 0;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div style="background:#ffffff; border-radius:10px; box-shadow:0 10px 25px rgba(0,0,0,0.08); padding:32px;">
            <div class="section-heading" style="text-align:center; margin-bottom:22px;">
              <h6>Welcome back</h6>
              <h4>Access your dashboard</h4>
            </div>
            <form method="POST" action="{{ route('login.post') }}">
              @csrf
              <div class="row align-items-end">
                <div class="col-md-5">
                  <fieldset>
                    <label for="email" style="font-weight:500; margin-bottom:6px;">Email</label><br>
                    <input type="email" name="email" id="email" placeholder="you@example.com" value="{{ old('email') }}" required>
                  </fieldset>
                </div>
                <div class="col-md-5">
                  <fieldset>
                    <label for="password" style="font-weight:500; margin-bottom:6px;">Password</label><br>
                    <input type="password" name="password" id="password" placeholder="••••••••" required>
                  </fieldset>
                </div>
                <div class="col-md-2">
                  <fieldset>
                    <button type="submit" class="orange-button" style="width:100%; margin-top:28px;">Login</button>
                  </fieldset>
                </div>
                <div class="col-12" style="margin-top:8px;">
                  <div class="d-flex justify-content-between align-items-center">
                    <label style="margin:0;">
                      <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="/" style="font-size:14px;">Back to site</a>
                  </div>
                </div>
                @if ($errors->any())
                  <div class="col-12" style="margin-top:14px;">
                    <div class="alert alert-danger" style="margin:0;">
                      {{ $errors->first() }}
                    </div>
                  </div>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


