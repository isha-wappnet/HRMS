@extends('layouts.auth')

@section('content')


  {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}

<section id="wrapper" class="login-register">
  <div class="login-box">
    <div class="white-box">
      <form class="form-horizontal form-material" id="registerform" method="POST" action="">
        @csrf
        <h3 class="box-title m-b-20">Sign In</h3>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" placeholder="Name" id="name" name="name">
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" placeholder="Email" id="email" name="email">
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="password"  placeholder="Password" id="pass" name="pass">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password"  placeholder="Confirm Password" id="cpass" name="cpass">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
            </div>
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Already have an account? <a href="login" class="text-primary m-l-5"><b>Sign In</b></a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>


<script>
  $('#registerform').validate({
    rules: {
        name: {
            required: true,
        },
        email: {
            required: true,
        },
        pass: {
            required: true,
            
        },
        cpass: {
            required: true,
            equalTo:'[name="pass"]',
        },
    },
    messages: {
      name: {
            required: "Please Enter Name",
        },
        email: {            
            email: "Please enter valid email id",
        },
        pass: {
            required: "Please enter password",
        },
        cpass: {
            required: "Confirm password is required",
            
        },
    },
  })
  </script>
  @endsection