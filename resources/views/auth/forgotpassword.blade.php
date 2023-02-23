@extends('layouts.auth')
@section('content')
<title>Forgotpassword page</title>
<center>
<div class="card text-center" style="width: 300px;">
    <div class="card-header h5 text-white bg-primary">Password Reset</div>
    <div class="card-body px-5">

        <div class="white-box">
            @if (session('error'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">×</button>
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">×</button>
                {{ session('success') }}
            </div>
        @endif
        <p class="card-text py-2">
            Enter your email address and we'll send you an email with instructions to reset your password.
        </p>
        <form method="POST" action="{{route('forgotPasswordValidate')}}">
            @csrf
            <input type="email" id="email" name="email" placeholder="Enter registerd email" class="form-control my-3" />
            <br>
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                          type="submit">
                         Submit
                      </button>
        </form>
        </div>
    </div>
</div></center>
@endsection
@include('layouts.footer')