<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
    user-scalable=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <title>ishumanity | Admin Signup</title>
  
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
                            <span class="me-3">Already a Member?</span>
                             <a href="{{route('AdminLogin')}}" class="footer-link">
                               Login
                            </a>
                        </div>
                    </div>
                    <div class="login-body-container">
                        <div class="welcome-greetings-container">
                            <h4 class="welcome-text">Register and be bonified🤗</h4>
                              <h6>Explore on a well documented dashboard, easy to flow with 👋</h6>
                        </div>
                         <div class="form-validation-login">

                            <div class="input-form mb-3 label-main select-main-bx">
                                 <select name="" id="role" class="form-select select-call py-3">
                                    <option value="admin">Admin</option>
                                    <option value="volunteer">Volunteer</option>
                                 </select>
                                 <span>Role</span>
                              </div>

                            <div class="input-form mb-3 label-main">
                                <input type="text" placeholder=" " class="form-control py-3" name="" id="fullname">
                                  <span class="uni">Fullname</span>
                              </div>
                              <span id='error'></span>

                              <div class="input-form mb-3 label-main">
                                <input type="text" placeholder=" " class="form-control py-3" name="" id="username">
                                  <span class="uni">Username</span>
                              </div>

                              
                              <div class="input-form mb-3 label-main">
                                <input type="text" placeholder=" " class="form-control py-3" name="" id="email">
                                  <span class="uni">Email Address</span>
                              </div>


                              <div class="input-form mb-3 label-main">
                                <input type="number" placeholder=" " class="form-control py-3" name="" id="contact">
                                  <span class="uni">Contact</span>
                              </div>

                               
                        
                                <div class="input-form mb-1 label-main">
                                <input type="password" placeholder=" " class="form-control py-3" name="" id="password">
                                  <span class="uni">Password</span>
                                   <li class="bx bx-hide show-container-right"></li>
                              </div>
                              <div class="mb-y">
                                <span id="errorpass" class="mb-3 m-erpass"></span>
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
                                <button id="auth" class="btn btn-ishc-donate-button w-100 py-3">
                                    Login 
                                 </button>
                              </div>

                              <div class="alternative-method mb-3 text-center">
                                <div class="alt-body-main">
                                    <div class="d-flex">
                                        <span class="me-2">Already a Member?</span>
                                         <a href="{{route('AdminLogin')}}" class="footer-link">
                                            Login
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

    @include('components.modal.toast')

         <script>
            var loginurl = "{{route('LoginPost')}}";
            var csrf = "{{csrf_token()}}";
         </script>

      
         <script src="{{asset('assets/authentication/auth/signup.js')}}"></script>
         <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
        <script src="{{asset('script_tag.js')}}"></script>
    </body>
</html>