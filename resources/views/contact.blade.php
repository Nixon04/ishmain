<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     user-scalable=no, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0">
    <title>Ishc Community | Contact Ishumanitycommunity today</title>
    <link rel="icon" type="images/*" href="{{asset('asset_images/ishf.png')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/media.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/ishc_community.css')}}"/>
    <script src="{{asset('jquery.js')}}"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

  <div class="main">
  @include('components.navigation.header')

  <section class="about-hero-section">

  </section>

  <section class="how_it_works" 
  style="background-image:url({{asset('asset_images/launchin.png')}});background-size:cover">
    <div class="section-how text-center">
        <h1 class="text-dark fw-bold">Contact Us Today</h1>
        <span>Having questions that you feel is more appropriate passing on directly to us, Glad to say we are 24/7 Available</span>
    </div>

  </section>


  <section class="feature-containe how_it_works">
      <div class="pointer-event-call">
        <img src="{{asset('pointers/1.png')}}" width="100" height="100" alt="">
      </div>
      <div class="feature-overlay"></div>
         <div class="section-body">
            <div class="row align-items-center">
                
            <div class="col-lg-6 col-12">
                <div class=" text-align-center">
                    <div class="img-main-fil card p-2 card-rounded feature-image-color">
                     <img src="{{asset('asset_images/interactical.png')}}" alt="image" class="img-fluid img-rounded-fix">
                    </div>
                </div>
            </div>
                <div class="col-lg-6 col-12">
                    <div class="container-xxl">
                        <div class="feature-header">
                            <div class="container-fill-bvhconfig">
                                <h4 class="f-m-custom">Can't seem to find the available research network with us?</h4>
                                <h6>send us a message, we will get back to you within the next 24 hours interval</h6>
                            </div>
                          <div class="form-validate">
                            <form action="" methd="POST">
                            <div class="label-main">
                                <input type="text" placeholder="" class="form-control py-3" id="cname">
                                <span>name</span>
                            </div>
                            <div class="label-main">
                                <input type="text" placeholder="" class="form-control py-3" id="cemail">
                                <span>Email Address</span>
                            </div>                            
                            <div class="label-main">
                                <input type="text" placeholder="" class="form-control py-3" id="ccontact">
                                <span>Contact</span>
                            </div>                            
                            <div class="label-main">
                                <textarea type="text" placeholder="place your message here" class="form-control py-3 expand-md-damn" id="cmessage"></textarea>
                            </div>

                            <div class="contact-pad-up">
                            <button id="paste" class="btn btn-ishc-donate-button w-100 py-3">Submit</button>
                            </div>
                            
                            
                           </form>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6  col-12 py-4">
                   <div class=" py-5">
                      <div class="ms-feature-set mb-4">
                        <h4>Reach us also on our mail service and contact reach, fast and we are always available anytime anyday anywhere</h4>
                      </div>

                      <div class="ms-ft-container mb-4">
                        <div class="ms-logo-set">
                            <li class="bx bxs-phone ms-set-coin"></li>
                        </div>
                          <div class="ms-letter-header">
                            <h6 class="ms-t">Contact Number</h6>
                            <span><a href="tel:+2348160393580" class="footer-link ms-tel">+2348160393580</a></span>
                        </div>
                      </div>

                      <div class="ms-ft-container mb-4">
                        <div class="ms-logo-set">
                            <li class="bx bxs-envelope ms-set-coin"></li>
                        </div>
                          <div class="ms-letter-header">
                            <h6 class="ms-t">Email Address</h6>
                            <span><a href="mailto:info@ishcommunity.org" class="footer-link ms-tel">info@isiomahfoundation.org</a></span>
                        </div>
                      </div>

                      <div class="ms-ft-container mb-4">
                        <div class="ms-logo-set">
                            <li class="bx bx-globe ms-set-coin"></li>
                        </div>
                          <div class="ms-letter-header">
                            <h6 class="ms-t">Office Address</h6>
                            <span><a href="javascript:void(0)" class="footer-link ms-tel">
                               1 Dimrose street , Biogbolo Yenagoa Bayelsa State
                            </a></span>
                        </div>
                      </div>

                   </div>
                   </div>

                   <div class="col-lg-6  col-12">
                            <div class=" text-align-center">
                                <div class="img-main-fil card p-2 card-rounded feature-image-color">
                                <img src="{{asset('asset_images/vol12.png')}}" alt="image" class="img-fluid img-rounded-fix">
                                </div>
                            </div>
                   </div>

                </div>
        </div>
      </div>
  </section>


  <section class="global-support">

     <div class="global-container">
         <div class="global-body">
            <h1 class="text-dark fw-bold">Join us in building more equitable world</h1>
            <a href="{{route('Donation')}}" class="btn btn-ishc-donate-button py-3">Donate Today</a>
         </div>
     </div>
  </section>

 @include('components.navigation.footer')
 @include('components.modal.toast')

 <script>
    var email_link = "{{route('ContactMail')}}";
    var csrf = "{{csrf_token()}}";
 </script>



  </div>
  <script src="{{asset('assets/authentication/contact.js')}}"></script>
<script src="{{asset('assets/authentication/cookies.js')}}"></script>
<script src="{{asset('assets/authentication/newsletter.js')}}"></script>
<script src="{{asset('assets/ishc.js')}}"></script>
<script src="{{asset('assets/filter.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
<script>
  new WOW().init();
</script>
</body>
</html>