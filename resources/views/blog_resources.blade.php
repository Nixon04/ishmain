<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     user-scalable=no, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0">
    <title>Ishc Community | Blog_resources</title>
    <link rel="icon" type="images/*" href="{{asset('asset_images/ishc.png')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/media.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/css/ishc_community.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/wow.css')}}"/>
    <script src="{{asset('jquery.js')}}"></script>

</head>
<body>

  <div class="main">
  @include('components.navigation.header')

  <section class="about-hero-section">

  </section>

  <section class="how_it_works">
    <div class="section-how text-center">
        <h1 class="text-dark fw-bold">Blog Resources</h1>
        <span class="text-white">Believe, cherish and justify our works</span>
    </div>
  </section>

  <section>
  @if($blog_list)
                <div class="blog-flex-right">

                <div class="form-action-label">
                            <select name="" id="categoryFilter" class="form-col">
                                <option value=""></option>
                                @foreach($blog_cat as $blogcats){
                                    <option value="{{$blogcats->title}}">{{$blogcats->title}}</option>
                                }
                                @endforeach
                            </select>
                            <h6 class="filterjoin">filter</h6>
                          </div>
                   
                    <div class="content-header-flex">
                         
                        <div class="row">
                          @foreach($blog_list as $entry)
                           <div class="col-lg-4 col-md-6 col-12 mb-3 blog-entry" data-category="{{$entry->category}}">
                                  <div class="card new-feed-container blog-card-color">
                                      <div class="img-news-feed">
                                      <div class="blog-category-layer">
                                          <div class="blog-category">
                                            <div class="blog-box">
                                              <span>{{substr($entry->category,0,1)}}</span>
                                            </div>
                                          </div>
                                      </div>
                                        <img src="{{$entry->image}}" class="new-feed-image wow fadeInUp" alt="">
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
                         
                        </div>
                    </div>
                    
                </div>
                @endif 
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
  <script>
    var newsletter = "{{route('Newsletter')}}";
    var csrf = "{{csrf_token()}}";
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