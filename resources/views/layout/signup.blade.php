
<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Daftar</title>
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

  </head>


  <body>

    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

      <!-- Back To Top - Start -->
      <div class="backtotop">
        <a href="#" class="scroll">
          <i class="far fa-arrow-up"></i>
        </a>
      </div>
      <!-- Back To Top - End -->

      {{-- <!-- Site Header - Start
      ================================================== -->
      <header class="site_header site_header_1">
        <div class="container">
          <div class="row align-items-center">
            <div class="col col-lg-3 col-5">
              <div class="site_logo">
                <a class="site_link" href="index.html">
                  <img src="assets/images/logo/site_logo.svg" alt="Collab - Online Learning Platform">
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
                    <li><a class="nav-link" href="contact.html">Contact</a></li>
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
                  <a class="btn border_dark" href="login.html">
                    <span>
                      <small>Login</small>
                      <small>Login</small>
                    </span>
                  </a>
                </li>
                <li>
                  <a class="btn btn_dark" href="signup.html">
                    <span>
                      <small>Sign Up</small>
                      <small>Sign Up</small>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header> --}}
      <!-- Site Header - End
      ================================================== -->

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Register Section - Start
        ================================================== -->
        <section class="register_section section_space_lg">

          <div class="container">
            <div class="row justify-content-center">
              <div class="col col-lg-5">
                <h1 class="register_heading text-center">Buat Akun</h1>
                <p class="register_heading_description text-center">
                  Sudah memiliki akun? <a href="/layout/signin">Login</a>
                </p>
                <form action="/reg_process" method="POST">
                    @csrf
                  <div class="register_form signup_login_form">
                    <div class="form_item">
                        <input type="name"  value="{{ Session::get('name') }}" name="name" placeholder="Nama">
                    </div>
                    <div class="form_item">
                      <input type="email" value="{{ Session::get('email') }}" name="email" placeholder="Email">
                    </div>
                    <div class="form_item">
                      <input type="password" name="password" placeholder="Buat Password">
                    </div>
                    {{-- <div class="form_item">
                      <input type="password" name="confirmpassword" placeholder="Konfirmasi Password">
                    </div> --}}
                    <button type="submit" class="btn btn_dark mb-5">
                      <span>
                        <small>Daftar Sekarang</small>
                        <small>Daftar Sekarang</small>
                      </span>
                    </button>

                    <p class="text-center">Atau login dengan</p>

                    <ul class="social_links unordered_list_center">
                      <li>
                        <a href="https://www.facebook.com/">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://twitter.com/">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.google.com/">
                          <i class="fab fa-google"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <!-- Register Section - End
        ================================================== -->

      </main>
      <!-- Main Body - End
      ================================================== -->

      <!-- Site Footer - Start
      ================================================== -->
      {{-- <footer class="site_footer">
        <div class="footer_widget_area">
          <div class="container">
            <div class="row">
              <div class="col col-lg-3 col-md-6 col-sm-6">
                <div class="footer_widget">
                  <div class="site_logo">
                    <a class="site_link" href="index.html">
                      <img src="assets/images/logo/site_logo_2.svg" alt="Collab - Online Learning Platform">
                    </a>
                  </div>
                  <p>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                  </p>
                  <ul class="social_links unordered_list">
                    <li>
                      <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#!"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                      <a href="#!"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col col-lg-6">
                <div class="row">
                  <div class="col col-md-4 col-sm-4">
                    <div class="footer_widget">
                      <h3 class="footer_widget_title">Links</h3>
                      <ul class="page_list unordered_list_block">
                        <li>
                          <a href="about.html">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">About</span>
                          </a>
                        </li>
                        <li>
                          <a href="course.html">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Courses</span>
                          </a>
                        </li>
                        <li>
                          <a href="mentor.html">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Mentors</span>
                          </a>
                        </li>
                        <li>
                          <a href="pricing.html">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Prices</span>
                          </a>
                        </li>
                        <li>
                          <a href="event.html">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Events</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col col-md-4 col-sm-4">
                    <div class="footer_widget">
                      <h3 class="footer_widget_title">Class</h3>
                      <ul class="page_list unordered_list_block">
                        <li>
                          <a href="#!">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Programming</span>
                          </a>
                        </li>
                        <li>
                          <a href="#!">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Art & Design</span>
                          </a>
                        </li>
                        <li>
                          <a href="#!">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Business</span>
                          </a>
                        </li>
                        <li>
                          <a href="#!">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Engineering</span>
                          </a>
                        </li>
                        <li>
                          <a href="#!">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Photography</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col col-md-4 col-sm-4">
                    <div class="footer_widget">
                      <h3 class="footer_widget_title">Support</h3>
                      <ul class="page_list unordered_list_block">
                        <li>
                          <a href="contact.html">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Help Center</span>
                          </a>
                        </li>
                        <li>
                          <a href="faq.html">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">FAQ</span>
                          </a>
                        </li>
                        <li>
                          <a href="contact.html">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Contacts</span>
                          </a>
                        </li>
                        <li>
                          <a href="#!">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Security</span>
                          </a>
                        </li>
                        <li>
                          <a href="#!">
                            <span class="item_icon"><i class="fas fa-caret-right"></i></span>
                            <span class="item_text">Private Police</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-lg-3 col-md-6 col-sm-6">
                <div class="footer_widget">
                  <h3 class="footer_widget_title">Latest Posts</h3>
                  <ul class="blog_small_group unordered_list_block">
                    <li>
                      <a class="blog_small" href="blog_details.html">
                        <span class="item_image">
                          <img src="assets/images/blog/blog_small_img_1.jpg" alt="Collab – Online Learning Platform">
                        </span>
                        <span class="item_content">
                          <span class="item_author"><i class="fas fa-user-alt"></i> by Corabelle Durrad</span>
                          <strong class="item_title">See How Michaele Built a New Life and Career</strong>
                          <small class="item_post_date">October 12, 2023</small>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a class="blog_small" href="blog_details.html">
                        <span class="item_image">
                          <img src="assets/images/blog/blog_small_img_2.jpg" alt="Collab – Online Learning Platform">
                        </span>
                        <span class="item_content">
                          <span class="item_author"><i class="fas fa-user-alt"></i> by Corabelle Durrad</span>
                          <strong class="item_title">See How Michaele Built a New Life and Career</strong>
                          <small class="item_post_date">October 12, 2023</small>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright_widget">
          <div class="container">
            <p class="copyright_text text-center mb-0">
              <a href="https://themeforest.net/user/merkulove">Merkulove</a> © <b>Collab</b> Template All rights reserved Copyrights 2023
            </p>
          </div>
        </div>
      </footer> --}}
      <!-- Site Footer - End
      ================================================== -->

    </div>
    <!-- Body Wrap - End -->

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


  </body>
</html>
