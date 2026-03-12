<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     user-scalable=no, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0">
    <title>Ish Foundation | Education</title>
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

  <section class="how_it_works educational-purpose">
    <div class="overlay-fix"></div>
    <div class="section-how text-center">
        <h1 class="text-white fw-bold">Educational materials and reports</h1>
        <span class="text-white">Uniting Hearts and impacting Lives</span>
    </div>

  </section>


  <section class="feature-container">
      <div class="pointer-event-call">
        <img src="{{asset('pointers/1.png')}}" width="100" height="100" alt="">
      </div>
      <div class="feature-overlay"></div>
         <div class="section-body">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="container-xxl">
                        <div class="feature-header">
                            <!-- <h4 class="text-uppercase mb-4 ">Our promise to You:</h4> -->
                            <h1 class="fs-1 fw-bold w-format-text feature-header-text">Children are our future, we must guide them at any cause necessary, whenever, however</h1>
                            <span class="text-dark">As a humanitarian Foundation, we are dedicated to supporting the well-being and education of children, ensuring they grow up to be positive contributors to society. Through careful analysis of our statistics, we have identified various challenges that hinder their access to quality education in both government and private schools. These challenges range from issues such as lack of school infrastructure to inadequate educational resources.
                                
                                To address these challenges, we have outlined a comprehensive plan that focuses on improving access to schools in local communities, enhancing the quality of education provided, and addressing the specific educational needs of children. By tackling these issues systematically, we aim to make a meaningful impact on the lives of children and empower them to reach their full potential.
                                
                                We believe that every child deserves the opportunity to receive a quality education and realize their dreams. That's why we're here to lend a helping hand and invite you to join us in our efforts. Whether it's volunteering your time, making a donation, or simply spreading awareness, together, we can make a difference in the lives of these children and build a brighter future for generations to come
                            </span>

                            <h4 class="fw-bold text-dark py-4">Journey along with us through the phase we are embarking on.</h4>
                            <hr class="my-3">
                        </div>
                    </div>
                </div>

            <div class="col-lg-6 col-12">
                <div class=" text-align-center">
                    <div class="img-main-fil card p-2 card-rounded feature-image-color">
                     <img src="{{asset('asset_images/love.png')}}" alt="image" class="img-fluid img-rounded-fix">
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>

  



  <section class="feature-container education-feature-set">
      <div class="feature-overlay"></div>
         <div class="section-body">
            <div class="row align-items-center">
                
            <div class="col-lg-6 col-12">
                <div class=" text-align-center">
                    <div class="img-main-fil card p-2 card-rounded">
                     <img src="{{asset('asset_images/three_children.png')}}" alt="image" class="img-fluid img-rounded-fix">
                    </div>
                </div>
            </div>
                <div class="col-lg-6 col-12">
                    <div class="container-xxl">
                        <div class="feature-header">
                            <!-- <h4 class="text-uppercase mb-4 ">Our promise to You:</h4> -->
                            <h1 class="fs-1 fw-bold w-format-text feature-header-text">Our core objective is to ensure equitable access to quality education, healthcare, and clean water, fostering community development for every individual, irrespective of background.</h1>
                            <div class="mb-2">
                              <span class="text-dark">
                                  We aim to increase access to education, particularly vulnerable populations
                              </span>
                            </div>
                            
                             <div class="mb-2">
                              <span class="text-dark">
                                 We advocated for the rights of children, ensuring that they receive quality education.
                              </span>
                            </div>
                            
                             <div class="mb-2">
                              <span class="text-dark">
                                 We aim to influence governments in different sector policies to prioritize education and allocate more resources to the sector
                              </span>
                            </div>
                            
                             <div class="mb-2">
                              <span class="text-dark">
                               Also we facilitate partnerships between stakeholders, fostering collaboration for the advancement of education.
                              </span>
                            </div>
                            
                             
                             <div class="mb-2">
                              <span class="text-dark">
                              We also give scholarship to those who are in need to further by identifying talents and deserving students aiding them throughout on their career pursuit.
                              </span>
                            </div>
                            
                            

                            <h4 class="fw-bold text-dark py-4">Join Clinton today and explore on our progress</h4>
                            <hr class="my-3">
                        </div>
                    </div>
                </div>
        </div>
      </div>
  </section>


  <section class="global-support">
  <div class="pointer-event-call">
        <img src="{{asset('pointers/1.png')}}" width="100" height="100" alt="">
      </div>
     <div class="global-container">
         <div class="global-body">
            <h1 class="text-dark fw-bold">Join us in building more equitable world</h1>
            <a href="{{route('Donation')}}" class="btn btn-ishc-donate-button py-3">Donate Today</a>
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