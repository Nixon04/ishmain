<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Ishc | Blog</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="images/*" href="{{asset('asset_images/ishc.png')}}"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/dashboardmedia.css')}}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />

    <script src="{{asset('jquery.js')}}"></script>

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

       

      @include('components.admin_navigation.aside')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page wrapper-contain-wrap">
          <!-- Navbar -->

        @include('components.admin_navigation/admin_nav')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper ">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

               <div class="post-dropdown">
                  <div class="post-box me-3">
                    <a href="{{route('EventsAndPlanning')}}" class="">
                        <li class="bx bx-category-alt"></li>
                    </a>
                  </div>

                  <div class="post-box">
                    <a href="javascript:void(0)" class="btn-show-category">
                        <li class="bx bx-file"></li>
                    </a>
                  </div>

               </div>

              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="card card-body-full">
                     <div class="card-fill-sub-header mb-0">
                        <h4 class="" id="category_header">Category header</h4>
                       <h6 class="" id="title_header">Header</h6>
                     </div>
                     
                     <div class="input-action-call d-none mb-1">
                        <input type="text" id="categoryid">
                        <input type="text" id="titleid">
                        <input type="text" id="content_header">
                        <input type="text" id="minutes_header">
                     </div>

                     <div class="card-body card-body-full mb-4">
                      <div id="full-editor">
                        <h6>Ishumanity header post</h6>
                        <p>Believe in the love and angle of suspense that ishumanitycommunity has for you </p>
                      </div>

                      <div class="layout-blog-main-post-container">
                          <button id="submit" class="btn btn-dashboard py-2">
                              upload post 
                          </button>
                      </div>

                    </div>
                  </div>
                </div>
              <!--  -->
             
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
     </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    @include('components.modal.post_listing')
    @include('components.modal.toast')
    
    <script>
      var urlcall = "{{route('BlogPostCall')}}";
      var csrf = "{{csrf_token()}}";
    </script>
    <script src="{{asset('assets/components/modal_calls/blog_headers.js')}}"></script>
     <script src="{{asset('assets/authentication/blog_post.js')}}"></script>
    
    <script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
    <script src="{{asset('assets/js/form-editors.js')}}"></script>

    <script src="{{asset('assets/js/apex.js')}}"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/features/active_links.js')}}"></script>

    <!-- Page JS -->
<!-- 
    <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script> -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
