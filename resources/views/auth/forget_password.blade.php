<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORGET PASSWORD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="mango-forget-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-4 l-heading">Forget Password</h1>
                    <form class="email-form" action="{{ route('email_send') }}" method="POST">
                        @csrf
                        <div class="mb-4 input-group">
                            <span class="input-group-text"><img src="{{ asset('img/email-icon.png') }}" alt=""></span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" name="email">
                        </div>
                        <div class="reset-text">
                            <p><span>*</span> We will send you a message to set or reset your new password</p>
                        </div>


                        <button type="submit" class="login-button">Submit button</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img class="responsive" src="{{ asset('img/authenticate-2.png') }}" />
                          </div>
                          <div class="swiper-slide">
                            <img src="{{ asset('img/authenticate-2.png') }}" />
                          </div>
                          <div class="swiper-slide">
                            <img src="{{ asset('img/authenticate-2.png') }}" />
                          </div>
                          <div class="swiper-slide">
                            <img src="{{ asset('img/authenticate-2.png') }}" />
                          </div>
                        </div>
                        <div class="swiper-pagination"></div>
                      </div>
                </div>
            </div>
        </div>
    </div>
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
