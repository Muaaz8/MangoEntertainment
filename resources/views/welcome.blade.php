<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mango Entertainment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css"  />
    <link rel="stylesheet" href="{{ asset('css/hero-section-style.css') }}">
</head>

<body>
    <div class="hero-section">
        <div class="download-stream">
            <p>Download the app for better experience, enjoy live streaming<a href="#"><img
                        src="./img/right-arrow-Icons.png" alt="right-arrow-Icons"></a></p>
        </div>
        <div class="hero-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="main-logo">
                            <a href="#"><img src="./img/Mango Entertainment-logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xl-6 col-md-6">
                        <div class="hero-sec-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Gaming</a></li>
                                <li><a href="#">App</a></li>
                                <li><a href="#">Recharge</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @if(Session::has('user'))
                                    <div class="login-button">
                                        {{-- <button onclick="window.location.href='{{ url('/joinStream') }}'">Join Stream</button>
                                        <button onclick="window.location.href='{{ url('/stream') }}'">Start Stream</button> --}}
                                        <button onclick="window.location.href='{{ url('/') }}'"> Dashboard </button>
                                        {{-- <button>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                Sign Out
                                            </form>
                                        </button> --}}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <button id="logout-button">Sign Out</button>
                                    </div>
                                @else
                                    <div class="login-button">
                                        <button onclick="window.location.href='{{ route('signin') }}'">
                                            Log in
                                        </button>

                                    @if (Route::has('register'))
                                        <button onclick="window.location.href='{{ route('signup') }}'">
                                            Register
                                        </button>
                                    @endif
                                    </div>
                                @endauth
                            </nav>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <section class="sec-1">
           <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                        <h2>Lets reach the <br>
                            Unreachables</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4 mt-5">
                    <button class="watch-live-button" onclick="window.location.href='/stream-list'">Watch live</button>
                </div>
            </div>
           </div>
        </section>
        <section class="box_videos_sec">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="box-area-main">
                  <div class="swiper video_box_swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide swiper-margin-1">
                        <div class="video_box">
                          <video muted autoplay>
                            <source src="{{asset('videos/video-1.webm')}}" type='video/webm; codecs="vp8, vorbis"' />
                          </video>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-margin-2">
                        <div class="video_box">
                          <video muted autoplay>
                            <source src="{{asset('videos/video-2.webm')}}" type='video/webm; codecs="vp8, vorbis"' />
                          </video>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-margin-3">
                        <div class="video_box">
                          <video muted autoplay>
                            <source src="{{asset('videos/video-3.webm')}}" type='video/webm; codecs="vp8, vorbis"' />
                          </video>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-margin-4">
                        <div class="video_box">
                          <video muted autoplay>
                            <source src="{{asset('videos/video-4.webm')}}" type='video/webm; codecs="vp8, vorbis"' />
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper1 = new Swiper(".video_box_swiper", {
        // slidesPerView: 4.2,
        spaceBetween: 30,
        // centeredSlides: true,
        // grabCursor: true,
        loop: true,
        speed: 500,
        // autoplay: {
        //   delay: 5000,
        //   disableOnInteraction: false,
        // },
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            320: {
            slidesPerView: 1,
            spaceBetween: 30,
            },
            768: {
            slidesPerView: 2.5,
            spaceBetween: 30,
            },
            1200: {
            slidesPerView: 3.5,
            spaceBetween: 30,
            },
        },
        scrollbar: {
            el: ".discount-scrollbar",
            // draggable: true,
        },
        navigation: {
            nextEl: ".discount-next",
            prevEl: ".discount-prev",
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        });
        document.getElementById('logout-button').addEventListener('click', function() {
            document.getElementById('logout-form').submit();
        });
    </script>
</body>

</html>
