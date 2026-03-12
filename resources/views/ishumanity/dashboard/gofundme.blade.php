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

    <title>Ishc | GofundMe</title>

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

   
    <link rel="stylesheet" href="{{asset('assets/vendor/library/datatables-bs5/datatables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/library/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/library/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/library/datatables-buttons-bs5/buttons.bootstrap5.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/library/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendor/library/%40form-validation/umd/styles/index.min.css')}}" />

 
   <link rel="stylesheet" href="{{asset('assets/vendor/library/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/library/typeahead-js/typeahead.css')}}" /> 


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>

    



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

               <!-- <div class="post-dropdown">
                  <div class="post-box me-3">
                    <a href="javascript:void()" class="">
                        <li class="bx bx-category-alt"></li>
                    </a>
                  </div>

                  <div class="post-box">
                    <a href="javascript:void(0)" class="btn-show-category">
                        <li class="bx bx-file"></li>
                    </a>
                  </div>

               </div> -->

              <div class="row">

              <div class="col-lg-12">

              <div class="card">
                <div class="card-datatable table-responsive">
                  <table class="datatables-basic table border-top">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>id</th>
                        <th>Fullname</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Salary</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
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
      @include('components.modal.toast')
    @include('components.modal.gofundmelist')
    @include('components.modal.active_gofund')

    
    <script>
      var isactivelink = "{{route('IsActive')}}";
      var activegofundme = "{{route('ActiveGofundMe')}}";
      var allgofundmessage = "{{route('GofundMessage')}}";
      var urlcall = "{{route('BlogPostCall')}}";
      var csrf = "{{csrf_token()}}";
    </script>
    <script src="{{asset('assets/components/modal_calls/blog_headers.js')}}"></script>
     <script src="{{asset('assets/authentication/blog_post.js')}}"></script>
     <script src="{{asset('assets/features/activefundme.js')}}"></script>
    <script src="{{asset('assets/js/apex.js')}}"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/features/active_links.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('assets/vendor/library/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{asset('assets/tables_data/gofundme_reg.js')}}"></script>
    <script src="{{asset('assets/authentication/gofundme_list.js')}}"></script>

<!-- 
    <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script> -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
