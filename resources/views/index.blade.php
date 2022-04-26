<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="AKO" />
  <meta name="keywords" content="AKO" />

  <title>TAWTHEEF - Jobs for everyone</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="{{asset('landingpage/img/fav-icon.png')}}" type="image/x-icon" />
  <!-- Bootstrap 4.5 -->
  <link rel="stylesheet" href="{{asset('landingpage/css/bootstrap.min.css')}}" type="text/css" />
  <!-- animate -->
  <link rel="stylesheet" href="{{asset('landingpage/css/animate.css')}}" type="text/css" />
  <!-- Swiper -->
  <link rel="stylesheet" href="{{asset('landingpage/css/swiper.min.css')}}" />
  <!-- icons -->
  <link rel="stylesheet" href="{{asset('landingpage/css/icons.css')}}" type="text/css" />
  <!-- aos -->
  <link rel="stylesheet" href="{{asset('landingpage/css/aos.css')}}" type="text/css" />
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('landingpage/css/main.css')}}" type="text/css" />
  <!-- normalize -->
  <style>
    @media (max-width:1024px) {
      .mockup_ap {
        display: none;
      }
    }
  </style>



</head>

<body class="app_fitness oh-x">
  <div id="wrapper">
    <div id="content">
      <!-- Start header -->
      <header class="header-nav-center no_blur active-orange2" id="myNavbar">
        <div class="container">
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
            <a class="navbar-brand" href="#">
              <img class="logo" src="{{asset('landingpage/img/pogi.png')}}" alt="logo" />
            </a>

            <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <svg viewBox="0 0 64 48">
                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
              </svg>
            </button>

           

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('createstore')}}">Company Registration</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">Famous Registration</a>
                </li>
                <!-- <li class="nav-item">
                  <select>
<option value="1">العربية </option>
<option value="2">English </option>
                  </select>
                </li> -->

              </ul>
              <div class="nav_account">
                <a href="#" class="opacity-1 c-orange2 border-0 rounded-pill mt-10">
                  <!-- <img class="logo" src="assets/img/"  height="100px" alt="logo" /> -->
                </a>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
        <!-- end container -->
      </header>
      <!-- End header -->

      <!-- Stat main -->
      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">

        <!-- Start Banner -->
        <section class="pt_banner_inner no-before banner_app_two banner_app_three" id="myNavbar">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-6">
                <div class="banner_title">
                  <h1 class="margin-b-2">
                    <span class="c-orange2">AKO</span> for everyone.
                  </h1>
                  <p class="c-dark">Connect and be discovered Content Creators 
                  </p>
                </div>
                <div class="button_app padding-t-3">
                  <a href="#" class="btn btn_with_ico rounded-pill">
                    <span>START YOUR REGISTRATION</span>

                  </a>
                  <div class="c-gray mt-4">
                    <span class="pr-1">Try the AKO app ❤️‍🔥 </span>
                    <ul class="app-icons">
                      <li><a href="https://play.google.com/store/apps/details?id=com.akotime.ako"> <img
                            src="{{asset('landingpage/img/play.png')}}" width="150" /></a></li>
                      <li> <a href="https://apps.apple.com/in/app/ako-time/id1496699491?platform=iphone"> <img
                            src="{{asset('landingpage/img/apple.png')}}" width="150" /></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="mockup_ap">
              <img class="img_top floating-simple" src="{{asset('landingpage/img/app/float-1.png')}}" alt="">
              <img class="img_bottom floating-simple2" src="{{asset('landingpage/img/app/float-3.png')}}" alt="">
            </div>
          </div>
        </section>
        <!-- End. Banner -->



      </main>
      <!-- end main -->


    </div>






    <!-- Start Section Loader -->
    <section class="loading_overlay">
      <div class="loader_logo">
        <img class="logo" src="{{asset('landingpage/img/pogi.png')}}" width="220px" />
      </div>
    </section>
    <!-- End. Loader -->
  </div>
  <!-- End. wrapper -->

  <!-- jquery -->
  <script src="{{asset('landingpage/js/jquery-3.5.0.js')}}" type="text/javascript"></script>
  <!-- jquery-migrate -->
  <script src="{{asset('landingpage/js/jquery-migrate.min.js')}}" type="text/javascript"></script>
  <!-- popper -->
  <script src="{{asset('landingpage/js/popper.min.js')}}" type="text/javascript"></script>
  <!-- bootstrap -->
  <script src="{{asset('landingpage/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!--
  ============
  vendor file
  ============
   -->
  <!-- sticky -->
  <script src="{{asset('landingpage/js/vendor/sticky.min.js')}}" type="text/javascript"></script>
  <!-- Aos -->
  <script src="{{asset('landingpage/js/vendor/aos.js')}}" type="text/javascript"></script>
  <!-- main file -->
  <script src="{{asset('landingpage/js/main.js')}}" type="text/javascript"></script>

</body>

</html>