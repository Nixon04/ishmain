<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     user-scalable=no, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0">
    <title>Ishc Community | {{$title}}</title>
    <link rel="icon" type="images/*" href="{{asset('asset_images/ishc.png')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/media.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
        <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/ishc_community.css')}}"/>
    <script src="{{asset('jquery.js')}}"></script>

</head>
<body>

  <div class="main">
  @include('components.navigation.header')

  <section class="blog-hero" style="background-image:url('{{$image_relate}}');
  background-size:cover; background-repeat:no-repeat;">
    <div class="overlay-flex-view"></div>
      <div class="blog-header-main-cause">
        <div class="blog-header-body">
          <div class="d-flex">
            <a href="{{asset('/')}}" class="title-link">
             <span>home</span>
            </a>
            <span>
                <li class="bx bx-chevron-right" style="font-size:14px!important;padding-top:14px!important">
                </li>
            </span>
            <span>{{$title}}</span>
        </div>
        <div class="blog-highlight-container">
            <div class="blog-highlight">
                <h6 class="m-0 text-white text-uppercase">{{substr($category, 0,1)}}</h6>
            </div>
            <div class="d-flex blog-highlight-category-top m-1">
                <h6 class="m-0 text-white text-uppercase">{{$category}}</h6>
            </div>
        </div>
    </div>
  </div>
    <div class="blog-body m-0">
        <div class="blog-body-main m-2">
            <h1 class="blog-control-letter-header text-wrap fw-bold text-white">{{$title}}</h1>
            <div class="d-flex">
                <span class="blog-light me-4 text-uppercase">{{$date}}</span>
                <span class="blog-light text-uppercase">{{$minutes}}</span>
            </div>
        </div>
    </div>
  </section>

 <section class="blog-full-content-container">
    <div class="blog-div-contain-box">
    <div class="row">
        <div class="col-lg-8 col-md-12 col-12 ">
          <div class="context-view-lne frame-dispal">
              <div class="context-view-lane">
                      <div class="bl-column py-2">
                            <div class="bl-contents mb-4">
                                <span class="text-dark">By</span>
                                <span class="text-dark">{{$user_id}}</span>
                                <span class="text-dark">Published, {{$date}}</span>
                            </div>
                            
                            <div class="mb-3">
                                  <h6 class="text-dark mb-3">
                                {{substr($sub_content,0,150).'...'}}    
                            </h6>
                            </div>
                            
                                <div class="bl-social" style="gap:30px!important;margin-top:-4px">
                                <div class="bl-social-tag">
                                       <a href="https://www.facebook.com/ishumanitariancommunity?mibextid=ZbWKwL" class="footer-link">
                                           <div class="social-lis">
                                            <li class="bx bxl-facebook"></li>
                                           </div>
                                       </a>
                                       
                                    </div>
                                    <div class="bl-social-tag">
                                            <a href="https://www.instagram.com/ishcommunity?igsh=MWZvY29jMWQzY3Qxeg==" class="footer-link">
                                           <div class="social-lis">
                                            <li class="bx bxl-instagram"></li>
                                           </div>
                                       </a>
                                       
                                    </div>

                                    <div class="bl-social-tag">
                                          <a href="https://x.com/ishcommunity?t=14Pl6Fe98yAUXAJSiECcHQ&s=09" class="footer-link">
                                           <div class="social-lis">
                                            <li class="fa-brands fa-x-twitter"></li>
                                           </div>
                                       </a>
                                </div>
                                </div>
                     </div>
              </div>
          </div>
          
          
            <div class="blog-post">
      
             {!!$content!!}
           
               
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="bl card-font">
                 <div class="b-container card-font-container">
                 
                        <div class="row mb-2">
                         <div class="col-lg-12 col-md-12 col-12">
                           <div class="highlight-blocknote">
                            <h6 class="bl-hi-text">
                                {{substr($sub_content,0,150).'...'}}    
                            </h6>
                          </div>
                        </div>
                      </div>
                    <div class="d-flex bl-content-relative py-3 px-2">
                          <!-- <div class="bl-image-container me-2">
                            <img src="{{asset('asset_images/ishc.png')}}" class="bl-image-fluid" alt="">
                        </div> -->
                        <div class="bl-column py-2">
                            <div class="bl-contents mb-4">
                                <span class="text-dark">By</span>
                                <span class="text-dark">{{$user_id}}</span>
                                <span class="text-dark">Published, {{$date}}</span>
                            </div>
                            <div class="bl-social" style="gap:30px!important;margin-top:-4px">
                                <div class="bl-social-tag">
                                       <a href="https://www.facebook.com/ishumanitariancommunity?mibextid=ZbWKwL" class="footer-link">
                                           <div class="social-lis">
                                            <li class="bx bxl-facebook"></li>
                                           </div>
                                       </a>
                                       
                                    </div>
                                    <div class="bl-social-tag">
                                            <a href="https://www.instagram.com/ishcommunity?igsh=MWZvY29jMWQzY3Qxeg==" class="footer-link">
                                           <div class="social-lis">
                                            <li class="bx bxl-instagram"></li>
                                           </div>
                                       </a>
                                       
                                    </div>

                                    <div class="bl-social-tag">
                                          <a href="https://x.com/ishcommunity?t=14Pl6Fe98yAUXAJSiECcHQ&s=09" class="footer-link">
                                           <div class="social-lis">
                                            <li class="fa-brands fa-x-twitter"></li>
                                           </div>
                                       </a>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>

              
                    <h4 class="text-white rel-text ">Related</h4>
              

                 <div class="p-1 card-font">
                           <div class="card-font-container">
                            @if(count($blog_related)>0)
                            @foreach($blog_related as $entry)
                            <div class="card-content-fluid mb-2">
                                <div class="card-font-column">
                                     <a href="{{url('/blogs/'.$entry->title)}}" class="footer-link">
                                     <h4 class="c-f-large">{{$entry->title}}
                                    </a>
                                    <h6 class="c-f-small">{{$entry->date}}</h6>
                                </div>

                                 <div class="card-image-fluid-link">
                                   <div class="overlay-card-fl">
                                     <div class="card-font-overlay">
                                        <li class="bx bx-chevron-right f-d-p"></li>
                                      </div>
                                   </div>
                                       <a href="javascript:void(0)">
                                       <img src="{{asset('clientArea/'.$entry->image)}}" class="card-image-fluid" alt="">
                                     </a>
                               </div>
                            </div>
                            @endforeach
                            @endif

                           </div>
                        </div>


            </div>
        </div>
    </div>
   </div>
 </section>
 
 
 <section class="related">
        <div class="col-lg-12">
            <div class="card-frm-heading">
                <h4>Related Post</h4>
            </div>
            <div class="card ">
                
                            @if(count($blog_related)>0)
                            @foreach($blog_related as $entry)
                            <div class="card-content-fluid mb-2 card-related-pm">
                                <div class="card-font-column">
                                     <a href="{{url('/blogs/'.$entry->title)}}" class="footer-link">
                                     <h4 class="c-f-large">{{$entry->title}}
                                    </a>
                                    <h6 class="c-f-small">{{$entry->date}}</h6>
                                </div>

                                 <div class="card-image-fluid-link">
                                   <div class="overlay-card-fl">
                                     <div class="card-font-overlay">
                                        <li class="bx bx-chevron-right f-d-p"></li>
                                      </div>
                                   </div>
                                       <a href="javascript:void(0)">
                                       <img src="{{asset('clientArea/'.$entry->image)}}" class="card-image-fluid" alt="">
                                     </a>
                               </div>
                            </div>
                            @endforeach
                            @endif
                
            </div>
        </div>
 </section>

 @include('components.navigation.footer')



  </div>


  <script>
document.addEventListener('DOMContentLoaded', function() {
    var rightColumnContainer = document.querySelector('.bl');
    var highlight = document.querySelector('.highlight-blocknote');
    var cardfont = document.querySelector('.card-font');
    var correct = document.querySelector('.row');
    var scrollHeight = 600; // Adjust this value to your desired scroll height

    window.addEventListener('scroll', function() {
        if (window.pageYOffset >= scrollHeight) {
            highlight.classList.add('block-hover');
            rightColumnContainer.classList.add('fixed');
            cardfont.classList.add('fixed-set');
            correct.classList.add('fixed-set');
        } else {
            highlight.classList.remove('block-hover');
            correct.classList.remove('fixed-set');
            cardfont.classList.remove('fixed-set');
            rightColumnContainer.classList.remove('fixed');
        }
    });
});
  </script>

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