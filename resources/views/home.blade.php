<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     user-scalable=no, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0">
    <title>Ish Foundation</title>
    <link rel="icon" type="images/*" href="{{asset('asset_images/ishc.png')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/media.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/wow.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/ishc_community.css')}}"/>
    <script src="{{asset('jquery.js')}}"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

  <div class="main">
  @include('components.navigation.header')

  <section class="ishc-hero-control-container mb-2">
    <div class="hero-header"></div>
    <div class="hero-body">
    <div class="flex-container">
        <div class="flex-body-left">

        <div class="image-reflect-bottom wow fadeIn" data-wow-delay="1s">
            <img src="{{asset('asset_images/love.png')}}" width="200" alt="">
        </div>
         <div class="left-container">
              <div class="left-body">
                <h1 class="text-dark fw-bold mb-4 start-kit-center wow fadeIn" data-wow-delay="0.5s">Hope begins witih a change</h1>
                <span class="fs-6 text-dark mb-5 mb-3 wow fadeIn" data-offset="0.3s">
                   Join us in making a difference! ISHumanitarian Foundation (ISHF) is a platform dedicated to bringing positive change to communities in need. Through our innovative projects and programs, we empower individuals and organizations to create lasting impact. Explore our website to learn more about our mission and how you can get involved.
               </span>
              </div>

              <div class="d-flex py-3 wow fadeInUp" >
              <a href="#getstarted" class="btn btn-ishc-donate-button btn-min-large py-3">Get Started Today</a>
              </div>
            
               
              <div class="wow fadeInUp" data-wow-delay="0.5s">
                <img src="{{asset('asset_images/mother_child.png')}}" class="intro" alt="Logo">
              </div>

         </div>
        </div>
        <!-- end part for flex-left -->
        <div class="flex-body-right d-lg-block d-none">
            <div class="container-xxl flex-flex-contain">
            <div class="flex-right-context">
                <h4 class="text-white fw-bold mb-3 wow fadeIn">Sign up for FundToCare</h4>
                <span class="text-white">Encounter true love where
                    it belongs...
                </span>
                <div class="context-padding">
                    <a href="javascript:void(0)" class="btn btn-ishc-donate-button">
                      FundToCare
                    </a>
                </div>
              </div>
            
            <div class="overlay-flex"></div>
             
            </div>
        </div>
    </div>
    </div>
  </section>


  <section class="how_it_works state-bend" id="getstarted">
    <div class="section-how text-center">
        <h1 class="text-dark fw-bold wow fadeInUp" data-wow-delay="0.5">How Ishumanitarianfoundation works</h1>
        <span class="wow fadeIn">Uniting Hearts and impacting Lives</span>
    </div>

  </section>

  <section class="section-call">
      <div class="section-header"></div>
      <div class="section-body">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="padding-section-image d-lg-block d-none text-align-center">
                    <div class="img-main-fill card p-2 card-rounded wow fadeInDown">
                    <img src="{{asset('asset_images/hero_images/starring.png')}}" alt="image" class="img-fluid img-rounded-fix">
                    </div>
                     <div class="img-top-fill card p-2 card-rounded wow fadeInUp">
                       <img src="{{asset('asset_images/hero_images/charity.png')}}" alt="image" class="img-fluid img-rounded-fix">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="container-xxl padding-top-align">
                    <div class="section-header">
                        <h4 class="text-white text-uppercase mb-4 wow fadeIn" data-wow-delay="0.5">Our promise to You:</h4>
                        <h1 class="fs-1 text-white fw-bold w-format-text wow fadeIn" data-wow-delay="0.7">Empowering Communities, Changing Lives</h1>
                        <span class="text-white wow fadeInUp">
                               At ISHF, we believe in the power of community. By working together, we can create a better future for all. Our projects focus on education, healthcare, and community development, aiming to uplift those who need it most. Join us in our mission to make a difference, one community at a time.
                        </span>

                        <h4 class="fw-bold text-white py-4">Join John today and explore on our progress</h4>
                        <hr class="my-3">

                        <div class="d-flex">
                          <div class="img-container img-padding-top wow fadeInRight" data-wow-delay="0.3s">
                            <img src="{{asset('pointers/project_sec.jpg')}}" alt="avatar_control" class="avatar-control me-3">
                            <a href="{{route('Projects')}}" class="btn btn-ishc-donate-button py-3">View ongoing projects</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>

  <section class="feature-containe">
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
                            <h1 class="fs-1 fw-bold w-format-text feature-header-text wow fadeIn" data-wow-delay="0.5">	Your Partner in Philanthropy.</h1>
                            <span class="text-dark wow fadeInUp" data-wow-delay="0.6s">   ISHF is your partner in philanthropy. Whether you're an individual donor, a corporate sponsor, or a volunteer, we welcome you to join us in making a difference. Together, we can create positive change and build a brighter future for everyone. 
                            </span>

                            <h4 class="fw-bold text-dark py-2 wow fadeInUp" data-wow-delay="0.5s">	Making Giving Easy and Impactful</h4>
                            
                            <span class="text-dark wow fadeInUp" data-wow-delay="0.6s">  Giving back has never been easier. With ISHF, you can support causes you care about with just a few clicks. Our platform connects donors with projects and individuals in need, ensuring that your contributions make a direct and meaningful impact.
                            </span>
                            
                              <h4 class="fw-bold text-dark py-2 wow fadeInUp" data-wow-delay="0.5s">Join Our Community of Changemakers</h4>
                            
                            <span class="text-dark wow fadeInUp mb-3" data-wow-delay="0.6s"> Join a community that is making a difference. ISHF brings together individuals, organizations, and communities to create positive change. Whether you want to donate, volunteer, or spread the word, there's a place for you in our community of changemakers
                            </span><br>
                            
                              <div class="py-2">
                                    <a href="{{route('Participate')}}" class="btn btn-ishc-donate-button py-3">Volunteer with us Today</a>
                              </div>

                            <hr class="my-3">
                        </div>
                    </div>
                </div>

            <div class="col-lg-6 col-12">
                <div class=" text-align-center">
                    <div class="img-main-fil card p-2 card-rounded feature-image-color wow fadeInUp" data-wow-delay="0.7s">
                     <img src="{{asset('asset_images/hero_images/starring.png')}}" alt="image" class="img-fluid img-rounded-fix">
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>


<section class="blog-related-information">
 <div class="blog-header">  
    </div>
      <div class="row">
        <div class="col-12 col-lg-12 col-md-12">
            
             <div class="blog-flex-container">
             
             @if($main_view)
              @foreach($main_view as $mainentry)
                <div class="blog-flex-left" 
                 style="background-image:url('{{$image_state}}');
                 background-repeat:no-repeat;background-size:cover;
                 background-position:center">
                 <div class="overlay-flex-blog"></div>

                 <div class="blog-category-layer">
                    <div class="blog-category">
                       <div class="blog-box">
                         <span>{{substr($mainentry->category,0,1)}}</span>
                       </div>
                    </div>
                 </div>
                 
                <div class="blog-outline">
                 <div class="blog-left-body">
                    <a href="{{url('/blogs/'.$mainentry->title)}}">
                    <h1 class="text-white fw-bold">{{$mainentry->title}}</h1>
                    </a>
                  </div>
                    <div class="blog-author-layout">
                        <span class="text-mute fw-bold">By</span>
                        <span class="blog-author">{{$mainentry->user_id}}</span>
                        <span >{{$mainentry->date}}</span>
                    </div>

                    <div class="blog-contents">
                        <span class="text-white ">
                        {{substr($mainentry->sub_content,0,150).'...'}}
                        </span>
                    </div>
                 </div>

                </div>

                @endforeach
                @else
                 <span>No Info yet</span>
                @endif

                @if($blog_list)
                <div class="blog-flex-right">
                   
                    <div class="content-header-flex">
                        <div class="row">
                          @foreach($blog_list as $entry)
                           <div class="col-lg-6 col-md-6 col-12 mb-3">
                                  <div class="card new-feed-container blog-card-color">
                                      <div class="img-news-feed">
                                      <div class="blog-category-layer">
                                          <div class="blog-category">
                                            <div class="blog-box">
                                              <span>{{substr($entry->category,0,1)}}</span>
                                            </div>
                                          </div>
                                      </div>

                                  
                                        <img src="{{ $entry->image }}" class="new-feed-image wow fadeInUp" alt="">
                                      </div>
                                      <div class="new-feed-body">
                                      <div class="blog-left-body">
                                              <a href="{{url('/blogs/'.$entry->title)}}">
                                            <h4 class="px-2 text-dark fw-bold text-white wow fadeIn">{{$entry->title}}</h4>
                                            </a>
                                          </div>
                                        <div class="news-author-layout text-white wow fadeIn" data-wow-delay="0.3s">
                                            <span class="text-dark fw-bold">By</span>
                                            <span class="blog-autho text-dark">{{$entry->user_id}}</span>
                                            <span class="text-dark">{{$entry->date}}</span>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-12 mb-3 text-center">
                              <div class="btn-donate btn btn-override"><a href="{{route('BlogResources')}}" class="footer-link">
                                View more</a></div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                @endif 
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
            <h1 class="text-dark fw-bold wow fadeIn" data-wow-delay="0.4s">Join us in building more equitable world</h1>
            <a href="javascript:void()" class="btn btn-ishc-donate-button py-3 wow fadeInUp" data-wow-delay="0.5s">Donate Today</a>
         </div>
     </div>
  </section>


  <section class="pre-conversation">
    <div class="pre-conversation-body">
        <div class="pre-body-content">
             <div class="pre-width1 mb-4">
           <div class="pre-logo-content">
             <img src="{{asset('asset_images/logo_ishc.png')}}" width="80" alt="">
            <span class="pre-view-content">Give directly to worthy causes and get updated showing the difference you make.</span>
           </div>
        </div>
            <div class="pre-width2">
              <div class="d-flex">
              <div class="me-5">
                <a href="{{route('Projects')}}" class="btn btn-ishc-donate-button py-3">View Projects</a>
            </div>
            <div class="">
                <a href="{{route('About')}}" class="btn btn-ishc-donate-button-outline py-3">About us</a>
            </div>
           </div>
      </div>
        </div>
    </div>
  </section>


@include('components.modal.cookiealerts')




 @include('components.navigation.footer')





  </div>

  <script>
    var newsletter = "{{route('Newsletter')}}";
    var csrf = "{{csrf_token()}}";
  </script>

<!-- <script>
    var imageurl = "{{asset('asset_images/')}}";
</script>

<script src="{{asset('assets/components/image_slide.js')}}"></script> -->
<script src="{{asset('assets/authentication/cookies.js')}}"></script>
<script src="{{asset('assets/authentication/newsletter.js')}}"></script>
<script src="{{asset('assets/ishc.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>

<script>
  new WOW().init();
</script>
</body>
</html>