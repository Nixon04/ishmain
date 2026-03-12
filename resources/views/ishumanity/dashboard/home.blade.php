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

    <title>Ishc | Dashboard </title>

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
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/dashboardmedia.css')}}"/>

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

            
                <div class="row">
                  <div class="col-lg-12">
                      <div class="row">
                        <div class="col-lg-8">
                           <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <div class="card view-dashboard-content fv-dish-container">
                                  <div class="dashboard-payment-dish">
                                    <div class="contents-sway mb-3">
                                      <div class="fv-dish-column">
                                           <a href="javascript:void(0)" class="fv-button-link">
                                            <div class="fv-bo">
                                                <img src="{{asset('asset_images/svg/map.svg')}}" class="fv-svg-color" width='40' alt="">
                                            </div>
                                           </a>
                                        </div>
                                    </div>
                                    <div class="fv-builder-balance">
                                         <span class="fv-main-text mb-2">Donation Income</span>
                                         <h4 class="main-fv-text">{{"₦".number_format($donation_total, 2,'.',',')}}</h4>
                                       </div>
                                  </div>
                                </div>
                                <div class="dish-content-container">
                                  <div class="dish-content-body">
                                      <div class="d-flex justify-content-between">
                                        <div class="fv-dish-column">
                                           <span class="fv-main-text mb-1">total number of donors</span>
                                           <span class="fv-sub-text">No. {{$count_charity}}</span>
                                        </div>
                                        <div class="fv-dish-column">
                                           <a href="javascript:void(0)" class="fv-button-link">
                                            <div class="fv-box">
                                                <li class="bx bx-chevrons-right"></li>
                                            </div>
                                           </a>
                                        </div>
                                        
                                      </div>
                                  </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <div class="card view-dashboard-content fv-dish-container">
                                  <div class="dashboard-payment-dish">
                                    <div class="contents-sway mb-3">

                                    <div class="fv-dish-column" style="background-image:url({{asset('asset_images/hero_images/blur2.png')}})">
                                           <a href="javascript:void(0)" class="fv-button-link">
                                            <div class="fv-bo">
                                            <img src="{{asset('asset_images/svg/mountains.svg')}}" class="fv-svg-color" width='40' alt="">
                                            </div>
                                           </a>
                                        </div>
                                    </div>
                                    <div class="fv-builder-balance">
                                         <span class="fv-main-text mb-2">Linked to charity account</span>
                                         <h4 class="main-fv-text">{{"₦".number_format($charity_total, 2,'.', ',') }}</h4>
                                       </div>
                                  </div>
                                </div>
                                <div class="dish-content-container">
                                  <div class="dish-content-body">
                                      <div class="d-flex justify-content-between">
                                        <div class="fv-dish-column">
                                           <span class="fv-main-text mb-1">Total numbers of charity</span>
                                           <span class="fv-sub-text">No. {{$count_donors}}</span>
                                        </div>
                                        <div class="fv-dish-column">
                                           <a href="javascript:void(0)" class="fv-button-link">
                                            <div class="fv-box">
                                                <li class="bx bx-chevrons-right"></li>
                                            </div>
                                           </a>
                                        </div>
                                        
                                      </div>
                                  </div>
                                </div>
                                                 
                         </div>

                         <!-- end of row -->
                          <div class="col-lg-12">
                             <div class="card fx-fu-main-container">
                            <div class="row">
                                  <!-- Total Revenue -->
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                        <div id="totalRevenueChart" class="px-2"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="dropdown">
                              <button
                                class="btn btn-sm btn-outline-primary dropdown-toggle"
                                type="button"
                                id="growthReportId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                2024
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                <a class="dropdown-item" href="javascript:void(0);">2024</a>
                                <a class="dropdown-item" href="javascript:void(0);">2023</a>
                                <a class="dropdown-item" href="javascript:void(0);">2012</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="growthChart"></div>
                        <div class="text-center fw-semibold pt-3 mb-2">0.012% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-primary p-2">₦<i class=" text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>2024</small>
                              <h6 class="mb-0">₦0.00</h6>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>2023</small>
                              <h6 class="mb-0">₦0.00</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                          </div>


                            </div>
                            </div>
                            

                           </div>
                        </div>
                           <!-- first div close -->
                        <div class="col-lg-4 mb-3 ">
                            <div class="row">
                              <div class="col-lg-6 mb-3">
                                <div class="card earn-review-container">
                                  <!-- flex -->
                                  <div class="d-flex">
                                        <div class="fv-dish-column">
                                           <a href="javascript:void(0)" class="fv-button-link">
                                            <div class="fv-box">
                                                <li class="bx bx-check"></li>
                                            </div>
                                           </a>
                                      </div>
                                  </div>
                                  <!--  -->
                                  <div class="earn-body-review">
                                    <h4>{{"No.".number_format($gofund_total,1,'.',',')}}</h4>
                                    <span class="fv-min-text">GofundMe reg</span>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-6 mb-3">
                              <div class="card earn-review-container">
                                  <!-- flex -->
                                  <div class="d-flex">
                                        <div class="fv-dish-column">
                                           <a href="javascript:void(0)" class="fv-button-link">
                                            <div class="fv-box">
                                                <li class="bx bx-check"></li>
                                            </div>
                                           </a>
                                      </div>
                                  </div>
                                  <!--  -->
                                  <div class="earn-body-review">
                                    <h4>{{"No.".number_format($fundregisters_total,1,'.',',')}}</h4>
                                    <span class="fv-min-text">Partnership</span>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-12 mb-top-fill mb-2">
                              <div class="card recent-made-funds fill-container-recent-image">
                                <div class="recent-made-header">
                                   <h4 class="fv-main-text">Current Transaction</h4>
                                    <span class="r-text-small">As of today {{$paymentread}} transaction(s) was made</span>
                                </div>
                                <div class="recent-footer">
                                <div class="d-flex">
                                      <a href="{{route('Transaction')}}" class="">
                                         <div class="fv-box">
                                          <li class="bx bx-chevrons-right"></li>
                                        </div>
                                      </a>
                                    </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-12 mb-top-fill">
                            <div class="card recent-made-funds">
                                <div class="recent-made-header">
                                   <h4 class="fv-main-text">Blog Statistics</h4>
                                    <div class="recent-blog-stat mb-3">
                                      <div class="recent-mode-fv">
                                        <div class="fv-box">
                                          <img src="{{asset('asset_images/svg/mountains.svg')}}" class="fv-svg-color" width='10' alt="">
                                        </div>
                                        <span class="fv-text-main-call">
                                          Categories
                                        </span>
                                      </div>
                                        <span>0</span>
                                    </div>
                                    <div class="recent-blog-stat">
                                      <div class="recent-mode-fv">
                                        <div class="fv-box">
                                          <img src="{{asset('asset_images/svg/mountains.svg')}}" class="fv-svg-color" width='10' alt="">
                                        </div>
                                        <span class="fv-text-main-call">
                                          Contents Post
                                        </span>
                                      </div>
                                        <span>0</span>
                                    </div>
                                </div>
                                <div class="recent-footer">
                                   <div class="d-flex">
                                      <a href="javascript:void(0)" class="blog_stat-call">
                                         <div class="fv-box">
                                          <li class="bx bx-chevrons-right"></li>
                                        </div>
                                      </a>
                                    </div>
                                </div>
                              </div>
                            </div>

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


     @include('components.modal.blog_statistics')
     @include('components.modal.toast')
 
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{asset('assets/authentication/blog_statistics.js')}}"></script>
    <script src="{{asset('assets/js/apex.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/features/active_links.js')}}"></script>

    <!-- Page JS -->

    <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script> 

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
