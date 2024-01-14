<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('import/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('import/assets/img/unimaslogo.png')}}">
  <title>
    UNIMAS | ANPR SYSTEM
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('import/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('import/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('import/assets/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{asset('import/assets/img/unimaslogo.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Welcome</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('/')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="{{route('table.vehicle-record')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Plate Image</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('/biling')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Annual Pass</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('/blacklisted')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Blacklisted</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('/record')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">folder</i>
            </div>
            <span class="nav-link-text ms-1">Record</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('signin')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('signup')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-outline-primary mt-4 w-100" href="https://www.unimas.my/security" type="button">UNIMAS Security</a>
        <a class="btn bg-gradient-primary w-100" href="http://www.netinc.net.my/phone_numbers.html" type="button">Emergency Numbers</a>x
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Plate Image</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Plate Image</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line">a</i>
                  <i class="sidenav-toggler-line">b</i>
                  <i class="sidenav-toggler-line">c</i>
                </div>
              </a>
            </li>
            <li class="nav-item px-4 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-4 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="{{asset('import/assets/img/alert.jpg')}}" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Alert</span> vehicle with plate ABCD123 is identified!
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Payment</span> for QAN1177 success
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          12 seconds ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
          
              </ul>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="{{url('/signin')}}" class="nav-link text-body font-weight-bold px-0">
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Vehicle Records - IN</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4">Number Plate</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Check-in time</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <!-- Starting of PHP  "LATER CHANGE TO DYNAMIC"--> 
                    <tr>
                        <td class="ps-4">1</td>
                        <td class="ps-4">WYK7460</td>
                        <td><img src="{{ asset('storage/input_images/p2.jpg')}}" width="200px"></td>
                        <td>08:15:30</td> <!-- Display only hour, minute, and second -->
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">in</span>
                        </td>
                        <td class="text-end">2023-10-10</td> <!-- Display only hour, minute, and second -->
                    </tr>
                    <tr>
                      <td class="ps-4">2</td>
                      <td class="ps-4">AGM222</td>
                      <td><img src="{{ asset('storage/input_images/p9.jpg')}}" width="200px"></td>
                      <td>08:17:40</td> <!-- Display only hour, minute, and second -->
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">in</span>
                      </td>
                      <td class="text-end">2023-10-10</td> <!-- Display only hour, minute, and second -->
                    </tr>
                    <tr>
                      <td class="ps-4">3</td>
                      <td class="ps-4">BJY6688</td>
                      <td><img src="{{ asset('storage/input_images/p11.jpg')}}" width="200px"></td>
                      <td>08:20:30</td> <!-- Display only hour, minute, and second -->
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">in</span>
                      </td>
                      <td class="text-end">2023-10-10</td> <!-- Display only hour, minute, and second -->
                    </tr>
                    <tr>
                      <td class="ps-4">4</td>
                      <td class="ps-4">QRH9057</td>
                      <td><img src="{{ asset('storage/input_images/p12.jpg')}}" width="200px"></td>
                      <td>08:23:10</td> <!-- Display only hour, minute, and second -->
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">in</span>
                      </td>
                      <td class="text-end">2023-10-10</td> <!-- Display only hour, minute, and second -->
                    </tr>
                    <tr>
                      <td class="ps-4">5</td>
                      <td class="ps-4">JMH9473</td>
                      <td><img src="{{ asset('storage/input_images/p13.jpg')}}" width="200px"></td>
                      <td>08:24:50</td> <!-- Display only hour, minute, and second -->
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">in</span>
                      </td>
                      <td class="text-end">2023-10-10</td> <!-- Display only hour, minute, and second -->
                    </tr>
                    <tr>
                      <td class="ps-4">6</td>
                      <td class="ps-4">KEA126</td>
                      <td><img src="{{ asset('storage/input_images/p11.jpg')}}" width="200px"></td>
                      <td>09:00:00</td> <!-- Display only hour, minute, and second -->
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">in</span>
                      </td>
                      <td class="text-end">2023-10-10</td> <!-- Display only hour, minute, and second -->
                    </tr>
                    <tr>
                      <td class="ps-4">7</td>
                      <td class="ps-4">NCU8918</td>
                      <td><img src="{{ asset('storage/input_images/p38.jpg')}}" width="200px"></td>
                      <td>09:10:23</td> <!-- Display only hour, minute, and second -->
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">in</span>
                      </td>
                      <td class="text-end">2023-10-10</td> <!-- Display only hour, minute, and second -->
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Vehicle Records - OUT</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4">Number Plate</th>
                      <th class="text-uppercase ps-2 text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Check-out time</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <!-- Starting of PHP  "LATER CHANGE TO DYNAMIC"--> 
                    <tr>
                        <td class="ps-4">1</td>
                        <td class="ps-4">WMT313</td>
                        <td><img src="{{asset('import/assets/outputimage/p31.jpg')}}" width="200px"></td>
                        <td>09:40:44</td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">out</span>
                        </td>
                        <td class="text-end ps-2">2023-10-10</td>
                    </tr>
                    <tr>
                      <td class="ps-4">2</td>
                      <td class="ps-4">WV480NG</td>
                      <td><img src="{{asset('import/assets/outputimage/p39.jpg')}}" width="200px"></td>
                      <td>09:43:12</td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">out</span>
                      </td>
                      <td class="text-end ps-2">2023-10-10</td>
                  </tr>
                  <tr>
                    <td class="ps-4">3</td>
                    <td class="ps-4">200M6</td>
                    <td><img src="{{asset('import/assets/outputimage/p41.jpg')}}" width="200px"></td>
                    <td>09:45:01</td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">out</span>
                    </td>
                    <td class="text-end ps-2">2023-10-10</td>
                </tr>
                <tr>
                  <td class="ps-4">4</td>
                  <td class="ps-4">GM268</td>
                  <td><img src="{{asset('import/assets/outputimage/p43.jpg')}}" width="200px"></td>
                  <td>09:50:20</td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">out</span>
                  </td>
                  <td class="text-end ps-2">2023-10-10</td>
                </tr>
                <tr>
                  <td class="ps-4">5</td>
                  <td class="ps-4">WOA2997</td>
                  <td><img src="{{asset('import/assets/outputimage/p50.jpg')}}" width="200px"></td>
                  <td>09:55:11</td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">out</span>
                  </td>
                  <td class="text-end ps-2">2023-10-10</td>
                </tr>

                  <!--just copy-->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
        
          </div>
        </div>
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                UNIMAS | ANPR SYSTEM
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">UNIMAS</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>