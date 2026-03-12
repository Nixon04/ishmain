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

    <title>Ishc | Category Log | Place Blog sub header contents for users to see before viewing full contents</title>

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

    <script src="{{asset('jquery.js')}}"></script>
  </head>

  <body>

  @include('components.modal.add_category')
              @include('components.modal.delete_category')
              @include('components.modal.edit_category')
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

             <div class="category-post-header">
                <div class="d-flex justify-content-between">
                    <h4 class="sublime-header">Add Category</h4>

                  <div class="post-box">
                    <a href="javascript:void(0)" class="btn-show-category">
                        <li class="bx bxs-category-alt"></li>
                    </a>
                  </div>

                </div>
             </div>

             <div class="category-dragged-list">
                <div class="card-table">
                    <div class="table-responsive table-min-height text-nowrap">
                        <table class="table m-0">
                           <thead class="thead-color-scheme m-0">
                             <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Active</th>
                                <th>Release Date</th>
                                <th></th>
                            </tr>
                           </thead>

                          @if($category)
                           
                             @foreach($category as $entry)
                             <tbody class="table-border-bottom-0" id="table-flowchart">
                               <tr class="tr-border-pad-call">
                                <td>{{$entry->category_ref_id}}</td>
                                <td id="escape">{{ Str::limit($entry->title, 15, '...') }}</td>
                                <td>
                                 <div class="category-alert">
                                  <span class="status-active-color">{{$entry->status == 'true'? 'active' : 'unactive'}}</span>
                                </div>
                               </td>
                                 <td>{{$entry->date}}</td>
                                <td><div class="drop-cat">
                                    <a href="javascript:void(0)" class="drop-call-dotted">
                                      <li class="bx bx-dots-vertical-rounded "></li>
                                    </a>
                                  <div class="drop-visibility">
                                    <div class="drop-cat-menu">
                                       <div class="d-flex mb-2 drop-cat-list">
                                         <li class="bx bx-edit me-2 list-cat"></li>
                                         <a href="javascript:void(0)" data-id="{{$entry->id}}" class="drop-cat-link">Edit category</a>
                                       </div>

                                       <div class="d-flex mb-2 drop-cat-list">
                                         <li class="bx bx-trash me-2 list-cat"></li>
                                         <a href="javascript:void(0)" data-reference="{{$entry->id}}" class="drop-cat-link drop-delete-sub">Delete category</a>
                                       </div>
                                    </div>
                                 </div>

                                </div>
                                  </td>  
                            </tr>
                           </tbody>
                             @endforeach
                          @endif

                        </table>
                    </div>

                    <div class="pagination-caegory">
                      <div class="d-flex justify-content-between">
                        <div class="div">
                          <span id="count">CurrentPage: 1</span>
                        </div>
                        <div class="d-flex">
                        <div class="pad-right-cat me-3">
                           <li class="bx bx-chevron-left p-cat-size"></li>
                        </div>

                        <div class="pad-right-cat">
                        <li class="bx bx-chevron-right p-cat-size"></li>
                        </div>
                        </div>
                      </div>


                     </div>
                    </div>          

                </div>
             </div>

 
             @include('components.modal.toast')
           
                        
              <!--  -->
             
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
     </div>
    </div>
    <!-- / Layout wrapper -->



    <script>
      let linkpage = "{{route('CategoryHeader')}}";
      let updatecall = "{{route('CategoryUpdate')}}";
      let deletecall = "{{route('CategoryDelete')}}";
      let viewid = "{{route('ViewCatId')}}";
      var csrf = "{{csrf_token()}}";
      
    </script>
 

    <script src="{{asset('assets/authentication/category.js')}}"></script>
    
    <script src="{{asset('assets/authentication/table-content.js')}}"></script>
   
    <script src="{{asset('assets/js/apex.js')}}"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/features/active_links.js')}}"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

  </body>
</html>
