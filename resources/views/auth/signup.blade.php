<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<section class="mango-signup-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row mt-3">
                    <div class="col-md-10 offset-md-2">
                        <h1 class="mb-4 l-heading">Sign Up</h1>
                        @if ($errors->has('error'))
                            <div class="alert alert-danger">
                                {{ $errors->first('error') }}
                            </div>
                        @endif
                        <form class="signup-form" action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="mb-4 input-group">
                                <span class="input-group-text"><img src="{{ asset('img/user-icon.png') }}" alt=""></span>
                                <input type="text" class="form-control" id="username" placeholder="Username" name="name">
                            </div>
                            <div class="mb-4 input-group">
                                <span class="input-group-text"><img src="{{ asset('img/user-icon.png') }}" alt=""></span>
                                <input type="email" class="form-control" id="email" placeholder="email" name="email">
                            </div>
                            <div class="mb-4 input-group">
                                <span class="input-group-text"><img src="{{ asset('img/pass-icon.png') }}" alt=""></span>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                <span class="input-group-text"><img src="{{ asset('img/show-icon.png') }}" alt=""></span>
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text"><img src="{{ asset('img/pass-icon.png') }}" alt=""></span>
                                <input type="password" class="form-control" id="password" placeholder="Confirm Password" name="c_password">
                                <span class="input-group-text"><img src="{{ asset('img/show-icon.png') }}" alt=""></span>
                            </div>
                            <div>
                                <p><span><img src="{{ asset('img/checkbox-circle.png') }}" alt=""></span>By clicking the <a href="#">Register</a> button, you agree to the public offer</p>
                            </div>


                            <button type="submit" class="login-button">Create Account</button>
                        </form>
                        <div class="text-div">
                            <p>- OR Continue with -</p>
                        </div>
                        <div class="social-icon">
                            <ul>
                                <li><a href=""><img src="{{ asset('img/google-icon.png') }}" alt=""></a></li>
                                <li><a href=""><img src="{{ asset('img/apple-icon.png') }}" alt=""></a></li>
                                <li><a href=""><img src="{{ asset('img/fb-icon.png') }}" alt=""></a></li>
                                <li><a href=""><img src="{{ asset('img/tiktok-icon.png') }}" alt=""></a></li>
                                <li><a href=""><img src="{{ asset('img/twitch-icon.png') }}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="text-div">
                            <p>I don't have an account <span><a href="{{ route('signin') }}">Login</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="responsive" src="{{ asset('img/authenticate-1.png') }}" />
                      </div>
                      <div class="swiper-slide">
                        <img src="{{ asset('img/authenticate-1.png') }}" />
                      </div>
                      <div class="swiper-slide">
                        <img src="{{ asset('img/authenticate-1.png') }}" />
                      </div>
                      <div class="swiper-slide">
                        <img src="{{ asset('img/authenticate-1.png') }}" />
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>

              </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/fontawesome.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</body>

</html>
