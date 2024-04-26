<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<section class="mango-login-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row mt-3">
                    <div class="col-md-9 offset-md-3">
                        <h1 class="mb-4 l-heading">Login</h1>
                        @if ($errors->has('error'))
                            <div class="alert alert-danger">
                                {{ $errors->first('error') }}
                            </div>
                        @endif
                        <form class="login-form" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-4 input-group">
                                <span class="input-group-text"><img src="{{ asset('img/user-icon.png') }}" alt=""></span>
                                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text"><img src="{{ asset('img/pass-icon.png') }}" alt=""></span>
                                <input type="password" class="form-control" id="password" placeholder="Confirm password" name="password">
                                <span class="input-group-text"><img src="{{ asset('img/show-icon.png') }}" alt=""></span>
                            </div>
                            <div class="forget-pass">
                                <a href="{{ route('view_forget_password') }}">Forgot Password?</a>
                            </div>

                            <button type="submit" class="login-button">Login</button>
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
                            <p>I don't have an account <span><a href="{{ route('signup') }}">Create an acount</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="{{ asset('img/authenticate.png') }}" />
                      </div>
                      <div class="swiper-slide">
                        <img src="{{ asset('img/authenticate.png') }}" />
                      </div>
                      <div class="swiper-slide">
                        <img src="{{ asset('img/authenticate.png') }}" />
                      </div>
                      <div class="swiper-slide">
                        <img src="{{ asset('img/authenticate.png') }}" />
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
