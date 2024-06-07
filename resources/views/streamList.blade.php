<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/stylelist.css') }}">
</head>

<body>
    <div class="single-section">
        <div class="single-header">
            <div class="container-fluid">
                <div class="row align-item-center">
                    <div class="col-xl-3 col-md-3">
                        <div class="single-main-logo">
                            <a href="#"><img src="./img/Mango Entertainment-logo-blue.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="single-sec-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">PC Live</a></li>
                                <li><a href="#">App</a></li>
                                <li><a href="#">Recharge</a></li>
                                <li><a href="#">Mango Ent Store</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single-login-button">
                            <button>Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-section">
            <div class="">
                <div class="row mt-4 m-0">
                    <div class="col-xl-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-global-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-global" type="button" role="tab" aria-controls="nav-global"
                                    aria-selected="true">Global</button>
                                <button class="nav-link" id="nav-game-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-game" type="button" role="tab" aria-controls="nav-game"
                                    aria-selected="false">Game</button>
                                <button class="nav-link" id="nav-battle-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-battle" type="button" role="tab" aria-controls="nav-battle"
                                    aria-selected="false">Battle</button>
                                <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video"
                                    aria-selected="false">Video</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-global" role="tabpanel"
                                aria-labelledby="nav-global-tab" tabindex="0">
                                <div class="global-content">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 mt-5 p-0">
                                            <div class="select-country">
                                                <div class="row mb-3">
                                                    <div class="Ogp">
                                                        <div class="headinggg">
                                                            <h6>Countries & regions</h6>
                                                        </div>
                                                        <div class="arrow-right">
                                                            <a href="" onclick="toggleDiv()"><img
                                                                    src="./img/right-arrow-icon.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-12 col-md-12">
                                                        <ul>
                                                            <li>
                                                                <img src="./img/sweden.png" alt="">
                                                                <span>Sweden</span>
                                                            </li>
                                                            <li>
                                                                <img src="./img/bangladesh.png" alt="">
                                                                <span>Bangladesh</span>
                                                            </li>
                                                            <li>
                                                                <img src="./img/united-kingdom.png" alt="">
                                                                <span>UK</span>
                                                            </li>
                                                            <li>
                                                                <img src="./img/saudi-arabia.png" alt="">
                                                                <span>Saudi-arabia</span>
                                                            </li>
                                                            <li>
                                                                <img src="./img/canada.png" alt="">
                                                                <span>Canada</span>
                                                            </li>
                                                            <li>
                                                                <img src="./img/pakistan.png" alt="">
                                                                <span>Pakistan</span>
                                                            </li>
                                                            <li>
                                                                <img src="./img/ukraine.png" alt="">
                                                                <span>Ukraine</span>
                                                            </li>
                                                            <li>
                                                                <img src="./img/canada.png" alt="">
                                                                <span>Canada</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="myDiv">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="main-div">
                                                                <div class="inner-div-1">
                                                                    <a href="" onclick="toggleDiv()"><img
                                                                            src="./img/chevron-left.png" alt=""></a>
                                                                </div>
                                                                <div class="inner-div-1">
                                                                    <h5>Countries and Regions</h5>
                                                                </div>
                                                                <div class="inner-div-1">
                                                                    <button><img src="./img/search.png" alt=""></button>
                                                                    <!-- <input type="search" name="" id=""> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="inner-tab-sec">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <nav>
                                                                    <div class="nav nav-tabs" id="nav-tab"
                                                                        role="tablist">
                                                                        <button class="nav-link active"
                                                                            id="nav-america-tab" data-bs-toggle="tab"
                                                                            data-bs-target="#nav-america" type="button"
                                                                            role="tab" aria-controls="nav-america"
                                                                            aria-selected="true">America</button>
                                                                        <button class="nav-link" id="nav-asia-tab"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#nav-asia" type="button"
                                                                            role="tab" aria-controls="nav-asia"
                                                                            aria-selected="false">Asia</button>
                                                                        <button class="nav-link"
                                                                            id="nav-middle-east-tab"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#nav-middle-east"
                                                                            type="button" role="tab"
                                                                            aria-controls="nav-middle-east"
                                                                            aria-selected="false">Middle East</button>
                                                                        <button class="nav-link" id="nav-europe-tab"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#nav-europe" type="button"
                                                                            role="tab" aria-controls="nav-europe"
                                                                            aria-selected="false">Europe</button>
                                                                    </div>
                                                                </nav>
                                                                <div class="tab-content" id="nav-tabContent">
                                                                    <div class="tab-pane fade show active"
                                                                        id="nav-america" role="tabpanel"
                                                                        aria-labelledby="nav-america-tab">

                                                                        <div class="am-flags-div">
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-xl-12 col-lg-12 col-md-12">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <img src="./img/flag-1.png"
                                                                                                alt="">
                                                                                            <p>USA</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-2.png"
                                                                                                alt="">
                                                                                            <p>Brazil</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-3.png"
                                                                                                alt="">
                                                                                            <p>Argentina</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-4.png"
                                                                                                alt="">
                                                                                            <p>Colombia</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-5.png"
                                                                                                alt="">
                                                                                            <p>Mexico</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-6.png"
                                                                                                alt="">
                                                                                            <p>peru</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-7.png"
                                                                                                alt="">
                                                                                            <p>Chile</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-8.png"
                                                                                                alt="">
                                                                                            <p>Nigeria</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-9.png"
                                                                                                alt="">
                                                                                            <p>Venezuela</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-10.png"
                                                                                                alt="">
                                                                                            <p>Boliva</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-11.png"
                                                                                                alt="">
                                                                                            <p>Ecuador</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-12.png"
                                                                                                alt="">
                                                                                            <p>Panama</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-13.png"
                                                                                                alt="">
                                                                                            <p>EI Salvador</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-14.png"
                                                                                                alt="">
                                                                                            <p>Cota Rico</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-15.png"
                                                                                                alt="">
                                                                                            <p>Uruguay</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-16.png"
                                                                                                alt="">
                                                                                            <p>Canada</p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-asia"
                                                                        role="tabpanel" aria-labelledby="nav-asia-tab">
                                                                        <div class="am-flags-div">
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-xl-12 col-lg-12 col-md-12">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <img src="./img/flag-1.png"
                                                                                                alt="">
                                                                                            <p>USA</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-2.png"
                                                                                                alt="">
                                                                                            <p>Brazil</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-3.png"
                                                                                                alt="">
                                                                                            <p>Argentina</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-4.png"
                                                                                                alt="">
                                                                                            <p>Colombia</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-5.png"
                                                                                                alt="">
                                                                                            <p>Mexico</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-6.png"
                                                                                                alt="">
                                                                                            <p>peru</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-7.png"
                                                                                                alt="">
                                                                                            <p>Chile</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-8.png"
                                                                                                alt="">
                                                                                            <p>Nigeria</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-9.png"
                                                                                                alt="">
                                                                                            <p>Venezuela</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-10.png"
                                                                                                alt="">
                                                                                            <p>Boliva</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-11.png"
                                                                                                alt="">
                                                                                            <p>Ecuador</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-12.png"
                                                                                                alt="">
                                                                                            <p>Panama</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-13.png"
                                                                                                alt="">
                                                                                            <p>EI Salvador</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-14.png"
                                                                                                alt="">
                                                                                            <p>Cota Rico</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-15.png"
                                                                                                alt="">
                                                                                            <p>Uruguay</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-16.png"
                                                                                                alt="">
                                                                                            <p>Canada</p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-middle-east"
                                                                        role="tabpanel"
                                                                        aria-labelledby="nav-middle-east-tab">
                                                                        <div class="am-flags-div">
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-xl-12 col-lg-12 col-md-12">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <img src="./img/flag-1.png"
                                                                                                alt="">
                                                                                            <p>USA</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-2.png"
                                                                                                alt="">
                                                                                            <p>Brazil</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-3.png"
                                                                                                alt="">
                                                                                            <p>Argentina</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-4.png"
                                                                                                alt="">
                                                                                            <p>Colombia</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-5.png"
                                                                                                alt="">
                                                                                            <p>Mexico</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-6.png"
                                                                                                alt="">
                                                                                            <p>peru</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-7.png"
                                                                                                alt="">
                                                                                            <p>Chile</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-8.png"
                                                                                                alt="">
                                                                                            <p>Nigeria</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-9.png"
                                                                                                alt="">
                                                                                            <p>Venezuela</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-10.png"
                                                                                                alt="">
                                                                                            <p>Boliva</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-11.png"
                                                                                                alt="">
                                                                                            <p>Ecuador</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-12.png"
                                                                                                alt="">
                                                                                            <p>Panama</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-13.png"
                                                                                                alt="">
                                                                                            <p>EI Salvador</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-14.png"
                                                                                                alt="">
                                                                                            <p>Cota Rico</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-15.png"
                                                                                                alt="">
                                                                                            <p>Uruguay</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-16.png"
                                                                                                alt="">
                                                                                            <p>Canada</p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-europe"
                                                                        role="tabpanel"
                                                                        aria-labelledby="nav-europe-tab">
                                                                        <div class="am-flags-div">
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-xl-12 col-lg-12 col-md-12">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <img src="./img/flag-1.png"
                                                                                                alt="">
                                                                                            <p>USA</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-2.png"
                                                                                                alt="">
                                                                                            <p>Brazil</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-3.png"
                                                                                                alt="">
                                                                                            <p>Argentina</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-4.png"
                                                                                                alt="">
                                                                                            <p>Colombia</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-5.png"
                                                                                                alt="">
                                                                                            <p>Mexico</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-6.png"
                                                                                                alt="">
                                                                                            <p>peru</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-7.png"
                                                                                                alt="">
                                                                                            <p>Chile</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-8.png"
                                                                                                alt="">
                                                                                            <p>Nigeria</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-9.png"
                                                                                                alt="">
                                                                                            <p>Venezuela</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-10.png"
                                                                                                alt="">
                                                                                            <p>Boliva</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-11.png"
                                                                                                alt="">
                                                                                            <p>Ecuador</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-12.png"
                                                                                                alt="">
                                                                                            <p>Panama</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-13.png"
                                                                                                alt="">
                                                                                            <p>EI Salvador</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-14.png"
                                                                                                alt="">
                                                                                            <p>Cota Rico</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-15.png"
                                                                                                alt="">
                                                                                            <p>Uruguay</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="./img/flag-16.png"
                                                                                                alt="">
                                                                                            <p>Canada</p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="all-profiles">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-1.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-image-2.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-image-3.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-image-4.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-image-5.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-image-6.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-image-7.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-image-8.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-image-9.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-image-10.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-image-5.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-4">
                                                        <div class="profile-div">
                                                            <img src="./img/profile-image-5.png" class="img-responsive"
                                                                alt="">
                                                            <div class="position">
                                                                <div class="pos-div">
                                                                    <img src="./img/small-flag-Gr.png" alt="">
                                                                    <h5>GR</h5>
                                                                </div>
                                                                <div class="pos-div-1">
                                                                    <h5>No.2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="second-position">
                                                                <div class="second-1">
                                                                    <div class="s-1"><img src="./img/coin-icon.png"
                                                                            alt=""><span>89764</span>
                                                                    </div>
                                                                    <div class="s-2">
                                                                        <span>🚨🚨KYLE</span>
                                                                    </div>
                                                                </div>


                                                                <div class="second-2">
                                                                    <span><img src="./img/profile-inner-image.png"
                                                                            alt=""></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-game" role="tabpanel" aria-labelledby="nav-game-tab"
                                tabindex="0">
                                <div class="game-content">
                                    <div class="row mt-5 mb-4">
                                        <h2>Top streams</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="swiper top-streams-Swiper">
                                                <div class="swiper-wrapper">
                                                    @foreach ($results as $result)
                                                        <div class="swiper-slide" onclick="window.location.href='/joinStream/{{ $result->AuthorUid }}'">
                                                            <div class="main-cont">
                                                                <div class="top-steams">
                                                                    <img class="img-fluid" src="{{ $result->image?$result->image->geturl():asset('img/future red dead.jpg') }}"
                                                                        alt="">
                                                                    <div class="lives-div">
                                                                        <span>LIVE</span>
                                                                    </div>
                                                                    <div class="viewers-div">
                                                                        <span>{{ $result->viewersCountLive }} viewers</span>
                                                                    </div>
                                                                </div>
                                                                <div class="streams-details">
                                                                    <div class="de-img">
                                                                        <img src="{{ $result->Author->avatar->geturl() }}" alt="">
                                                                    </div>
                                                                    <div class="de-write">
                                                                        <h4>{{ $result->Author->name }}</h4>
                                                                        <p>{{ $result->title }}</p>
                                                                        <p class="add-spn">
                                                                            @foreach ($result->tag as $item)
                                                                                <span>{{ $item }}</span>
                                                                            @endforeach                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="categories">
                                        <div class="row mt-4 mb-4">
                                            <div class="col-12">
                                                <div class="headings">
                                                 <h2>Categories</h2>
                                                <h2>All</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="categories-slider">
                                                    <div class="swiper mycategoriesSwiper">
                                                        <div class="swiper-wrapper">
                                                          <div class="swiper-slide">
                                                            <div class="category-swiper">
                                                                <div class="ct-s">
                                                                    <img src="./img/category-slide-1.png" alt="">
                                                                    <div class="hide">
                                                                        <h5>JUST</h5>
                                                                        <h5>CHATTING</h5>
                                                                    </div>
                                                                </div>

                                                                <div class="ctgy-name-watch">
                                                                    <p>Just Chatting</p>
                                                                    <span><img src="./img/Live.png" alt="">180.8k</span>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="swiper-slide">
                                                            <div class="category-swiper">
                                                                <div class="ct-s">
                                                                    <img src="./img/category-slide-2.png" alt="">
                                                                    <div class="hide">
                                                                        <h5>JUST</h5>
                                                                        <h5>CHATTING</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="ctgy-name-watch">
                                                                    <p>Just Chatting</p>
                                                                    <span><img src="./img/Live.png" alt="">180.8k</span>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="swiper-slide">
                                                            <div class="category-swiper">
                                                                <div class="ct-s">
                                                                    <img src="./img/category-slide-3.png" alt="">
                                                                    <div class="hide">
                                                                        <h5>JUST</h5>
                                                                        <h5>CHATTING</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="ctgy-name-watch">
                                                                    <p>Just Chatting</p>
                                                                    <span><img src="./img/Live.png" alt="">180.8k</span>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="swiper-slide">
                                                            <div class="category-swiper">
                                                                <div class="ct-s">
                                                                    <img src="./img/category-slide-4.png" alt="">
                                                                    <div class="hide">
                                                                        <h5>JUST</h5>
                                                                        <h5>CHATTING</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="ctgy-name-watch">
                                                                    <p>Just Chatting</p>
                                                                    <span><img src="./img/Live.png" alt="">180.8k</span>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="swiper-slide">
                                                            <div class="category-swiper">
                                                                <div class="ct-s">
                                                                    <img src="./img/category-slide-5.png" alt="">
                                                                    <div class="hide">
                                                                        <h5>JUST</h5>
                                                                        <h5>CHATTING</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="ctgy-name-watch">
                                                                    <p>Just Chatting</p>
                                                                    <span><img src="./img/Live.png" alt="">180.8k</span>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="swiper-slide">
                                                            <div class="category-swiper">
                                                                <div class="ct-s">
                                                                    <img src="./img/category-slide-6.png" alt="">
                                                                    <div class="hide">
                                                                        <h5>JUST</h5>
                                                                        <h5>CHATTING</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="ctgy-name-watch">
                                                                    <p>Just Chatting</p>
                                                                    <span><img src="./img/Live.png" alt="">180.8k</span>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="swiper-slide">
                                                            <div class="category-swiper">
                                                                <div class="ct-s">
                                                                    <img src="./img/category-slide-7.png" alt="">
                                                                    <div class="hide">
                                                                        <h5>JUST</h5>
                                                                        <h5>CHATTING</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="ctgy-name-watch">
                                                                    <p>Just Chatting</p>
                                                                    <span><img src="./img/Live.png" alt="">180.8k</span>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="swiper-slide">
                                                            <div class="category-swiper">
                                                                <div class="ct-s">
                                                                    <img src="./img/category-slide-1.png" alt="">
                                                                    <div class="hide">
                                                                        <h5>JUST</h5>
                                                                        <h5>CHATTING</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="ctgy-name-watch">
                                                                    <p>Just Chatting</p>
                                                                    <span><img src="./img/Live.png" alt="">180.8k</span>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="swiper-slide">
                                                            <div class="category-swiper">
                                                                <div class="ct-s">
                                                                    <img src="./img/category-slide-3.png" alt="">
                                                                    <div class="hide">
                                                                        <h5>JUST</h5>
                                                                        <h5>CHATTING</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="ctgy-name-watch">
                                                                    <p>Just Chatting</p>
                                                                    <span><img src="./img/Live.png" alt="">180.8k</span>
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <!-- <div class="swiper-pagination"></div> -->
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all-categories">
                                        <div class="row mt-4 mb-4">
                                            <h2>All</h2>
                                        </div>
                                        <div class="row gy-3">
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/box-1.png" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/extreme-thumb-war.png" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/leagues-of-legends.jpg" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/box-2.png" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/future red dead.jpg" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/masters-skin-roblox.png" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/box-3-img.jpg" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/box-1.png" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xl-3 col-lg-3">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/box-1.png" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/box-1.png" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/box-1.png" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3">
                                                <div class="main-box">
                                                    <div class="box-1">
                                                        <img src="./img/box-1.png" alt="">
                                                        <div class="new-lives-div">
                                                            <span>LIVE</span>
                                                        </div>
                                                        <div class="new-viewers-div">
                                                            <span>55,2k viewers</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-2">
                                                        <div class="b-1">
                                                            <img src="./img/profile-img.png" alt="">
                                                        </div>
                                                        <div class="b-2">
                                                            <h6>Banneis</h6>
                                                            <p>Amoung us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-battle" role="tabpanel" aria-labelledby="nav-battle-tab"
                                tabindex="0">
                                  <div class="main-battle-section mt-5 pt-4 pb-5">
                                    <div class="container-fluid">
                                        <div class="battle-section-1">
                                            <div class="row mt-5 mb-4">
                                                <div class="col-lg-12">
                                                    <div class="battle-heading">
                                                        <h2>1 vs 1</h2>
                                                        <h2>All</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="battle-1vs1">
                                                        <div class="swiper mybattleSwiper-1">
                                                            <div class="swiper-wrapper">
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1v1">
                                                                    <div class="screen-1v1">
                                                                        <div class="screen-1">
                                                                            <img src="./img/post-img (2).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-2">
                                                                            <img src="./img/post-img (1).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1v1">
                                                                    <div class="screen-1v1">
                                                                        <div class="screen-1">
                                                                            <img src="./img/post-img (2).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-2">
                                                                            <img src="./img/post-img (1).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1v1">
                                                                    <div class="screen-1v1">
                                                                        <div class="screen-1">
                                                                            <img src="./img/post-img (2).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-2">
                                                                            <img src="./img/post-img (1).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1v1">
                                                                    <div class="screen-1v1">
                                                                        <div class="screen-1">
                                                                            <img src="./img/post-img (2).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-2">
                                                                            <img src="./img/post-img (1).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1v1">
                                                                    <div class="screen-1v1">
                                                                        <div class="screen-1">
                                                                            <img src="./img/post-img (2).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-2">
                                                                            <img src="./img/post-img (1).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1v1">
                                                                    <div class="screen-1v1">
                                                                        <div class="screen-1">
                                                                            <img src="./img/post-img (2).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-2">
                                                                            <img src="./img/post-img (1).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1v1">
                                                                    <div class="screen-1v1">
                                                                        <div class="screen-1">
                                                                            <img src="./img/post-img (2).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-2">
                                                                            <img src="./img/post-img (1).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1v1">
                                                                    <div class="screen-1v1">
                                                                        <div class="screen-1">
                                                                            <img src="./img/post-img (2).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-2">
                                                                            <img src="./img/post-img (1).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1v1">
                                                                    <div class="screen-1v1">
                                                                        <div class="screen-1">
                                                                            <img src="./img/post-img (2).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-2">
                                                                            <img src="./img/post-img (1).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <!-- <div class="swiper-pagination"></div> -->
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="battle-section-2">
                                            <div class="row mt-5 mb-4">
                                                <div class="col-lg-12">
                                                    <div class="battle-heading">
                                                        <h2>1 vs team</h2>
                                                        <h2>All</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="battle-1vsteam">
                                                        <div class="swiper mybattleSwiper-2">
                                                            <div class="swiper-wrapper">
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1vsteam">
                                                                    <div class="screen-1vteam">
                                                                        <div class="scr-1vt-1">
                                                                            <img src="./img/post-img (3).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="scr-1vt-2">
                                                                            <div class="sv-1">
                                                                                <img src="./img/post-img (4).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sv-2">
                                                                                <img src="./img/post-img (5).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1vsteam">
                                                                    <div class="screen-1vteam">
                                                                        <div class="scr-1vt-1">
                                                                            <img src="./img/post-img (3).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="scr-1vt-2">
                                                                            <div class="sv-1">
                                                                                <img src="./img/post-img (4).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sv-2">
                                                                                <img src="./img/post-img (5).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1vsteam">
                                                                    <div class="screen-1vteam">
                                                                        <div class="scr-1vt-1">
                                                                            <img src="./img/post-img (3).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="scr-1vt-2">
                                                                            <div class="sv-1">
                                                                                <img src="./img/post-img (4).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sv-2">
                                                                                <img src="./img/post-img (5).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1vsteam">
                                                                    <div class="screen-1vteam">
                                                                        <div class="scr-1vt-1">
                                                                            <img src="./img/post-img (3).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="scr-1vt-2">
                                                                            <div class="sv-1">
                                                                                <img src="./img/post-img (4).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sv-2">
                                                                                <img src="./img/post-img (5).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1vsteam">
                                                                    <div class="screen-1vteam">
                                                                        <div class="scr-1vt-1">
                                                                            <img src="./img/post-img (3).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="scr-1vt-2">
                                                                            <div class="sv-1">
                                                                                <img src="./img/post-img (4).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sv-2">
                                                                                <img src="./img/post-img (5).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1vsteam">
                                                                    <div class="screen-1vteam">
                                                                        <div class="scr-1vt-1">
                                                                            <img src="./img/post-img (3).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="scr-1vt-2">
                                                                            <div class="sv-1">
                                                                                <img src="./img/post-img (4).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sv-2">
                                                                                <img src="./img/post-img (5).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1vsteam">
                                                                    <div class="screen-1vteam">
                                                                        <div class="scr-1vt-1">
                                                                            <img src="./img/post-img (3).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="scr-1vt-2">
                                                                            <div class="sv-1">
                                                                                <img src="./img/post-img (4).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sv-2">
                                                                                <img src="./img/post-img (5).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1vsteam">
                                                                    <div class="screen-1vteam">
                                                                        <div class="scr-1vt-1">
                                                                            <img src="./img/post-img (3).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="scr-1vt-2">
                                                                            <div class="sv-1">
                                                                                <img src="./img/post-img (4).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sv-2">
                                                                                <img src="./img/post-img (5).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-1vsteam">
                                                                    <div class="screen-1vteam">
                                                                        <div class="scr-1vt-1">
                                                                            <img src="./img/post-img (3).png" alt="">
                                                                            <div class="content">
                                                                                <span>🔥vis1245</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="scr-1vt-2">
                                                                            <div class="sv-1">
                                                                                <img src="./img/post-img (4).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sv-2">
                                                                                <img src="./img/post-img (5).png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <!-- <div class="swiper-pagination"></div> -->
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="battle-section-3">
                                            <div class="row mt-5 mb-4">
                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                    <div class="battle-heading">
                                                        <h2>Team</h2>
                                                        <h2>All</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                    <div class="battle-team">
                                                        <div class="swiper mybattleSwiper-3">
                                                            <div class="swiper-wrapper">
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-team">
                                                                    <div class="screen-team">
                                                                        <div class="screen-hub">
                                                                            <div class="stm-1">
                                                                                <img src="./img/profile-image-5.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-2">
                                                                                <img src="./img/profile-image-2.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-hub">
                                                                            <div class="stm-3">
                                                                                <img src="./img/profile-image-7.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-4">
                                                                                <img src="./img/profile-image-10.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-team">
                                                                    <div class="screen-team">
                                                                        <div class="screen-hub">
                                                                            <div class="stm-1">
                                                                                <img src="./img/profile-image-5.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-2">
                                                                                <img src="./img/profile-image-2.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-hub">
                                                                            <div class="stm-3">
                                                                                <img src="./img/profile-image-7.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-4">
                                                                                <img src="./img/profile-image-10.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-team">
                                                                    <div class="screen-team">
                                                                        <div class="screen-hub">
                                                                            <div class="stm-1">
                                                                                <img src="./img/profile-image-5.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-2">
                                                                                <img src="./img/profile-image-2.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-hub">
                                                                            <div class="stm-3">
                                                                                <img src="./img/profile-image-7.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-4">
                                                                                <img src="./img/profile-image-10.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-team">
                                                                    <div class="screen-team">
                                                                        <div class="screen-hub">
                                                                            <div class="stm-1">
                                                                                <img src="./img/profile-image-5.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-2">
                                                                                <img src="./img/profile-image-2.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-hub">
                                                                            <div class="stm-3">
                                                                                <img src="./img/profile-image-7.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-4">
                                                                                <img src="./img/profile-image-10.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-team">
                                                                    <div class="screen-team">
                                                                        <div class="screen-hub">
                                                                            <div class="stm-1">
                                                                                <img src="./img/profile-image-5.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-2">
                                                                                <img src="./img/profile-image-2.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-hub">
                                                                            <div class="stm-3">
                                                                                <img src="./img/profile-image-7.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-4">
                                                                                <img src="./img/profile-image-10.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-team">
                                                                    <div class="screen-team">
                                                                        <div class="screen-hub">
                                                                            <div class="stm-1">
                                                                                <img src="./img/profile-image-5.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-2">
                                                                                <img src="./img/profile-image-2.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-hub">
                                                                            <div class="stm-3">
                                                                                <img src="./img/profile-image-7.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-4">
                                                                                <img src="./img/profile-image-10.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-team">
                                                                    <div class="screen-team">
                                                                        <div class="screen-hub">
                                                                            <div class="stm-1">
                                                                                <img src="./img/profile-image-5.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-2">
                                                                                <img src="./img/profile-image-2.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-hub">
                                                                            <div class="stm-3">
                                                                                <img src="./img/profile-image-7.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-4">
                                                                                <img src="./img/profile-image-10.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-team">
                                                                    <div class="screen-team">
                                                                        <div class="screen-hub">
                                                                            <div class="stm-1">
                                                                                <img src="./img/profile-image-5.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-2">
                                                                                <img src="./img/profile-image-2.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-hub">
                                                                            <div class="stm-3">
                                                                                <img src="./img/profile-image-7.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-4">
                                                                                <img src="./img/profile-image-10.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="swiper-slide">
                                                                <div class="battle-box-team">
                                                                    <div class="screen-team">
                                                                        <div class="screen-hub">
                                                                            <div class="stm-1">
                                                                                <img src="./img/profile-image-5.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-2">
                                                                                <img src="./img/profile-image-2.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="screen-hub">
                                                                            <div class="stm-3">
                                                                                <img src="./img/profile-image-7.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="stm-4">
                                                                                <img src="./img/profile-image-10.png" alt="">
                                                                                <div class="content">
                                                                                    <span>🔥vis1245</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="veres">
                                                                            <img src="./img/versus.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-likes">
                                                                        <span>3000</span>
                                                                        <span>500</span>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <!-- <div class="swiper-pagination"></div> -->
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab"
                                tabindex="0">
                                <div class="main-videos-section">
                                    <div class="row gy-4 gx-4 mt-2">
                                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                                            <div class="main-video-content">
                                               <div class="video-section">
                                                <img src="./img/post-img.png" alt="">
                                               </div>
                                               <div class="profile-follow">
                                                <div class="prof">
                                                   <div class="pf-1">
                                                    <img src="./img/post-placeholder.png" alt="">
                                                   </div>
                                                   <div class="pf-2">
                                                    <h6>Ralph Edwards</h6>
                                                    <p>id: 01251421</p>
                                                   </div>
                                                </div>
                                                <div class="folw">
                                                    <button class="follow-button">Follow</button>
                                                </div>
                                               </div>
                                               <div class="comment-section">
                                                <p>#live #summer #sweet </p>
                                                <p>have a happy good day and wish me luck 👌👌👌👌</p>
                                               </div>
                                               <div class="last-section">
                                                <div class="ls-1">
                                                    <img src="./img/coin-icon.png" alt=""><a href="">Reward</a>
                                                </div>
                                                <div class="ls-2">
                                                    <ul>
                                                        <li><a href=""><i class="fa-regular fa-heart"></i></a>267</li>
                                                        <li><a href=""><i class="fa-regular fa-comment"></i></a>96</li>
                                                        <li><a class="open-me" href="" onclick="togglesocial(1)"><img src="./img/ic_send.png" alt=""></a>7</li>
                                                    </ul>
                                                    <div class="social-div" id="social-div-1">
                                                        <ul>
                                                            <li><a href="https://www.flaticon.com/free-icons/whatsapp" ></a></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                                            <div class="main-video-content">
                                                <div class="video-section">
                                                 <img src="./img/post-img (1).png" alt="">
                                                </div>
                                                <div class="profile-follow">
                                                 <div class="prof">
                                                    <div class="pf-1">
                                                     <img src="./img/post-placeholder.png" alt="">
                                                    </div>
                                                    <div class="pf-2">
                                                     <h6>Ralph Edwards</h6>
                                                     <p>id: 01251421</p>
                                                    </div>
                                                 </div>
                                                 <div class="folw">
                                                     <button class="follow-button">Follow</button>
                                                 </div>
                                                </div>
                                                <div class="comment-section">
                                                 <p>#live #summer #sweet </p>
                                                 <p>have a happy good day and wish me luck 👌👌👌👌</p>
                                                </div>
                                                <div class="last-section">
                                                 <div class="ls-1">
                                                     <img src="./img/coin-icon.png" alt=""><a href="">Reward</a>
                                                 </div>
                                                 <div class="ls-2">
                                                    <ul>
                                                        <li><a href=""><i class="fa-regular fa-heart"></i></a>267</li>
                                                        <li><a href=""><i class="fa-regular fa-comment"></i></a>96</li>
                                                        <li><a class="open-me" href="" onclick="togglesocial(2)"><img src="./img/ic_send.png" alt=""></a>7</li>
                                                    </ul>
                                                    <div class="social-div" id="social-div-2">
                                                        <ul>
                                                            <li><a href="https://www.flaticon.com/free-icons/whatsapp" ></a></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                </div>
                                             </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                                            <div class="main-video-content">
                                               <div class="video-section">
                                                <img src="./img/post-img (2).png" alt="">
                                               </div>
                                               <div class="profile-follow">
                                                <div class="prof">
                                                   <div class="pf-1">
                                                    <img src="./img/post-placeholder.png" alt="">
                                                   </div>
                                                   <div class="pf-2">
                                                    <h6>Ralph Edwards</h6>
                                                    <p>id: 01251421</p>
                                                   </div>
                                                </div>
                                                <div class="folw">
                                                    <button class="follow-button">Follow</button>
                                                </div>
                                               </div>
                                               <div class="comment-section">
                                                <p>#live #summer #sweet </p>
                                                <p>have a happy good day and wish me luck 👌👌👌👌</p>
                                               </div>
                                               <div class="last-section">
                                                <div class="ls-1">
                                                    <img src="./img/coin-icon.png" alt=""><a href="">Reward</a>
                                                </div>
                                                <div class="ls-2">
                                                    <ul>
                                                        <li><a href=""><i class="fa-regular fa-heart"></i></a>267</li>
                                                        <li><a href=""><i class="fa-regular fa-comment"></i></a>96</li>
                                                        <li><a class="open-me" href="" onclick="togglesocial(3)"><img src="./img/ic_send.png" alt=""></a>7</li>
                                                    </ul>
                                                    <div class="social-div" id="social-div-3">
                                                        <ul>
                                                            <li><a href="https://www.flaticon.com/free-icons/whatsapp" ></a></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                                            <div class="main-video-content">
                                               <div class="video-section">
                                                <img src="./img/post-img (3).png" alt="">
                                               </div>
                                               <div class="profile-follow">
                                                <div class="prof">
                                                   <div class="pf-1">
                                                    <img src="./img/post-placeholder.png" alt="">
                                                   </div>
                                                   <div class="pf-2">
                                                    <h6>Ralph Edwards</h6>
                                                    <p>id: 01251421</p>
                                                   </div>
                                                </div>
                                                <div class="folw">
                                                    <button class="follow-button">Follow</button>
                                                </div>
                                               </div>
                                               <div class="comment-section">
                                                <p>#live #summer #sweet </p>
                                                <p>have a happy good day and wish me luck 👌👌👌👌</p>
                                               </div>
                                               <div class="last-section">
                                                <div class="ls-1">
                                                    <img src="./img/coin-icon.png" alt=""><a href="">Reward</a>
                                                </div>
                                                <div class="ls-2">
                                                    <ul>
                                                        <li><a href=""><i class="fa-regular fa-heart"></i></a>267</li>
                                                        <li><a href=""><i class="fa-regular fa-comment"></i></a>96</li>
                                                        <li><a class="open-me" href="" onclick="togglesocial(4)"><img src="./img/ic_send.png" alt=""></a>7</li>
                                                    </ul>
                                                    <div class="social-div" id="social-div-4">
                                                        <ul>
                                                            <li><a href="https://www.flaticon.com/free-icons/whatsapp" ></a></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                                            <div class="main-video-content">
                                               <div class="video-section">
                                                <img src="./img/post-img (4).png" alt="">
                                               </div>
                                               <div class="profile-follow">
                                                <div class="prof">
                                                   <div class="pf-1">
                                                    <img src="./img/post-placeholder.png" alt="">
                                                   </div>
                                                   <div class="pf-2">
                                                    <h6>Ralph Edwards</h6>
                                                    <p>id: 01251421</p>
                                                   </div>
                                                </div>
                                                <div class="folw">
                                                    <button class="follow-button">Follow</button>
                                                </div>
                                               </div>
                                               <div class="comment-section">
                                                <p>#live #summer #sweet </p>
                                                <p>have a happy good day and wish me luck 👌👌👌👌</p>
                                               </div>
                                               <div class="last-section">
                                                <div class="ls-1">
                                                    <img src="./img/coin-icon.png" alt=""><a href="">Reward</a>
                                                </div>
                                                <div class="ls-2">
                                                    <ul>
                                                        <li><a href=""><i class="fa-regular fa-heart"></i></a>267</li>
                                                        <li><a href=""><i class="fa-regular fa-comment"></i></a>96</li>
                                                        <li><a href="" onclick="togglesocial(5)"><img src="./img/ic_send.png" alt=""></a>7</li>
                                                    </ul>
                                                    <div class="social-div" id="social-div-5">
                                                        <ul>
                                                            <li><a href=""><i class="fas fa-brands fa-whatsapp"></i></a></li>
                                                            <li><a href=""></a></li>
                                                            <li><a href=""></a></li>
                                                            <li><a href=""></a></li>
                                                            <li></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                                            <div class="main-video-content">
                                               <div class="video-section">
                                                <img src="./img/post-img (5).png" alt="">
                                               </div>
                                               <div class="profile-follow">
                                                <div class="prof">
                                                   <div class="pf-1">
                                                    <img src="./img/post-placeholder.png" alt="">
                                                   </div>
                                                   <div class="pf-2">
                                                    <h6>Ralph Edwards</h6>
                                                    <p>id: 01251421</p>
                                                   </div>
                                                </div>
                                                <div class="folw">
                                                    <button class="follow-button">Follow</button>
                                                </div>
                                               </div>
                                               <div class="comment-section">
                                                <p>#live #summer #sweet </p>
                                                <p>have a happy good day and wish me luck 👌👌👌👌</p>
                                               </div>
                                               <div class="last-section">
                                                <div class="ls-1">
                                                    <img src="./img/coin-icon.png" alt=""><a href="">Reward</a>
                                                </div>
                                                <div class="ls-2">
                                                    <ul>
                                                        <li><a href=""><i class="fa-regular fa-heart"></i></a>267</li>
                                                        <li><a href=""><i class="fa-regular fa-comment"></i></a>96</li>
                                                        <li><a class="open-me" type="button" href="" onclick="togglesocial(6)"><img src="./img/ic_send.png" alt=""></a>7</li>
                                                    </ul>
                                                    <div class="social-div" id="social-div-6">
                                                        <ul>
                                                            <li><a ></a></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>







    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <!-- top-streams-swiper--START -->
    <script>
        var swiper = new Swiper(".top-streams-Swiper", {
            slidesPerView: 3.7,
            spaceBetween: 40,
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 2.5,
                    spaceBetween: 20,
                },
                1200: {
                    slidesPerView: 3.7,
                    spaceBetween: 10,
                },
            },
        });
    </script>
    <!-- top-streams-swiper--END -->
    <!--  -->
    <script>
        var swiper = new Swiper(".mycategoriesSwiper", {
          slidesPerView: 6.8,
          spaceBetween: 10,
        //   pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        //   },
          breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 10,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 10,
            },
            1024: {
              slidesPerView: 4.8,
              spaceBetween: 10,
            },
            1200: {
              slidesPerView: 6.8,
              spaceBetween: 10,
            },
          },
        });
      </script>
    <!--  -->

    <!-- battle 1 vs 1 start -->
    <script>
        var swiper = new Swiper(".mybattleSwiper-1", {
          slidesPerView: 1,
          spaceBetween: 10,
        //   pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        //   },
          breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2.4,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 2.5,
              spaceBetween: 20,
            },
          },
        });
      </script>
    <!-- battle 1 vs 1 End -->

    <!--battle 1 vs team start-->
    <script>
        var swiper = new Swiper(".mybattleSwiper-2", {
          slidesPerView: 1,
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2.4,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 2.5,
              spaceBetween: 20,
            },
          },
        });
      </script>
    <!--battle 1 vs team End  -->

    <!--  -->
    <script>
        var swiper = new Swiper(".mybattleSwiper-3", {
          slidesPerView: 1,
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2.4,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 2.5,
              spaceBetween: 20,
            },
          },
        });
      </script>
    <!--  -->


    <script>
//         function togglesocial() {
//     // Get the div elements with class "social-div"
//     var divs = document.getElementsByClassName("social-div");

//     // Loop through each div with the class "social-div"
//     for (var i = 0; i < divs.length; i++) {
//         var div = divs[i];

//         // Check the current display state
//         if (div.style.display === 'none' || div.style.display === '') {
//             // If it's hidden or not set, show it
//             div.style.display = 'block';
//         } else {
//             // If it's visible, hide it
//             div.style.display = 'none';
//         }
//     }
//     // Prevent the default behavior of the event (e.g., preventing page reload)
//     event.preventDefault();
// }
function togglesocial(id) {
    event.preventDefault();
    var div = document.getElementById("social-div-" + id);

    console.log(id , "the iddddd")

    // Check the current display state
    if (div.style.display === 'none' || div.style.display === '') {
        // If it's hidden or not set, show it
        div.style.display = 'block';
    } else {
        // If it's visible, hide it
        div.style.display = 'none';
    }
}

    </script>

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
        }
    </script>
</body>

</html>
