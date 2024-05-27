<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

</head>

<body>
    <div class="profile-section">
        <div class="profile-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-md-3 col-sm-3 pt-1">
                        <div class="profile-main-logo">
                            <a href="#"><img src="./img/Mango Entertainment-logo-blue.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                        <div class="profile-sec-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">PC Live</a></li>
                                <li><a href="#">App</a></li>
                                <li><a href="#">Recharge</a></li>
                                <li><a href="#">Mango Ent Store</a></li>
                            </ul>
                        </div>
                                  <!-- --------------- -->
                                  <!-- <div class="mobile-container">


                                    <div class="topnav">

                                      <div id="myLinks">
                                        <a href="#home" >Logo</a>
                                        <a href="#news">News</a>
                                        <a href="#contact">Contact</a>
                                        <a href="#about">About</a>
                                      </div>
                                      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                        <i class="fas fa-bars"></i>
                                      </a>
                                    </div>
                                    </div>

                                   ---------------- -->
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <div class="profile-login-image">
                            <a href="" onclick="toggleDiv()" ><img src="./img/profile-image.png" alt=""></a>
                        </div>
                        <div class="profile-login-logout" id="myDiv" onload="myFunction()">
                            <div class="pop-1">
                                <a href=""><img src="./img/setting-img.png" alt=""></a>
                                <a href=""><img class="make-pro" src="./img/img_20240317_203747 (1).png" alt=""></a>
                            </div>
                            <div class="pop-2">
                                <h5>🦊 LLOUISE DNLO 🦊</h5>
                                <p>id: 01251421 <a href=""><img src="./img/tabler_copy.png" alt=""></a></p>
                            </div>
                            <div class="pop-3">
                                <ul>
                                    <li><i class="fa-solid fa-user"></i><a href="">Profile</a></li>
                                    <li><i class="fa-solid fa-arrow-right-from-bracket"></i><a href="">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-main-content">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12">
                        <div class="row">
                            <div class="image-div">
                                @if($results->avatar)
                                <img src="{{ $results->avatar->geturl() }}" alt="">
                                @else
                                <img src="{{asset('img/user-icon.png')}}" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="profile-details">
                                <div class="detail-1">
                                    <span>
                                        <h5>{{ $results->first_name }}</h5><img src="./img/profile-details-img.png" alt="">
                                    </span>
                                    <div class="custom-div">
                                        <p>id: {{ $results->uid }} <a href=""><img src="./img/tabler_copy.png" alt=""></a></p>

                                        <span class="age-sec">
                                            {{-- <img src="./img/mars.png" class="img-responsive"alt=""> --}}
                                            <i class="fa-solid fa-mars"></i>
                                                {{ $results->xp }}</span>
                                        <span class="level-sec">Lv.{{ $results->level }}</span>

                                    </div>
                                </div>
                                <div class="detail-2">
                                    <button class="subscribe-button">Subscribes<img src="./img/bolt (light).png"
                                            alt=""></button>
                                    <button class="follow-button">Follow</button>
                                </div>
                            </div>
                            <div class="reach">
                                <ul>
                                    <li class="bordr">
                                        <h5>{{ $results->following != null ? count($results->following):0  }}</h5>
                                        <p>Following</p>
                                    </li>
                                    <li class="bordr">
                                        <h5>{{ $results->followers != null ? count($results->followers):0  }}</h5>
                                        <p>Followers</p>
                                    </li>
                                    <li>
                                        <h5>101K</h5>
                                        <p>likes</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-lg-7 col-md-7 col-sm-12">
                        <div class="download-app">
                            <div class="dapct">
                                <h4>Download App</h4>
                                <p>Scan with your phone’s camera or QR code app to view.</p>
                                <button class="google-store-button"><img src="./img/Google Play Mobile app store.png"
                                        alt=""></button>
                                <button class="apple-store-button"><img src="./img/Apple Mobile app store.png"
                                        alt=""></button>
                            </div>
                            <div class="qr-code">
                                <hr>
                                <img src="./img/qr-code.png" alt="">
                            </div>
                        </div>
                        <div class="bio-sec">
                            <h4>Bio</h4>
                            <p>{{ $results->bio }}</p>
                            <h4>Social</h4>
                            <ul>
                                <li><a href=""><img src="./img/icon-fb.png" alt=""></a></li>
                                <li><a href=""><img src="./img/icon-tiktok.png" alt=""></a></li>
                                <li><a href=""><img src="/img/icon-chat.png" alt=""></a></li>
                                <li><a href=""><img src="./img/icon-k.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-content">
            <div class="container">
                <div class="row mt-4 mb-4">
                    <div class="col-xl-12">
                       <h4>Video</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="profile-video">
                           <img src="./img/profile-video-1.png" class="img-responsive" alt="">
                           <div class="pv-relative">
                            <a href="#"><img src="/img/play-button.png" alt="play-button">1.5k</a>
                            <a href="#"><i class="fa-regular fa-heart"></i>105</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="profile-video">
                           <img src="./img/profile-video-2.png" class="img-responsive" alt="">
                           <div class="pv-relative">
                            <a href="#"><img src="/img/play-button.png" alt="play-button">1.5k</a>
                            <a href="#"><i class="fa-regular fa-heart"></i>105</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="profile-video">
                            <img src="./img/profile-video-3.png" class="img-responsive" alt="">
                            <div class="pv-relative">
                            <a href="#"><img src="/img/play-button.png" alt="play-button">1.5k</a>
                            <a href="#"><i class="fa-regular fa-heart"></i>105</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="profile-video">
                           <img src="./img/profile-video-4.png" class="img-responsive" alt="">
                           <div class="pv-relative">
                            <a href="#"><img src="/img/play-button.png" alt="play-button">1.5k</a>
                            <a href="#"><i class="fa-regular fa-heart"></i>105</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="profile-video">
                           <img src="./img/profile-video-5.png" class="img-responsive" alt="">
                           <div class="pv-relative">
                            <a href="#"><img src="/img/play-button.png" alt="play-button">1.5k</a>
                            <a href="#"><i class="fa-regular fa-heart"></i>105</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="profile-video">
                           <img src="./img/profile-video-6.png" class="img-responsive" alt="">
                           <div class="pv-relative">
                            <a href="#"><img src="/img/play-button.png" alt="play-button">1.5k</a>
                            <a href="#"><i class="fa-regular fa-heart"></i>105</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="profile-video">
                            <img src="./img/profile-video-7.png" class="img-responsive" alt="">
                            <div class="pv-relative">
                            <a href="#"><img src="/img/play-button.png" alt="play-button">1.5k</a>
                            <a href="#"><i class="fa-regular fa-heart"></i>105</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="profile-video">
                            <img src="./img/profile-video-1.png" class="img-responsive" alt="">
                            <div class="pv-relative">
                            <a href="#"><img src="/img/play-button.png" alt="play-button">1.5k</a>
                            <a href="#"><i class="fa-regular fa-heart"></i>105</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="profile-video">
                            <img src="./img/profile-video-2.png" class="img-responsive" alt="">
                            <div class="pv-relative">
                            <a href="#"><img src="/img/play-button.png" alt="play-button">1.5k</a>
                            <a href="#"><i class="fa-regular fa-heart"></i>105</a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleDiv() {
            // Get the div element

            var div = document.getElementById('myDiv');
            // Check the current display state
            if (div.style.display === 'none') {
                // If it's hidden, show it
                div.style.display = 'block';
            } else {
                // If it's visible, hide it
                div.style.display = 'none';
            }
            event.preventDefault();
            myDiv.addEventListener('click', myDiv);
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/fontawesome.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>

</html>
