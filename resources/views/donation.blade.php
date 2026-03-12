<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     user-scalable=no, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0">
    <title>Ish Foundation | Donation</title>
    <link rel="icon" type="images/*" href="{{asset('asset_images/ishc.png')}}"/>
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


  <section class="donation-start">
             <div class="section-body">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="container-xxl">
                        <div class="feature-header">
                            <!-- <h4 class="text-uppercase mb-4 ">Our promise to You:</h4> -->
                            <h1 class="fs-1 fw-bold w-format-text feature-header-text">Around the world, children, women, and men are facing enormous obstacles. Poverty, disaster, violent conflict, unimaginable trend of disasters occur everyday.</h1>
                            
                            <span class="text-dark">IShumanitarian Foundation have strategized volunteers in different section to drive to reduce this weight upon people by the love you share among to aid this journey. 
                            </span>

                            <h4 class="fw-bold text-dark py-4">Your Gift will surely go where it is needed the most.</h4>
                            <hr class="my-3">
                        </div>
                    </div>
                </div>

            <div class="col-lg-6 col-12">
                <div class=" text-align-cente">
                    <div class="main-form-donate">
                        <div class="donate-body">
                            <div class="donate-header">
                                <h4 class="text-dark">Give down to the community</h4>
                            </div>
                            <div class="form-validation">
                            <div class="input-form mb-3">
                                <input type="radio" value="5000" class="pay-form" name="radio" id="first_call" hidden>
                                 <label for="first_call" class="label-form">
                                 <div class="d-flex label-text-content">
                                     <span>₦5,000</span>
                                </div>

                                  <div class="d-flex label-text-content">
                                    <span>outreach to 12</span>
                                </div>
                                </label>
                            </div>

                            <div class="input-form mb-3">
                                <input type="radio" value="10000" class="pay-form" name="radio" id="second_call" hidden>
                                 <label for="second_call" class="label-form">
                                 <div class="d-flex label-text-content">
                                     <span>₦10,000</span>
                                 </div>

                                  <div class="d-flex label-text-content">
                                    <span>outreach to 20</span>
                                </div>
                                </label>
                            </div>

                            <div class="input-form mb-3">
                                <input type="radio" class="pay-form" value="20000" name="radio" id="third_call" hidden>
                                 <label for="third_call" class="label-form">
                                 <div class="d-flex label-text-content">
                                     <span>₦20,000</span>
                                </div>
                                  <div class="d-flex label-text-content">
                                    <span>outreach to 40</span>
                                </div>
                                </label>
                            </div>
                            <div class="input-form mb-3 m-4">
                                <input type="text" class="pay-form form-control py-3 w-100" name="radio" id="custom_call" placeholder="Enter custom amount">
                                <!-- <label for="custom_call" class="label-form fill-tvt">
                                    <div class="d-flex label-text-content">
                                        <span>Custom Amount</span>
                                    </div>
                                </label> -->
                            </div>

                           <div class="m-3">
                               <a href="javascript:void(0)" id="previewdonate" class="w-100 d-n-length btn btn-ishc-donate-button py-3 length-system">
                                    Donate 
                                </a>

                                <!-- <a href="javascript:void(0)" id="previewdonatemobile" class="w-100 d-n-length btn btn-ishc-donate-button py-3 length-mobile">
                                    Donate mobile
                                </a> -->
                           </div>

                            <div class="donate-footer-call text-center">
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('vectors/lock.png')}}" class="secured-lock-image" alt="">
                                    <span class="secured-text">Your transaction is securely processed by Paystack</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>

  <section class="review-fill text-align-center m-0">
   <div class="row justify-content-center">
    <div class="col-lg-3 col-md-3 col-6 mb-3">
        <div class="review-fill-content">
           <div class="d-flex">
            <h4 class="font-review">32</h4>
                <i class="bx bx-plus font-review"></i>
            </div>
            <h4 class="font-review-small">Reviews from fundraisers</h4>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-6 mb-3">
        <div class="review-fill-content">
           <div class="d-flex">
            <h4 class="font-review">185</h4>
                <i class="bx bx-plus font-review"></i>
            </div>
            <h4 class="font-review-small">Successful events</h4>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-6 mb-3">
        <div class="review-fill-content">
           <div class="d-flex">
             <h4 class="font-review">56</h4>
                <i class="bx bx-plus font-review"></i>
            </div>
            <h4 class="font-review-small">informations delivered</h4>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-6 mb-3">
        <div class="review-fill-content">
           <div class="d-flex">
             <h4 class="font-review">₦12.6M</h4>
                <i class="bx bx-plus font-review"></i>
            </div>
            <h4 class="font-review-small">raised for people</h4>
        </div>
    </div>

   </div>
  </section>


  <section class="feature-container ">
         <div class="section-body">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="container-xxl">
                        <div class="feature-header">
                            <!-- <h4 class="text-uppercase mb-4 ">Our promise to You:</h4> -->
                            <h1 class="fs-1 fw-bold w-format-text feature-header-text">A Global Mission to Meet the Needy at the rightful time and place.</h1>
                            <span class="text-dark">As time counts so our projects increases, we aim not just to give, but to give and aid consistently all over the world, giving the necessary gift and entail this stories back to your doorstep, as we place this beauty of giving hope to the masses we also tell the story of you, who has immersely supported us through this circle of life in caring for the needy 
                            </span>
                            <h4 class="fw-bold text-dark py-4">Join Nixon today and explore on our progress..  👇 </h4>
                            <hr class="my-3">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                <div class=" text-align-center position-damn">
                    <div class="img-main-fil card p-2 card-rounded feature-image-color">
                     <img src="{{asset('pointers/affordable_water.png')}}" alt="image" class="img-fluid img-rounded-fix">
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>

  <section class="pre-conversation">
    <div class="pre-conversation-body">
        <div class="pre-body-content">
             <div class="pre-width1 mb-4">
           <div class="pre-logo-content">
             <img src="{{asset('asset_images/logo_ishc.png')}}" width="80" alt="">
            <span class="pre-view-content">Give directly to worthy causes and get update showing the difference you make.</span>
           </div>
        </div>
            <div class="pre-width2">
              <div class="d-flex">
              <div class="me-5">
                <a href="{{route('Projects')}}" class="btn btn-ishc-donate-button py-3">View Projects</a>
            </div>
            <div class="">
                <a href="{{route('Education')}}" class="btn btn-ishc-donate-button-outline py-3">Educating the youngsters</a>
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
            <a href="{{route('Donation')}}"  class="btn btn-ishc-donate-button py-3">Donate Today</a>
         </div>
     </div>
  </section>

 

 @include('components.navigation.footer')
 @include('components.modal.thankyoudonor')
 @include('components.modal.paymentview')
 @include('components.modal.toast')



  </div>

 

  <script>
    var paymentupdate = "{{route('Paystack')}}";
    var csrf = "{{csrf_token()}}";
  </script>

  <script src="{{asset('assets/authentication/paystack.js')}}"></script>
  <script src="https://js.paystack.co/v1/inline.js"></script>

<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/authentication/paymentview.js')}}"></script>
<script src="{{asset('assets/fund-input-val.js')}}"></script>
<script src="{{asset('assets/ishc.js')}}"></script>

<script src="{{asset('assets/authentication/cookies.js')}}"></script>
<script src="{{asset('assets/authentication/newsletter.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script>
  new WOW().init();
</script>

</body>
</html>