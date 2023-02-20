    @include('layouts.header')
    @extends('layouts.auth')
    @section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Animation Page</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Animation Page</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- Row -->
      <div class="row">
        <div class="col-md-12">
          <div class="white-box">
            <h3 class="box-title">Animation</h3>
            <small>Select the animation style class and check the animation to the image, you can use any of this animation to anywhere, just place exact word. example <code>.bounce</code></small>
            <!-- Form -->
            <form class="m-b-30 m-t-40">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <div class="input-group">

                          <select class="form-control js--animations">
                              <optgroup label="Attention Seekers">
                                  <option value="bounce">bounce</option>
                                  <option value="flash">flash</option>
                                  <option value="pulse">pulse</option>
                                  <option value="rubberBand">rubberBand</option>
                                  <option value="shake">shake</option>
                                  <option value="swing">swing</option>
                                  <option value="tada">tada</option>
                                  <option value="wobble">wobble</option>
                                  <option value="jello">jello</option>
                              </optgroup>

                              <optgroup label="Bouncing Entrances">
                                  <option value="bounceIn">bounceIn</option>
                                  <option value="bounceInDown">bounceInDown</option>
                                  <option value="bounceInLeft">bounceInLeft</option>
                                  <option value="bounceInRight">bounceInRight</option>
                                  <option value="bounceInUp">bounceInUp</option>
                              </optgroup>

                              <optgroup label="Bouncing Exits">
                                  <option value="bounceOut">bounceOut</option>
                                  <option value="bounceOutDown">bounceOutDown</option>
                                  <option value="bounceOutLeft">bounceOutLeft</option>
                                  <option value="bounceOutRight">bounceOutRight</option>
                                  <option value="bounceOutUp">bounceOutUp</option>
                              </optgroup>

                              <optgroup label="Fading Entrances">
                                  <option value="fadeIn">fadeIn</option>
                                  <option value="fadeInDown">fadeInDown</option>
                                  <option value="fadeInDownBig">fadeInDownBig</option>
                                  <option value="fadeInLeft">fadeInLeft</option>
                                  <option value="fadeInLeftBig">fadeInLeftBig</option>
                                  <option value="fadeInRight">fadeInRight</option>
                                  <option value="fadeInRightBig">fadeInRightBig</option>
                                  <option value="fadeInUp">fadeInUp</option>
                                  <option value="fadeInUpBig">fadeInUpBig</option>
                              </optgroup>

                              <optgroup label="Fading Exits">
                                  <option value="fadeOut">fadeOut</option>
                                  <option value="fadeOutDown">fadeOutDown</option>
                                  <option value="fadeOutDownBig">fadeOutDownBig</option>
                                  <option value="fadeOutLeft">fadeOutLeft</option>
                                  <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                  <option value="fadeOutRight">fadeOutRight</option>
                                  <option value="fadeOutRightBig">fadeOutRightBig
                                  </option>
                                  <option value="fadeOutUp">fadeOutUp</option>
                                  <option value="fadeOutUpBig">fadeOutUpBig</option>
                              </optgroup>

                              <optgroup label="Flippers">
                                  <option value="flip">flip</option>
                                  <option value="flipInX">flipInX</option>
                                  <option value="flipInY">flipInY</option>
                                  <option value="flipOutX">flipOutX</option>
                                  <option value="flipOutY">flipOutY</option>
                              </optgroup>

                              <optgroup label="Lightspeed">
                                  <option value="lightSpeedIn">lightSpeedIn</option>
                                  <option value="lightSpeedOut">lightSpeedOut</option>
                              </optgroup>

                              <optgroup label="Rotating Entrances">
                                  <option value="rotateIn">rotateIn</option>
                                  <option value="rotateInDownLeft">rotateInDownLeft
                                  </option>
                                  <option value="rotateInDownRight">rotateInDownRight
                                  </option>
                                  <option value="rotateInUpLeft">rotateInUpLeft</option>
                                  <option value="rotateInUpRight">rotateInUpRight
                                  </option>
                              </optgroup>

                              <optgroup label="Rotating Exits">
                                  <option value="rotateOut">rotateOut</option>
                                  <option value="rotateOutDownLeft">rotateOutDownLeft
                                  </option>
                                  <option value="rotateOutDownRight">
                                      rotateOutDownRight
                                  </option>
                                  <option value="rotateOutUpLeft">rotateOutUpLeft
                                  </option>
                                  <option value="rotateOutUpRight">rotateOutUpRight
                                  </option>
                              </optgroup>

                              <optgroup label="Sliding Entrances">
                                  <option value="slideInUp">slideInUp</option>
                                  <option value="slideInDown">slideInDown</option>
                                  <option value="slideInLeft">slideInLeft</option>
                                  <option value="slideInRight">slideInRight</option>

                              </optgroup>
                              <optgroup label="Sliding Exits">
                                  <option value="slideOutUp">slideOutUp</option>
                                  <option value="slideOutDown">slideOutDown</option>
                                  <option value="slideOutLeft">slideOutLeft</option>
                                  <option value="slideOutRight">slideOutRight</option>

                              </optgroup>

                              <optgroup label="Zoom Entrances">
                                  <option value="zoomIn">zoomIn</option>
                                  <option value="zoomInDown">zoomInDown</option>
                                  <option value="zoomInLeft">zoomInLeft</option>
                                  <option value="zoomInRight">zoomInRight</option>
                                  <option value="zoomInUp">zoomInUp</option>
                              </optgroup>

                              <optgroup label="Zoom Exits">
                                  <option value="zoomOut">zoomOut</option>
                                  <option value="zoomOutDown">zoomOutDown</option>
                                  <option value="zoomOutLeft">zoomOutLeft</option>
                                  <option value="zoomOutRight">zoomOutRight</option>
                                  <option value="zoomOutUp">zoomOutUp</option>
                              </optgroup>

                              <optgroup label="Specials">
                                  <option value="hinge">hinge</option>
                                  <option value="rollIn">rollIn</option>
                                  <option value="rollOut">rollOut</option>
                              </optgroup>
                          </select>

                                <span class="input-group-btn">
                                  <button class="btn btn-info js--triggerAnimation"
                                          type="button">Animate Me !
                                  </button>
                                </span>
                      </div>
                    </div>
                </div>
            </form>
            <!-- / Form -->
            <!-- div --> 
            <div class="text-center">
                <span id="animationSandbox" style="display: block;">
                      <img src="{{asset('assets/images/img2.jpg')}}">
                </span>
            </div>
            <!-- / div -->  
          </div>
        </div>
      </div>
      <!-- /.Row -->
      <!-- .right-sidebar -->
      <div class="right-sidebar">
        <div class="slimscrollright">
          <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
          <div class="r-panel-body">
            <ul>
              <li><b>Layout Options</b></li>
              <li>
                <div class="checkbox checkbox-info">
                  <input id="checkbox1" type="checkbox" class="fxhdr">
                  <label for="checkbox1"> Fix Header </label>
                </div>
              </li>
              <li>
                <div class="checkbox checkbox-warning">
                  <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                  <label for="checkbox2"> Fix Sidebar </label>
                </div>
              </li>
              <li>
                <div class="checkbox checkbox-success">
                  <input id="checkbox4" type="checkbox" class="open-close">
                  <label for="checkbox4" > Toggle Sidebar </label>
                </div>
              </li>
            </ul>
            <ul id="themecolors" class="m-t-20">
              <li><b>With Light sidebar</b></li>
              <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
              <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
              <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
              <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
              <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
              <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
              <li><b>With Dark sidebar</b></li>
              <br/>
              <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
              <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
              <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>

              <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
              <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
              <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
            </ul>
            <ul class="m-t-20 chatonline">
              <li><b>Chat option</b></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img"  class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img"  class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->
    
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<script>
    function testAnim(x) {
      $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
      });
    };

    $(document).ready(function(){
      $('.js--triggerAnimation').click(function(e){
        e.preventDefault();
        var anim = $('.js--animations').val();
        testAnim(anim);
      });

      $('.js--animations').change(function(){
        var anim = $(this).val();
        testAnim(anim);
      });
    });

</script>
@include('layouts.footer')
@endsection