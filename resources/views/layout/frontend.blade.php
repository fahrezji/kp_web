
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tabel Data Informatika</title>
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


     <!-- Vendor CSS Files -->
  <link href="{{ asset ('aset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('aset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('aset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('aset/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset ('aset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('aset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('aset/css/main.css') }}" rel="stylesheet">

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

              {{-- <nav class="main_menu navbar navbar-expand-lg">
                <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                  <ul class="main_menu_list unordered_list_center">
                    <li class="dropdown">
                      <a class="nav-link" href="/layout/frontend" id="home_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                      <ul class="dropdown-menu" aria-labelledby="home_submenu">
                        <li><a href="#banner">Home</a></li>
                        <li><a href="#fasilitas">Fasilitas</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="nav-link" href="#feature-first" id="service_submenu">
                        Jurusan
                      </a> --}}
                      {{-- <ul class="dropdown-menu" aria-labelledby="service_submenu"> --}}
                        {{-- <li class="dropdown">
                          <a class="nav-link" href="#" id="courses_layout_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jurusan
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
                    </li> --}}
                    {{-- <li class="dropdown">
                      <a class="nav-link" href="#feature-last" id="pages_submenu">
                        Pendaftaran
                      </a> --}}
                      {{-- <ul class="dropdown-menu" aria-labelledby="pages_submenu">
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
                    </li> --}}
                    {{-- <li class="dropdown">
                      <a class="nav-link" href="#testimonials" id="blog_submenu">
                        Komentar
                      </a> --}}
                      {{-- <ul class="dropdown-menu" aria-labelledby="blog_submenu">
                        <li><a href="blog.html">Our Blogs</a></li>
                        <li><a href="blog_details.html">Blog Details</a></li>
                      </ul> --}}
                    {{-- </li> --}}



                    {{-- <li><a class="nav-link" href="contact.html">Contact</a></li> --}}
                  {{-- </ul>
                </div> --}}

                <nav id="navbar" class="navbar">
                    <ul>
                      <li><a href="#banner" class="active">Home</a></li>
                      <li><a href="#fasilitas">Fasilitas</a></li>
                      <li><a href="#feature-first">Jurusan</a></li>
                      <li><a href="#feature-last">Pendaftaran</a></li>
                      <li><a href="#testimonials">Komentar</a></li>
                      {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                          <li><a href="#">Dropdown 1</a></li>
                          <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                              <li><a href="#">Deep Dropdown 1</a></li>
                              <li><a href="#">Deep Dropdown 2</a></li>
                              <li><a href="#">Deep Dropdown 3</a></li>
                              <li><a href="#">Deep Dropdown 4</a></li>
                              <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Dropdown 2</a></li>
                          <li><a href="#">Dropdown 3</a></li>
                          <li><a href="#">Dropdown 4</a></li>
                        </ul>
                      </li>
                      <li><a href="contact.html">Contact</a></li> --}}
                    </ul>
                  </nav><!-- .navbar -->


              </nav>
            </div>
            <div class="col col-lg-3 col-5">
              <ul class="header_btns_group unordered_list_end">
                <li>
                  <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-bars"></i>
                  </button>
                </li>
                @if (Auth::user())
                <li>
                    <a class="btn border_dark" href="/sesi/logout">
                      <span>
                        <small>Logout</small>
                        <small>Logout</small>
                      </span>
                    </a>
                  </li>
                @else
                <li>
                    <a class="btn border_dark" href="/sesi">
                      <span>
                        <small>Login</small>
                        <small>Login</small>
                      </span>
                    </a>
                  </li>
                @endif


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
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url({{ asset ('assets/img/tdi3.jpg')}}) ; background-size:cover;">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                    <!-- <img src="{{ asset('/assets/img/logo_tdi.png') }}" alt="logo" style="width: 100px; height: auto;"> -->
                    </div>
                    <div class="col-6 align-self-center text-right">
                        {{-- <a href="/sesi" class="text-white lead">Login</a> --}}
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
            	TABEL DATA<br>
            	INFORMATIKA
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead my-4 text-shadow">
                Mau magang tapi masih bingung memilih perusahaan untuk magang karena belum terlalu bisa ngoding? <br>
                Bingung mencari tempat magang jurusan informatika yang berlokasi di Bandung? <br>
                Jangan khawatir karena ada Tabel Data Informatika
            </p>
            {{-- <a href="/sesi/register" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
            class="btn my-4 font-weight-bold atlas-cta cta-green">Register</a> --}}
        </div>
    </div>
    
    <!-- three-blcok -->
    <div class="container my-5 py-2" id="fasilitas">
        <h2 class="text-center font-weight-bold my-5">Lowongan Internship</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset ('/assets/img/fullstak.jpg')}}" alt="Anti-spam" class="mx-auto" width="1000px">
                <h4 class="mt-4"> Fullstack Developer </h4>

            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset ('/assets/img/admin.jpg')}}" alt="Phishing Detect" class="mx-auto" width="1000px">
                <h4 class="mt-4"> Admin Kantor </h4>

            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset ('/assets/img/platform.jpg')}}" alt="Smart Scan" class="mx-auto" width="1000px">
                <h4 class="mt-4"> Platrofm Engineer </h4>
            </div>
        </div>
    </div>
    <!-- feature (skew background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold"> Jurusan </h2>
                    <p class="my-4 mb-3"> <h4>Kampus STMIK Mardira Indonesia membuka kelas reguler pagi dan reguler sore untuk karyawan. <br>
                    Dengan pilihan jurusan yaitu : <br> <br>
                    Teknik Informatika S1 <br>
                    Teknik Informatika D3 <br>
                    Komputerisasi Akuntansi D3 <br>
                    Manajemen Informatika D3 </h4>
                    </p>
                    {{-- <a href="/sesi/register" class="btn my-4 font-weight-bold atlas-cta cta-blue">Register</a> --}}
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                    <img src="{{asset ('/assets/img/jur.jpg')}}" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- feature (green background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold">Seputar Penerimaan Mahasiswa Baru</h2>
                    <p class="my-4">
                       <h4> Barisan sakit hati ditolak kampus negeri <br> <br>
                        Jangan kecil hati, ada STMIK Mardira Indonesia yang siap menemani menggapai mimpi. <br> <br>
                        Jangan bersedih buat temen-temen disini yang tidak keterima di kampus negeri, karena kesuksesan kita yang menciptakan sendiri. <br>
                        Bersama STMIK Mardira Indonesia, yuk raih suksesmu! <br> <br>
                        Segera daftarkan dirimu untuk masuk tanpa tes ke STMIK MI! <br>


                    </h4>
                    </p>
                    {{-- <a href="/sesi/register" class="btn my-4 font-weight-bold atlas-cta cta-blue">Register</a> --}}
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center flex-md-first">
                    <img src="{{asset ('/assets/img/daftar.jpg')}}" alt="Safe and reliable" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- price table -->
    {{-- <div class="container my-5 py-2" id="price-table">
        <h2 class="text-center font-weight-bold d-block mb-3">Komentar Tamu</h2>

        <div class="row">
            @foreach ($data as $index => $item)
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5">
                <img src="{{asset ('/assets/img/wanda.jpeg')}}" class="rounded-circle">
                <h4 class="my-4"> {{ $item->nama  }} </h4>

                <ul class="list-unstyled">

                   <p class="mt-3"> {{ $item->komentar}}</p>
                   <p class="mt-3"> {{ date('d-m-Y', strtotime($item->created_at))}}</p>

                </ul>
                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Free</a>
            </div>
            @endforeach

        </div>

    </div> --}}

    {{-- isi komentar --}}
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Komentar Tamu</h2>
          {{-- <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia
            reprehenderit sunt deleniti</p> --}}
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

                @foreach ( $data as $index=> $item)


            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3> {{ $item->nama }}</h3>
                  <h4>{{ date('d-m-Y', strtotime($item->created_at))}}</h4>

                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    {{$item->komentar}}

                    <i class="bi bi-quote quote-icon-right"></i>
                    <h4> {{ $item->created_at->locale('id')->diffForHumans() }} </h4>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            @endforeach

            {{-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                    quid.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item --> --}}

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->





    <!-- client -->
    {{-- <div class="jumbotron jumbotron-fluid">
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
    </div> --}}
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
                @if (Auth::user())


                <div class="col-md-6">
                    <form action="/komen" method="POST">
                        @csrf
                        @foreach ( $user as $item )
                        <h2 class="font-weight-bold">Isi Komentar</h2>
                    	<div class="row">

	                        <div class="form-group col-md-6">

	                            <label for="name">Nama</label>
	                            <input type="name" value="{{ $item->name }}" class="form-control" name="nama">
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="Email">Email</label>
	                            <input type="email" value="{{ $item->email }}" class="form-control" name="email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Komentar</label>
	                        <textarea class="form-control" name="komentar" rows="3"></textarea>
	                    </div>
                        <button type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                        @endforeach

                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>

	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">

                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="https://www.facebook.com/stmik.mi" target="blank" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/stmikmardira/" target="blank" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/stmikmardira" target="blank" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="https://stmik-mi.ac.id/" target="blank" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-globe" aria-hidden="true"></i>
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

    <!-- Vendor JS Files -->
  <script src="{{ asset('aset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('aset/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('aset/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('aset/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('aset/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('aset/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('aset/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('aset/js/main.js') }}"></script>

    {{-- <script src="{{asset ('/assets/js/aos.js')}}"></script>
    <script src="{{asset ('/assets/js/app.js')}}"></script>
    <script src="{{asset ('/assets/js/bootstrap.js')}}"></script>
    <script src="{{asset ('/assets/js/main.js')}}"></script> --}}

</body>

</html>
