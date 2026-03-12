<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     user-scalable=no, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0">
    <title>Ishf Foundation | About Us</title>
    <link rel="icon" type="images/*" href="{{asset('asset_images/ishc.png')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/media.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/wow.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/ishc_community.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/wow.css')}}"/>
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
        <h1 class="text-dark fw-bold wow fadeIn">Learn more About us</h1>
        <span class="text-white wow fadeIn" data-wow-delay="0.5s">Uniting Hearts and impacting Lives</span>
    </div>

  </section>

  <section class="section-call">
      <div class="section-header"></div>
      <div class="section-body">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="padding-section-image d-lg-block d-none text-align-center">
                    <div class="img-main-fill card p-2 card-rounded wow fadeInDown" data-wow-delay="0.5s">
                    <img src="{{asset('pointers/about_label.png')}}" alt="image" class="img-fluid img-rounded-fix">
                    </div>
                     <div class="img-top-fill card p-2 card-rounded wow fadeInUp" data-wow-delay="0.5s">
                       <img src="{{asset('asset_images/hero_images/charity.png')}}" alt="image" class="img-fluid img-rounded-fix">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="container-xxl padding-top-align">
                    <div class="section-header">
                        
                        <h1 class="fs1 text-white fw-bold w-format-text wow fadeIn" data-wow-delay="0.5s">About ISHF.</h1>
                        <span class="text-white">ISHumanitarian Foundation (ISHF) is a non-profit organization founded in 2022, dedicated to fostering positive change and empowering communities in need. We focus on raising awareness and inspiring involvement to create lasting impact.
                        </span>

                        <h4 class="fw-bold text-white py-4  wow fadeIn" data-wow-delay="0.3s">Join KALA today and explore on our progress</h4>
                        <hr class="my-3">

                        <div class="d-flex">
                          <div class="img-container img-padding-top">
                            <img src="{{asset('pointers/KALA.jpg')}}" alt="avatar_control" class="avatar-control me-3  wow fadeIn" data-wow-delay="0.6s">
                            <a href="{{route('Participate')}}" class="btn btn-ishc-donate-button py-3  wow fadeIn" data-wow-delay="0.5s">Volunteer with us Today</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <h1 class="fs-1 fw-bold w-format-text feature-header-text  wow fadeIn" data-wow-delay="0.5s">Transparency, accountability, and maximum impact for the good you do.</h1>
                            <span class="text-dark">Our mission is to be a catalyst for positive transformation within communities, inspiring and facilitating initiatives that lead to meaningful change. We believe in recognizing and nurturing the inherent potential of individuals, fostering a sense of agency and capability.
                            </span>
                            <div class="py-2">
                                 <span class="text-dark">
                                    Through various programs and initiatives, ISHumanitarian seeks to educate and raise awareness about pressing issues, encouraging informed and proactive participation. We also recognize the importance of partnerships and collaboration, working with other organizations, governments, and stakeholders to maximize impact and reach.
                                </span>
                            </div>
                            
                            <h4 class="fw-bold text-dark py-4  wow fadeIn" data-wow-delay="0.7s">Join us in our mission to create a better world for all. Together, we can make a difference.</h4>
                            <hr class="my-3">
                        </div>
                    </div>
                </div>

            <div class="col-lg-6 col-12">
                <div class=" text-align-center">
                    <div class="img-main-fil card p-2 card-rounded feature-image-color  wow fadeIn" data-wow-delay="0.5s">
                     <img src="{{asset('pointers/about_mission.png')}}" alt="image" class="img-fluid img-rounded-fix">
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>


  <section class="feature-container" id="isioma-blankson">
    
      <div class="feature-overlay"></div>
         <div class="section-body">
            <div class="row align-items-center">
                
            <div class="col-lg-6 col-12">
                <div class=" text-align-center">
                    <div class="img-main-fil card p-2 card-rounded feature-image-color  wow fadeInUp" data-wow-delay="0.3s">
                     <img src="{{asset('pointers/ceo.jpg')}}" alt="image" class=" img-rounded-fix" style="width:100%;height:550px">
                    </div>
                </div>
            </div>
                <div class="col-lg-6 col-12" >
                    <div class="container-xxl">
                        <div class="feature-header">
                             <h4 class="text-uppercase mb-4 ">Our Founder:</h4> 
                            <h1 class="fs-1 fw-bold w-format-text feature-header-text  wow fadeInUp" data-wow-delay="0.5s">Together we can light up the world with hope, stirring up humanity, for through this you would understand the essence of human existence.</h1>
                             <span class="text-dark">Living shouldn't just be a myth but an existence through collision of ideas birthing love and equity in the means of every soul affairs in our society, when we attain the degree of giving we embody the love of true friendship to humanity. 
                             </span>
                            <h4 class="fw-bold text-dark py-4  wow fadeInDown" data-wow-delay="0.5s">Isioma Blankson</h4>
                           <h6 style="color:#247062">Founder/President</h6>
                           <span>IShumanitarian Foundation a foundation for humanitarians</span>
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