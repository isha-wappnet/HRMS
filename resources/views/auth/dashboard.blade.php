@extends('layouts.auth')

@section('content')
    @include('layouts.header')

   

    <!-- Page Content -->
    <div>
        <div id="page-wrapper">
            <div class="container-fluid">
              @if (session('error'))
              <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  {{ session('error') }}
              </div>
          @endif
          @if (session('success'))
              <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  {{ session('success') }}
              </div>
          @endif
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard 1</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820"
                            target="_blank"
                            class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy
                            Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard 1</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="row row-in">
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E"
                                                class="linea-icon linea-basic"></i>
                                            <h5 class="text-muted vb">MYNEW CLIENTS</h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-danger">23</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 40%"> <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic"
                                                data-icon="&#xe01b;"></i>
                                            <h5 class="text-muted vb">NEW PROJECTS</h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-megna">169</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-megna" role="progressbar"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 40%"> <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic"
                                                data-icon="&#xe00b;"></i>
                                            <h5 class="text-muted vb">NEW INVOICES</h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-primary">157</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 40%"> <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6  b-0">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic"
                                                data-icon="&#xe016;"></i>
                                            <h5 class="text-muted vb">All PROJECTS</h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-success">431</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 40%"> <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-7 col-lg-9 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Yearly Sales</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>iPhone</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #fb9678;"></i>iPad</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>iPod</h5>
                                </li>
                            </ul>
                            <div id="morris-area-chart" style="height: 340px;"></div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3 col-sm-6 col-xs-12">
                        <div class="bg-theme-dark m-b-15">
                            <div class="row weather p-20">
                                <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 m-t-40">
                                    <h3>&nbsp;</h3>
                                    <h1>73<sup>°F</sup></h1>
                                    <p class="text-white">AHMEDABAD, INDIA</p>
                                </div>
                                <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 text-right"> <i
                                        class="wi wi-day-cloudy-high"></i><br />
                                    <br />
                                    <b class="text-white">SUNNEY DAY</b>
                                    <p class="w-title-sub">April 14</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3 col-sm-6 col-xs-12">
                        <div class="bg-theme m-b-15">
                            <div id="myCarouse2" class="carousel vcarousel slide p-20">
                                <!-- Carousel items -->
                                <div class="carousel-inner ">
                                    <div class="active item">
                                        <h3 class="text-white">My Acting blown <span class="font-bold">Your Mind</span>
                                            and you also laugh at the moment</h3>
                                        <div class="twi-user"><img src="{{ asset('assets/images/users/hritik.jpg') }}"
                                                alt="user" class="img-circle img-responsive pull-left">
                                            <h4 class="text-white m-b-0">Govinda</h4>
                                            <p class="text-white">Actor</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h3 class="text-white">My Acting blown <span class="font-bold">Your Mind</span>
                                            and you also laugh at the moment</h3>
                                        <div class="twi-user"><img src="{{ asset('assets/images/users/genu.jpg') }}"
                                                alt="user" class="img-circle img-responsive pull-left">
                                            <h4 class="text-white m-b-0">Govinda</h4>
                                            <p class="text-white">Actor</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h3 class="text-white">My Acting blown <span class="font-bold">Your Mind</span>
                                            and you also laugh at the moment</h3>
                                        <div class="twi-user"><img src="{{ asset('assets/images/users/ritesh.jpg') }}"
                                                alt="user" class="img-circle img-responsive pull-left">
                                            <h4 class="text-white m-b-0">Govinda</h4>
                                            <p class="text-white">Actor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent Comments</h3>
                            <div class="comment-center">
                                <div class="comment-body">
                                    <div class="user-img"> <img src="{{ asset('assets/images/users/pawandeep.jpg') }}"
                                            alt="user" class="img-circle"></div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium
                                            lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque
                                            molestie feugiat.</span> <span
                                            class="label label-rounded label-info">PENDING</span><a
                                            href="javacript:void(0)" class="action"><i
                                                class="ti-close text-danger"></i></a> <a href="javacript:void(0)"
                                            class="action"><i class="ti-check text-success"></i></a><span
                                            class="time pull-right">April 14, 2016</span>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <div class="user-img"> <img src="{{ asset('assets/images/users/sonu.jpg') }}"
                                            alt="user" class="img-circle"> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5>
                                        <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium
                                            lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque
                                            molestie feugiat.</span><span
                                            class="label label-rounded label-success">APPROVED</span><a
                                            href="javacript:void(0)" class="action"><i
                                                class="ti-close text-danger"></i></a> <a href="javacript:void(0)"
                                            class="action"><i class="ti-check text-success"></i></a><span
                                            class="time pull-right">April 14, 2016</span>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <div class="user-img"> <img src="{{ asset('assets/images/users/arijit.jpg') }}"
                                            alt="user" class="img-circle"> </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5>
                                        <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium
                                            lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque
                                            molestie feugiat. </span><span
                                            class="label label-rounded label-danger">REJECTED</span><a
                                            href="javacript:void(0)" class="action"><i
                                                class="ti-close text-danger"></i></a> <a href="javacript:void(0)"
                                            class="action"><i class="ti-check text-success"></i></a><span
                                            class="time pull-right">April 14, 2016</span>
                                    </div>
                                </div>
                                <div class="comment-body b-none">
                                    <div class="user-img"> <img src="{{ asset('assets/images/users/pawandeep.jpg') }}"
                                            alt="user" class="img-circle"></div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium
                                            lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque
                                            molestie feugiat.</span> <span
                                            class="label label-rounded label-info">PENDING</span> <a
                                            href="javacript:void(0)" class="action"><i
                                                class="ti-close text-danger"></i></a> <a href="javacript:void(0)"
                                            class="action"><i class="ti-check text-success"></i></a><span
                                            class="time pull-right">April 14, 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent sales
                                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                    <select class="form-control pull-right row b-none">
                                        <option>March 2016</option>
                                        <option>April 2016</option>
                                        <option>May 2016</option>
                                        <option>June 2016</option>
                                        <option>July 2016</option>
                                    </select>
                                </div>
                            </h3>
                            <div class="row sales-report">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h2>March 2016</h2>
                                    <p>SALES REPORT</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 ">
                                    <h1 class="text-right text-success m-t-20">$3,690</h1>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>

                                            <th>NAME</th>
                                            <th>STATUS</th>
                                            <th>DATE</th>
                                            <th>PRICE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td class="txt-oflo">Elite admin</td>
                                            <td><span class="label label-megna label-rounded">SALE</span> </td>
                                            <td class="txt-oflo">April 18</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>

                                            <td class="txt-oflo">Real Homes</td>
                                            <td><span class="label label-info label-rounded">EXTENDED</span></td>
                                            <td class="txt-oflo">April 19</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>

                                            <td class="txt-oflo">Medical Pro</td>
                                            <td><span class="label label-danger label-rounded">TAX</span></td>
                                            <td class="txt-oflo">April 20</td>
                                            <td><span class="text-danger">-$24</span></td>
                                        </tr>
                                        <tr>

                                            <td class="txt-oflo">Hosting press</td>
                                            <td><span class="label label-megna label-rounded">SALE</span></td>
                                            <td class="txt-oflo">April 21</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>

                                            <td class="txt-oflo">Helping Hands</td>
                                            <td><span class="label label-success label-rounded">MEMBER</span></td>
                                            <td class="txt-oflo">April 22</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>

                                            <td class="txt-oflo">Digital Agency</td>
                                            <td><span class="label label-megna label-rounded">SALE</span> </td>
                                            <td class="txt-oflo">April 23</td>
                                            <td><span class="text-danger">-$14</span></td>
                                        </tr>
                                        <tr>

                                            <td class="txt-oflo">Helping Hands</td>
                                            <td><span class="label label-success label-rounded">MEMBER</span></td>
                                            <td class="txt-oflo">April 22</td>
                                            <td><span class="text-success">$64</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#">Check all the sales</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!--row -->
                <div class="row">
                    <div class="col-md-8 col-lg-9 col-sm-12 col-xs-12 pull-right">
                        <div class="white-box">
                            <h3 class="box-title">Sales Difference</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Site A View</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>Site B View</h5>
                                </li>
                            </ul>
                            <div id="morris-area-chart2" style="height: 370px;"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box m-b-15">
                            <h3 class="box-title">Sales Difference</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-info">$647</h1>
                                    <p class="text-muted">APRIL 2016</p>
                                    <b>(150 Sales)</b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sparkline2dash" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box bg-purple m-b-15">
                            <h3 class="text-white box-title">VISIT STATASTICS</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-white">$347</h1>
                                    <p class="light_op_text">APRIL 2016</p>
                                    <b class="text-white">(150 Sales)</b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sales1" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">To Do List</h3>
                            <ul class="list-task list-group" data-role="tasklist">
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                        <label for="inputSchedule"> <span>Schedule meeting</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                        <label for="inputCall"> <span>Give Purchase report</span> <span
                                                class="label label-danger">Today</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                        <label for="inputBook"> <span>Book flight for holiday</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                        <label for="inputForward"> <span>Forward all tasks</span> <span
                                                class="label label-warning">2 weeks</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                        <label for="inputRecieve"> <span>Recieve shipment</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                        <label for="inputForward2"> <span>Important tasks</span> <span
                                                class="label label-success">2 weeks</span> </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">You have 5 new messages</h3>
                            <div class="message-center"> <a href="#">
                                    <div class="user-img"> <img src="{{ asset('assets/images/users/pawandeep.jpg') }}"
                                            alt="user" class="img-circle"> <span
                                            class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30
                                            AM</span>
                                    </div>
                                </a> <a href="#">
                                    <div class="user-img"> <img src="{{ asset('assets/images/users/sonu.jpg') }}"
                                            alt="user" class="img-circle"> <span
                                            class="profile-status busy pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5>
                                        <span class="mail-desc">I've sung a song! See you at</span> <span
                                            class="time">9:10 AM</span>
                                    </div>
                                </a> <a href="#">
                                    <div class="user-img"> <img src="{{ asset('assets/images/users/arijit.jpg') }}"
                                            alt="user" class="img-circle"> <span
                                            class="profile-status away pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5>
                                        <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                    </div>
                                </a> <a href="#">
                                    <div class="user-img"> <img src="{{ asset('assets/images/users/genu.jpg') }}"
                                            alt="user" class="img-circle"> <span
                                            class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Genelia Deshmukh</h5>
                                        <span class="mail-desc">I love to do acting and dancing</span> <span
                                            class="time">9:08 AM</span>
                                    </div>
                                </a> <a href="#" class="b-none">
                                    <div class="user-img"> <img src="{{ asset('assets/images/users/pawandeep.jpg') }}"
                                            alt="user" class="img-circle"> <span
                                            class="profile-status offline pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02
                                            AM</span>
                                    </div>
                                </a> </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Chat</h3>
                            <div class="chat-box">
                                <ul class="chat-list slimscroll" style="overflow: hidden;" tabindex="5005">
                                    <li>
                                        <div class="chat-image"> <img alt="male"
                                                src="{{ asset('assets/images/users/sonu.jpg') }}"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Sonu Nigam</h4>
                                                <p> Hi, All! </p>
                                                <b>10.00 am</b>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="odd">
                                        <div class="chat-image"> <img alt="Female"
                                                src="{{ asset('assets/images/users/genu.jpg') }}"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Genelia</h4>
                                                <p> Hi, How are you Sonu? ur next concert? </p>
                                                <b>10.03 am</b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chat-image"> <img alt="male"
                                                src="{{ asset('assets/images/users/ritesh.jpg') }}"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Ritesh</h4>
                                                <p> Hi, Sonu and Genelia, </p>
                                                <b>10.05 am</b>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Say something">
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" type="button">Send</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                        </div>
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
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
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
                                <br />
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a>
                                </li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>

                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a>
                                </li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li><a href="javascript:void(0)"><img src="{{ asset('assets/images/users/varun.jpg') }}"
                                            alt="user-img" class="img-circle"> <span>Varun Dhavan <small
                                                class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ asset('assets/images/users/genu.jpg') }}"
                                            alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small
                                                class="text-warning">Away</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ asset('assets/images/users/ritesh.jpg') }}"
                                            alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small
                                                class="text-danger">Busy</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ asset('assets/images/users/arijit.jpg') }}"
                                            alt="user-img" class="img-circle"> <span>Arijit Sinh <small
                                                class="text-muted">Offline</small></span></a></li>
                                <li><a href="javascript:void(0)"><img
                                            src="{{ asset('assets/images/users/govinda.jpg') }}" alt="user-img"
                                            class="img-circle"> <span>Govinda Star <small
                                                class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ asset('assets/images/users/hritik.jpg') }}"
                                            alt="user-img" class="img-circle"> <span>John Abraham<small
                                                class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ asset('assets/images/users/john.jpg') }}"
                                            alt="user-img" class="img-circle"> <span>Hritik Roshan<small
                                                class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img
                                            src="{{ asset('assests/images/users/pawandeep.jpg') }}" alt="user-img"
                                            class="img-circle"> <span>Pwandeep rajan <small
                                                class="text-success">online</small></span></a></li>
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

    </body>

    @include('layouts.footer')
@endsection
@section('script')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
    });
</script>
@endsection
