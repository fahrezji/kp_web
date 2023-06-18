
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>STMIK</title>
    <meta name="description" content="Free bootstrap template Atlas">

    {{-- link css header --}}
     <!-- Framework - CSS Include -->
     <link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css') }}">

     <!-- Icon Font - CSS Include -->
     <link rel="stylesheet" href="{{ asset('/asset/css/fontawesome.css') }}">

     <!-- Animation - CSS Include -->
     <link rel="stylesheet" href="{{ asset('/asset/css/animate.css') }}">

     <!-- Cursor - CSS Include -->
     <link rel="stylesheet" href="{{ asset('/asset/css/cursor.css') }}">

     <!-- Carousel - CSS Include -->
     <link rel="stylesheet" href="{{ asset('/asset/css/slick.css') }}">
     <link rel="stylesheet" href="{{ asset('/asset/css/slick-them.css') }}">

     <!-- Video & Image Popup - CSS Include -->
     <link rel="stylesheet" href="{{ asset('/asset/css/magnific-popup.css') }}">

     <!-- Vanilla Calendar - CSS Include -->
     <link rel="stylesheet" href="{{ asset('/asset/css/vanilla-calendar.min.css') }}">

     <!-- Custom - CSS Include -->
     <link rel="stylesheet" href="{{ asset('/asset/css/style.css') }}">

     <!-- Site Header - Start
      ================================================== -->
      <header class="site_header site_header_1">
        <div class="container">
          <div class="row align-items-center">
            <div class="col col-lg-3 col-5">
              <div class="site_logo">
                <a class="site_link" href="index.html">
                  {{-- <img src="assets/images/logo/site_logo.svg" alt="Collab - Online Learning Platform"> --}}
                </a>
              </div>
            </div>
            <div class="col col-lg-6 col-2">
              <nav class="main_menu navbar navbar-expand-lg">
                <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                  <ul class="main_menu_list unordered_list_center">
                    <li class="dropdown">
                      <a class="nav-link" href="#" id="home_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                      <ul class="dropdown-menu" aria-labelledby="home_submenu">
                        <li><a href="index.html">Home V.1</a></li>
                        <li><a href="index_2.html">Home V.2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="nav-link" href="#" id="service_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="service_submenu">
                        <li class="dropdown">
                          <a class="nav-link" href="#" id="courses_layout_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Courses Layout
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="courses_layout_submenu">
                            <li><a href="course.html">Courses Grid</a></li>
                            <li><a href="course_list.html">Courses List</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a class="nav-link" href="#" id="courses_details_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Courses Details
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="courses_details_submenu">
                            <li><a href="course_details.html">Course Details V.1</a></li>
                            <li><a href="course_details_2.html">Course Details V.2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="nav-link" href="#" id="pages_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="pages_submenu">
                        <li><a href="about.html">About</a></li>
                        <li class="dropdown">
                          <a class="nav-link" href="#" id="mentors_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Mentors
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="mentors_submenu">
                            <li><a href="mentor.html">Mentors</a></li>
                            <li><a href="mentor_details.html">Mentors Details</a></li>
                          </ul>
                        </li>
                        <li><a href="faq.html">F.A.Q.</a></li>
                        <li class="dropdown">
                          <a class="nav-link" href="#" id="events_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Events
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="events_submenu">
                            <li><a href="event.html">Events</a></li>
                            <li><a href="event_details.html">Event Details</a></li>
                          </ul>
                        </li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="error.html">404 Error</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="nav-link" href="#" id="blog_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Blog
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="blog_submenu">
                        <li><a href="blog.html">Our Blogs</a></li>
                        <li><a href="blog_details.html">Blog Details</a></li>
                      </ul>
                    </li>
                    {{-- <li><a class="nav-link" href="contact.html">Contact</a></li> --}}
                  </ul>
                </div>
              </nav>
            </div>
            <div class="col col-lg-3 col-5">
              <ul class="header_btns_group unordered_list_end">
                <li>
                  <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-bars"></i>
                  </button>
                </li>
                <li>
                  <a class="btn border_dark" href="/sesi">
                    <span>
                      <small>Login</small>
                      <small>Login</small>
                    </span>
                  </a>
                </li>
                <li>
                  {{-- <a class="btn btn_dark" href="signup.html">
                    <span>
                      <small>Sign Up</small>
                      <small>Sign Up</small>
                    </span>
                  </a> --}}
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- Site Header - End
      ================================================== -->

    {{-- end --}}


    <link rel="icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
	<!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('/assets/font-awesome-4.7.0/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/aos.css') }}">
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url({{ asset ('assets/img/wisuda3.jpg')}}) ; background-size:cover;">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="{{asset ('/assets/img/logo.png')}}" alt="logo">
                    </div>
                    <div class="col-6 align-self-center text-right">
                        {{-- <a href="/sesi" class="text-white lead">Login</a> --}}
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
            	Jalan Baru<br>
            	Untuk Memulai Kuliah
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
                Lorem ipsum dolor sit amet, id nec enim autem oblique, ei dico mentitum duo.
                <br> Illum iusto laoreet his te. Lorem partiendo mel ex. Ad vitae admodum voluptatum per.
            </p>
            {{-- <a href="/sesi/register" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
            class="btn my-4 font-weight-bold atlas-cta cta-green">Register</a> --}}
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">Fasilitas</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset ('/assets/img/lab.png')}}" alt="Anti-spam" class="mx-auto" width="300px">
                <h4 class="mt-4">Lab Komputer</h4>

            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset ('/assets/img/badminton.png')}}" alt="Phishing Detect" class="mx-auto" width="300px">
                <h4 class="mt-4">Gor</h4>

            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset ('/assets/img/mosque2.png')}}" alt="Smart Scan" class="mx-auto" width="320px">
                <h4>Mushola</h4>

            </div>
        </div>
    </div>
    <!-- feature (skew background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold"> Lihat-lihat ke dalam</h2>
                    <p class="my-4">Te iisque labitur eos, nec sale argumentum scribentur no,
                        <br> augue disputando in vim. Erat fugit sit at, ius lorem deserunt deterruisset no.</p>
                    {{-- <a href="/sesi/register" class="btn my-4 font-weight-bold atlas-cta cta-blue">Register</a> --}}
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                    <img src="{{asset ('/assets/img/halaman.jpg')}}" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- feature (green background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold">Aman dan Terpercaya</h2>
                    <p class="my-4">
                        Duo suas detracto maiestatis ad, commodo lucilius invenire nec ad,
                        <br> eum et oratio disputationi. Falli lobortis his ad
                    </p>
                    {{-- <a href="/sesi/register" class="btn my-4 font-weight-bold atlas-cta cta-blue">Register</a> --}}
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center flex-md-first">
                    <img src="{{asset ('/assets/img/wisuda.jpg')}}" alt="Safe and reliable" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- price table -->
    <div class="container my-5 py-2" id="price-table">
        <h2 class="text-center font-weight-bold d-block mb-3">Komentar Tamu</h2>

        <div class="row">
            @foreach ($data as $index => $item)
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5">
                <h4 class="my-4"> {{ $item->nama  }} </h4>
                <img src="{{asset ('/assets/img/wanda.jpeg')}}" class="rounded-circle">
                <ul class="list-unstyled">

                   <p class="mt-3"> {{ $item->komentar}}</p>

                </ul>
                {{-- <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Free</a> --}}
            </div>
            @endforeach

        </div>

    </div>

    {{-- isi komentar --}}






    <!-- client -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-1.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-2.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-3.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-4.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-5.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-6.png')}}" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url({{ asset ('assets/img/contact-bk.jpg')}});">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Kontak Kita</h2>
                    {{-- <p class="my-4">
                        Te iisque labitur eos, nec sale argumentum scribentur,
                        <br> augue disputando in vim. Erat fugit sit at, ius lorem.
                    </p> --}}
                    <ul class="list-unstyled">
                        <li>Email : info@stmik-mi.ac.id</li>
                        <li>Phone : +62 (022) 523 0382 </li>
                        <li>Address :Jl. Soekarno-Hatta No. 211 Leuwipanjang Bandung - Jawa Barat</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form action="/komen" method="POST">
                        @csrf
                        <h2 class="font-weight-bold">Isi Komentar</h2>
                    	<div class="row">

	                        <div class="form-group col-md-6">

	                            <label for="name">Nama</label>
	                            <input type="name" class="form-control" name="nama">
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="Email">Email</label>
	                            <input type="email" class="form-control" name="email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Komentar</label>
	                        <textarea class="form-control" name="komentar" rows="3"></textarea>
	                    </div>
                        <button type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © 2018 Chen, Yi-Ya.
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-medium" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- AOS -->
    <script src="{{asset ('/assets/js/aos.js')}}"></script>
    <script>
      AOS.init({
      });
    </script>
    {{-- panggil css --}}
    {{-- <script src="{{asset ('/assets/css/aos.css')}}"></script>
    <script src="{{asset ('/assets/css/app.css')}}"></script>
    <script src="{{asset ('/assets/css/bootstrap.min.css')}}"></script>
    <script src="{{asset ('/assets/css/custom.css')}}"></script>
    <script src="{{asset ('/assets/css/main.css')}}"></script> --}}

    {{-- panggil js --}}
    <!-- Framework - Jquery Include -->
    <script src="{{asset ('/asset/js/jquery.js')}}"></script>
    <script src="{{asset ('/asset/js/popper.min.js')}}"></script>
    <script src="{{asset ('/asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('/asset/js/bootstrap-dropdown-ml-hack.js')}}"></script>


    <!-- animation - jquery include -->
    <script src="{{asset ('/asset/js/cursor.js')}}"></script>
    <script src="{{asset ('/asset/js/wow.min.js')}}"></script>
    <script src="{{asset ('/asset/js/tilt.min.js')}}"></script>
    <script src="{{asset ('/asset/js/parallax.min.js')}}"></script>
    <script src="{{asset ('/asset/js/parallax-scroll.js')}}"></script>


    <!-- Carousel - Jquery Include -->
    <script src="{{asset ('/asset/js/slick.min.js')}}"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="{{asset ('/asset/js/magnific-popup.min.js')}}"></script>

    <!-- Counter Up - Jquery Include -->
    <script src="{{asset ('/asset/js/waypoint.js')}}"></script>
    <script src="{{asset ('/asset/js/counterup.min.js')}}"></script>

    <!-- Countdown Timer - jquery include -->
    <script src="{{asset ('/asset/js/countdown.js')}}"></script>

    <!-- Vanilla Calendar - Jquery Include -->
    <script src="{{asset ('/asset/js/vanilla-calendar.min.js')}}"></script>

    <!-- Custom - Jquery Include -->
    <script src="{{asset ('/asset/js/main.js')}}"></script>

    {{-- <script src="{{asset ('/assets/js/aos.js')}}"></script>
    <script src="{{asset ('/assets/js/app.js')}}"></script>
    <script src="{{asset ('/assets/js/bootstrap.js')}}"></script>
    <script src="{{asset ('/assets/js/main.js')}}"></script> --}}

</body>

</html>
