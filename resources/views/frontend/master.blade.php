<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Maxims</title>

    {{-- CSS Files --}}
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                    
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="{{ url('/#top') }}" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="{{ url('/#about') }}">About</a></li>
                          <li class="scroll-to-section"><a href="{{ url('/#testimonials') }}">Testimonials</a></li>
                          <li><a href="{{ route('contact') }}">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                  </nav>
              </div>
          </div>
      </div>
  </header>

  @hasSection('content')
    @yield('content')
  @else
    <!-- ***** Banner ***** -->
    <div class="swiper-container" id="top">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide-inner" style="background-image:url(assets/images/slider1.jpg)">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="header-text">
                      <h2><em>Maxims Banquet & Events</em>, a perfect place to celebrate life's most special occasions.</h2>
                    <div class="div-dec"></div>
                    <p>Big or small, grand or intimate @maxims_banquet  is where every celebration finds its perfect stage. Now celebrate with us as we believe in creating perfection from elegant weddings to vibrant cultural celebrations. 🙏</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide-inner" style="background-image:url(assets/images/slider2.jpg)">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="header-text">
                    <h2><em>Elevate </em> Your Event Experience</h2>
                    <div class="div-dec"></div>
                    <p>Your dream program deserves the perfect venue !</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide-inner" style="background-image:url(assets/images/slider3.jpg)">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="header-text">
                      <h2> Welcome to <em>Maxims Banquet & Events</em> </h2>
                    <div class="div-dec"></div>
                    <p>Best one in the valley. Perfect Service. Feel our services. Thank you !!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
    </div>

    <!-- ***** About Us ***** -->
    <section class="about-us" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
              <h6>About Maxims</h6>
              <h4>Celebrate Life's Most Special Moments</h4>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="left-content">
              <p>Maxims Banquet & Events is the perfect setting for unforgettable celebrations — from elegant weddings and engagements to birthdays, receptions, and corporate galas. Our experienced team crafts every detail with care so you can enjoy a seamless, beautiful event.</p>
              <div class="row" style="margin-top: 25px;">
                <div class="col-sm-6" style="margin-bottom: 15px;">
                  <div class="d-flex align-items-start">
                    <i class="fa fa-users" style="font-size:20px;margin-right:10px;color:#4CAF50"></i>
                    <div>
                      <h6 style="margin:0 0 5px 0;">Spacious Capacity</h6>
                      <p style="margin:0;">Flexible layouts for intimate gatherings to grand celebrations.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6" style="margin-bottom: 15px;">
                  <div class="d-flex align-items-start">
                    <i class="fa fa-spoon" style="font-size:20px;margin-right:10px;color:#FF6600"></i>
                    <div>
                      <h6 style="margin:0 0 5px 0;">Premium Catering</h6>
                      <p style="margin:0;">Curated menus and authentic flavors for every occasion.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6" style="margin-bottom: 15px;">
                  <div class="d-flex align-items-start">
                    <i class="fa fa-gem" style="font-size:20px;margin-right:10px;color:#4CAF50"></i>
                    <div>
                      <h6 style="margin:0 0 5px 0;">Décor & Lighting</h6>
                      <p style="margin:0;">Customizable themes, floral designs, and ambient lighting.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6" style="margin-bottom: 15px;">
                  <div class="d-flex align-items-start">
                    <i class="fa fa-music" style="font-size:20px;margin-right:10px;color:#FF6600"></i>
                    <div>
                      <h6 style="margin:0 0 5px 0;">Audio-Visual Setup</h6>
                      <p style="margin:0;">Professional sound, projection, and dance-floor lighting.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="right-content">
              <img src="assets/images/banquet.jpg" alt="Wedding setup at Maxims Banquet" style="width:100%;border-radius:8px;">
              <h4 style="margin-top:20px;">Weddings, Receptions & More</h4>
              <p>Share your vision with us and we’ll bring it to life with thoughtful planning, warm hospitality, and picture‑perfect moments.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('frontend.testimonial')
  @endif

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2025 Maxims Banquet & Events, Ltd. All Rights Reserved.
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        var interleaveOffset = 0.5;

      var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        on: {
          progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              var slideProgress = swiper.slides[i].progress;
              var innerOffset = swiper.width * interleaveOffset;
              var innerTranslate = slideProgress * innerOffset;
              swiper.slides[i].querySelector(".slide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }      
          },
          touchStart: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = "";
            }
          },
          setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = speed + "ms";
              swiper.slides[i].querySelector(".slide-inner").style.transition =
                speed + "ms";
            }
          }
        }
      };

      var swiper = new Swiper(".swiper-container", swiperOptions);
    </script>
  </body>
</html>