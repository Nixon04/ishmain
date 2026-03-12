<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
    user-scalable=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <title>ishumanity | Admin Login</title>
    <link rel="icon" type="images/*" href="{{asset('asset_images/ishc.png')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/media.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/ishc_community.css')}}"/>
    <script src="{{asset('jquery.js')}}"></script>
</head>
    <body>

    <div class="main">
        <div class="login-flex-container">
            <div class="login-flex-left d-lg-block d-none">
                <div class="login-left-contents">
                    <h4 class="font-bigi">System Believe in what is needed</h4>
                </div>
            </div>
            <div class="login-flex-right">
                <div class="login-right-container container-xxl ">
                    <div class="login-right-header d-flex">
                        <div class="login-logo">
                           <img src="{{asset('asset_images/logo_ishc.png')}}" width="80" alt="Logo">
                        </div>
                        <div class="d-flex d-lg-block d-none">
                            <span class="me-3">Dont have an account?</span>
                             <a href="{{route('AdminSignup')}}" class="footer-link">
                               signup
                            </a>
                        </div>
                    </div>
                    <div class="login-body-container">
                        <div class="welcome-greetings-container">
                            <h4 class="welcome-text">Sign in and start your journey 🤗</h4>
                              <h6>Explore on a well documented dashboard, easy to flow with 👋</h6>
                        </div>
                         <div class="form-validation-login">
                            <div class="input-form mb-3 label-main">
                                <input type="text" placeholder=" " class="form-control py-3" name="" id="username">
                                  <span class="uni">Username</span>
                              </div>

                               
                              <div class="input-form mb-5 label-main">
                                <input type="password" placeholder=" " class="form-control py-3" name="password" id="password">
                                  <span class="uni">Password</span>
                                   <li class="bx bx-hide show-container-right"></li>
                              </div>

                              <div class="alt-body-main">
                                    <div class="d-flex flex-forgot-pass">
                                        <span class="me-2">Forgot password?</span>
                                        <a href="javascript:void()" class="footer-link">
                                            reset password
                                        </a>
                                    </div>
                                </div>

                              <div class="mb-3">
                                <button  id="auth" class="btn btn-ishc-donate-button w-100 py-3">
                                    Login
                                </button>
                              </div>

                              <div class="alternative-method mb-3 text-center">
                                <div class="alt-body-main">
                                    <div class="d-flex">
                                        <span class="me-2">Dont have an account?</span>
                                        <a href="{{route('AdminSignup')}}" class="footer-link">
                                            Register & get started
                                        </a>
                                    </div>
                                </div>
                              </div>

                         </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

     <!-- Toast with Placements -->
  <div
                class="bs-toast toast toast-placement-ex"
                style="background-color:#fff;color:#122543"
                role="alert"
                aria-live="assertive"
                aria-atomic="true"
                data-delay="2000"
              >
                <div class="toast-header">
                
                </div>
                <div class="toast-body">
                 <small style="font-size:12px; color:#122543" id="error_message"></small></div>
              </div>
              <!-- Toast with Placements -->

              <script>
                var loginurl = "{{route('LoginAuth')}}";
                var csrf = "{{csrf_token()}}";
              </script>
      
    <script src="{{asset('assets/authentication/auth/login.js')}}"></script>
    <script src="{{asset('script_tag.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>

    </body>
</html>