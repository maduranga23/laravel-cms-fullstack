@extends('layouts.auth')

@section('content')

 <!-- partial -->
 <div class="container-fluid page-body-wrapper">
    <div class="row row-offcanvas row-offcanvas-right">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <span class="menu-title">Dashboard</span>
              <span class="menu-sub-title">( 2 new updates )</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <span class="menu-title">Icons</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-title">Form Elements</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-title">Chart</span>
              <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/bootstrap-table.html">
              <span class="menu-title">Table</span>
              <i class="mdi mdi-table-large menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-title">Sample Pages</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-lock menu-icon"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
        </ul>
        <div class="sidebar-progress">
          <p>Total Sales</p>
          <div class="progress progress-sm">
            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p>50 Items sold</p>
        </div>
        <div class="sidebar-progress">
          <p>Customer Target</p>
          <div class="progress progress-sm">
            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p>200 Items sold</p>
        </div>
        <div class="wrapper upgrade-button">
          <a href="https://www.bootstrapdash.com/product/purple-bootstrap-4-admin-template/" target="_blank" class="btn btn-lg btn-block purchase-button">Upgrade To Pro</a>
        </div>
      </nav>
      <!-- partial -->
      <div class="content-wrapper">
        <div class="row purchace-popup">
          <div class="col-12">
            <span class="d-flex alifn-items-center">
              <p>Like what you see? Check out our premium version for more.</p>
              <a href="https://github.com/BootstrapDash/PurpleAdmin-Free-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-4-admin-template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
              <i class="mdi mdi-close popup-dismiss"></i>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-warning text-white">
              <div class="card-body">
                <h4 class="font-weight-normal mb-3">Weekly Sales</h4>
                <h2 class="font-weight-normal mb-5">$ 15,00000.00</h2>
                <p class="card-text">Incresed by 60%</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info text-white">
              <div class="card-body">
                <h4 class="font-weight-normal mb-3">Weekly Orders</h4>
                <h2 class="font-weight-normal mb-5">45633456</h2>
                <p class="card-text">Decreased by 10%</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success text-white">
              <div class="card-body">
                <h4 class="font-weight-normal mb-3">Visitors Online</h4>
                <h2 class="font-weight-normal mb-5">955741235</h2>
                <p class="card-text">Increased by 5%</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Sale Overview</h4>
                <canvas id="sales-chart"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
              <div class="card-body d-flex flex-column">
                <h4 class="card-title">Satisfaction Graph</h4>
                <div class="mt-auto">
                  <canvas id="satisfaction-chart" height="200"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Recent Updates</h4>
                <div class="d-flex">
                  <div class="d-flex align-items-center mr-4 text-muted">
                    <i class="mdi mdi-account icon-sm mr-2"></i>
                    <span>jack Menqu</span>
                  </div>
                  <div class="d-flex align-items-center text-muted">
                    <i class="mdi mdi-calendar-blank icon-sm mr-2"></i>
                    <span>October 3rd, 2018</span>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-6 pr-1">
                    <img src="{{ 'assets/auth/images/dashboard/img_1.jpg' }}" class="mb-2 mw-100 w-100 rounded" alt="image">
                    <img src="{{ 'assets/auth/images/dashboard/img_4.jpg' }}" class="mw-100 w-100 rounded" alt="image">
                  </div>
                  <div class="col-6 pl-1">
                    <img src="{{ 'assets/auth/images/dashboard/img_2.jpg' }}" class="mb-2 mw-100 w-100 rounded" alt="image">
                    <img src="{{ 'assets/auth/images/dashboard/img_3.jpg' }}" class="mw-100 w-100 rounded" alt="image">
                  </div>
                </div>
                <div class="d-flex mt-5 align-items-top">
                  <img src="{{ 'assets/auth/images/faces/face3.jpg' }}" class="img-sm rounded-circle mr-3" alt="image">
                  <div class="mb-0 flex-grow">
                    <p class="font-weight-bold mr-2 mb-0">Jack Manque</p>
                    <p>This is amazing! We have moved to a brand new office in
                      New Hampshire with a lot more space.
                      We will miss our old office but we are very excited about our new space.</p>
                  </div>
                  <div class="ml-auto">
                    <i class="mdi mdi-heart-outline text-muted"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Recent Tickets</h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          Ticket No.
                        </th>
                        <th>
                          Subject
                        </th>
                        <th>
                          Assignee
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Last Update
                        </th>
                        <th>
                          Tracking ID
                        </th>
                        <th>
                          Priority
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          5669
                        </td>
                        <td>
                          Fund is not recieved
                        </td>
                        <td class="py-1">
                          <img src="{{ 'assets/auth/images/faces/face1.jpg' }}" class="mr-2" alt="image">
                          David Grey
                        </td>
                        <td>
                          <label class="badge badge-gradient-success">DONE</label>
                        </td>
                        <td>
                          Dec 5, 2017
                        </td>
                        <td>
                          WD-12345
                        </td>
                        <td>
                          <i class="mdi mdi-arrow-up text-danger icon-sm mr-1"></i>High
                        </td>
                      </tr>
                      <tr>
                        <td>
                          5670
                        </td>
                        <td>
                          High loading time
                        </td>
                        <td class="py-1">
                          <img src="{{ 'assets/auth/images/faces/face2.jpg' }}" class="mr-2" alt="image">
                          Stella Johnson
                        </td>
                        <td>
                          <label class="badge badge-gradient-warning">PROGRESS</label>
                        </td>
                        <td>
                          Dec 12, 2017
                        </td>
                        <td>
                          WD-12346
                        </td>
                        <td>
                          <i class="mdi mdi-arrow-up text-danger icon-sm mr-1"></i>High
                        </td>
                      </tr>
                      <tr>
                        <td>
                          5671
                        </td>
                        <td>
                          Website down for one week
                        </td>
                        <td class="py-1">
                          <img src="{{ 'assets/auth/images/faces/face3.jpg' }}" class="mr-2" alt="image">
                          Marina Michel
                        </td>
                        <td>
                          <label class="badge badge-gradient-secondary">ON HOLD</label>
                        </td>
                        <td>
                          Dec 16, 2017
                        </td>
                        <td>
                          WD-12347
                        </td>
                        <td>
                          <i class="mdi mdi-arrow-up text-success icon-sm mr-1"></i>Low
                        </td>
                      </tr>
                      <tr>
                        <td>
                          5672
                        </td>
                        <td>
                          Loosing control on server
                        </td>
                        <td class="py-1">
                          <img src="{{ 'assets/auth/images/faces/face4.jpg' }}" class="mr-2" alt="image">
                          John Doe
                        </td>
                        <td>
                          <label class="badge badge-gradient-success">DONE</label>
                        </td>
                        <td>
                          Dec 3, 2017
                        </td>
                        <td>
                          WD-12348
                        </td>
                        <td>
                          <i class="mdi mdi-arrow-up text-warning icon-sm mr-1"></i>Medium
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Shipping Status</h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Overall Progress
                        </th>
                        <th>
                          ID
                        </th>
                        <th>
                          Start Date
                        </th>
                        <th>
                          Due Date
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          Herman Beck
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          ST-3
                        </td>
                        <td>
                          May 10, 2015
                        </td>
                        <td>
                          May 15, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          2
                        </td>
                        <td>
                          Messsy Adam
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          ST-4
                        </td>
                        <td>
                          May 01, 2015
                        </td>
                        <td>
                          Jul 01, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          3
                        </td>
                        <td>
                          John Richards
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          ST-5
                        </td>
                        <td>
                          Mar 10, 2015
                        </td>
                        <td>
                          Apr 12, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          4
                        </td>
                        <td>
                          Peter Meggik
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          ST-6
                        </td>
                        <td>
                          May 10, 2015
                        </td>
                        <td>
                          May 15, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          5
                        </td>
                        <td>
                          Edward
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          ST-7
                        </td>
                        <td>
                          Jan 23, 2015
                        </td>
                        <td>
                          May 03, 2015
                        </td>
                      </tr>
                      <tr>
                        <td>
                          5
                        </td>
                        <td>
                          Ronald
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          ST-8
                        </td>
                        <td>
                          Jun 01, 2015
                        </td>
                        <td>
                          Jun 05, 2015
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
@endsection
