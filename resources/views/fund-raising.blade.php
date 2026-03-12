<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     user-scalable=no, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0">
    <title>Ishc Community | FundRaising Campaign</title>
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

  <section class="about-hero-section">

  </section>

  <section class="how_it_works">
    <div class="section-how text-center">
        <h1 class="text-dark fw-bold">FundRaising</h1>

    </div>

  </section>

  <section class="feature-container ">
         <div class="section-body">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="container-xxl">
                        <div class="feature-header">
                            <!-- <h4 class="text-uppercase mb-4 ">Our promise to You:</h4> -->
                            <h1 class="fs-1 fw-bold w-format-text feature-header-text">Raising Funds For A New World For Younger Generation To Stand Through</h1>
                            <span class="text-dark">Do you believe that a better world is possible, but don’t see how you can help?

                                What if there was a fun way you could use your time and talents to take action, activate your community, and make a big difference in the lives of families suffering around the world?
                                
                                Become a fundraiser today and choose to show up, speak up, and stand up for someone you may never meet. Get started below. 
                            </span>

                            <h4 class="fw-bold text-dark py-4">Be A Blessing to others Today</h4>
                            <hr class="my-3">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                <div class=" text-align-center position-damn">
                    <div class="img-main-fil card p-2 card-rounded feature-image-color">
                     <img src="{{asset('asset_images/hero_images/reaching_out.png')}}" alt="image" class="img-fluid img-rounded-fix">
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>

   <!--<section class="fund-category" style="padding:20px!important">-->
   <!-- <div class="step-header py-2">-->
   <!--     <h4 class="text-center fw-bold">FundRaising is easier now than it has ever been with the following steps</h4>-->
   <!-- </div>-->

   <!-- <div class="step-container step-section-padding">-->
   <!--     <div class="row">-->
   <!--         <div class="col-lg-4 col-md-6 col-12 mb-3">-->
   <!--             <div class="card step-card">-->
   <!--                 <div class="step-count">-->
   <!--                     <span>1</span>-->
   <!--                 </div>-->
   <!--                 <div class="step-card-header">-->
   <!--                     <h4>Get Started</h4>-->
   <!--                     <div class="step-card-body">-->
   <!--                         <span>Create a page and personalize it with a photo, goals -->
   <!--                             and details that will get everyone ecstatic about partnering with-->
   <!--                             you to support Explore Africa Foundation.-->
   <!--                         </span>-->
   <!--                     </div>-->
   <!--                 </div>-->
   <!--             </div>-->
   <!--         </div>-->
   <!--         <div class="col-lg-4 col-md-6 col-12 mb-3">-->
   <!--         <div class="card step-card">-->
   <!--                 <div class="step-count">-->
   <!--                     <span>2</span>-->
   <!--                 </div>-->
   <!--                 <div class="step-card-header">-->
   <!--                     <h4>Make it viral</h4>-->
   <!--                     <div class="step-card-body">-->
   <!--                         <span>In today’s world, it only takes a few minutes to spread words -->
   <!--                             across the globe. Once your page is live, share it and have your -->
   <!--                             family and friends share it.-->
   <!--                             Encourage people to get involved. -->
   <!--                         </span>-->
   <!--                     </div>-->
   <!--                 </div>-->
   <!--             </div>-->
   <!--         </div>-->
          
   <!--         <div class="col-lg-4 col-md-6 col-12 mb-3">-->
   <!--               <div class="card step-card">-->
   <!--                 <div class="step-count">-->
   <!--                     <span>3</span>-->
   <!--                 </div>-->
   <!--                 <div class="step-card-header">-->
   <!--                     <h4>Thank Your Donors</h4>-->
   <!--                     <div class="step-card-body">-->
   <!--                         <span>Every fund is important, and everyone who made it available-->
   <!--                              did so out of love and support. Thank them for being a beacon -->
   <!--                              of hope and change,-->
   <!--                              and for supporting you.-->
   <!--                         </span>-->
   <!--                     </div>-->
   <!--                 </div>-->
   <!--             </div>-->
   <!--         </div>-->
   <!--     </div>-->
   <!-- </div>-->
   <!-- </section>-->


 <section class="fund-category">
     <div class="fund-category-header">
       <h4 class="fund-header-text">How FundRaising Works</h4>
     </div>
     <div class="fund-category-body">
        <div class="row">
          


           
            <div class="col-lg-4 col-md-4 col-12 mb-3">
            <div class="fund-car" style="background:#fff!important; border: 1px solid #eee">
                    <input type="radio" name="radio" id="fund4" class="fund-input" hidden>
                    <label for="fund4" class="fundcard">
                        <div class="fund-content">
                           <img src="{{asset('pointers/fund_l.png')}}" width="150" alt="">
                        </div>
                    </label>
                </div>
                 <div class="text-center py-2">
                    <span>Fund A Campaign</span>
                 </div>
            </div>

            
            <div class="col-lg-4 col-md-4 col-12 mb-3">
            <div class="fund-card">
                    <input type="radio" name="radio" id="fund5" class="fund-input" hidden>
                    <label for="fund5" class="fundcard">
                        <div class="fund-content">
                           <img src="{{asset('pointers/team_l.png')}}" width="150" alt="">
                        </div>
                    </label>
                </div>
                 <div class="text-center py-2">
                    <span>We Do Our Part</span>
                 </div>
            </div>

            
            <div class="col-lg-4 col-md-4 col-12 mb-3">
            <div class="fund-card">
                    <input type="radio" name="radio" id="fund6" class="fund-input" hidden>
                    <label for="fund6" class="fundcard">
                        <div class="fund-content">
                           <img src="{{asset('pointers/notif_l.png')}}" width="150" alt="">
                        </div>
                    </label>
                </div>
                 <div class="text-center py-2">
                    <span>Get Frequent Updates</span>
                 </div>
            </div>
        </div>
     </div>
     
 </section>
 
  <section class="pre-conversation bg-white">
    <div class="pre-conversation-body">
        <div class="pre-body-content">
             <div class="pre-width1 mb-4">
           <div class="pre-logo-content">
             <img src="{{asset('asset_images/logo_ishc.png')}}" width="80" alt="">
            <span class="pre-view-content">To set up your fundraiser. hit on the button to get started</span>
           </div>
        </div>
            <div class="pre-width2">
              <div class="d-flex">
              <div class="me-5">
                <a href="{{route('Contact')}}" class="btn btn-ishc-donate-button py-3">Reach out to us Today</a>
            </div>
          
           </div>
      </div>
        </div>
    </div>
  </section>





 @include('components.navigation.footer')



  </div>

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