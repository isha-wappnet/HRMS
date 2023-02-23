<form class="form-horizontal form-material"  method="POST" action="{{route('resetpassword')}}">
    @csrf
    <h3 class="box-title m-b-20">Sign In</h3>
    <div class="form-group">
        <div class="col-xs-12">
            <input class="form-control" type="password" id="password" name="password"  placeholder="password" />
                </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <input class="form-control" type="password" id="cpassword" name="cpassword" placeholder="cPassword" />
            
          </div>
    </div>
    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                          type="submit">
                       Update password
                      </button>