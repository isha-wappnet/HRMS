{{-- @include('layouts.header') --}}
@extends('layouts.auth')
@section('content')
<section id="wrapper" class="error-page">
  <div class="error-box">
    <div class="error-body text-center">
      <h1>403</h1>
      <h3 class="text-uppercase">Forbidden Error</h3>
      <p class="text-muted m-t-30 m-b-30 text-uppercase">You don't have permission to access on this server.</p>
      <a href="index.html" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a> </div>
   
  </div>
</section>


@include('layouts.footer')
@endsection