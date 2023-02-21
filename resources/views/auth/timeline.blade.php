    @extends('layouts.auth')

    @section('content')
    @include('layouts.header')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Timeline</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Ui Elements</a></li>
            <li class="active">Timeline</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- .row -->
      <div class="row">
        <div class="col-md-12">
          <div class="white-box">
            <ul class="timeline">
              <li>
                <div class="timeline-badge success"><img class="img-responsive" alt="user" src="{{asset('assets/images/users/genu.jpg')}}"> </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Genelia</h4>
                    <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small> </p>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge warning"><img class="img-responsive" alt="user" src="{{asset('assets/images/users/ritesh.jpg') }}"> </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Ritesh Deshmukh</h4>
                  </div>
                  <div class="timeline-body">
                    <p><img class="img-responsive" alt="user" src="{{asset('assets/images/big/img1.jpg')}}"></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge danger"><i class="fa fa-bomb"></i> </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge info"><i class="fa fa-save"></i> </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                    <hr>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-gear"></i> <span class="caret"></span> </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a> </li>
                        <li><a href="#">Another action</a> </li>
                        <li><a href="#">Something else here</a> </li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i> </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.row -->
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
@endsection
@include('layouts.footer')
