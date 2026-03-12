
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme theme-fillable">
          <div class="demo demo-container-construct d-flex justify-content-between">
              <a href="./" class="app-brand-link">
               <img src="{{asset('asset_images/logo_white_ishc.png')}}" width="40" alt="Logo">
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto-border ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              <!-- </a> -->
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item mb-3 d-none">
              <a href="{{route('Category')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text">Home</div>
              </a>
            </li>

            <li class="menu-item mb-3">
              <a href="{{route('AdminDashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text">Home</div>
              </a>
            </li>

            <li class="menu-item mb-3">
               <a href="{{route('Category')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div class="text">Category</div>
              </a>
             </li>

             <li class="menu-item mb-3">
               <a href="{{route('BlogPost')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-blogger"></i>
                <div class="text">Blog</div>
              </a>
             </li>

             <li class="menu-item mb-3">
               <a href="{{route('Transaction')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                <div class="text">Transactions</div>
              </a>
             </li>

             <li class="menu-item mb-3">
               <a href="{{route('GofundMe')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-accessibility"></i>
                <div class="text">GoFundMe Reg</div>
              </a>
             </li>

             <li class="menu-item mb-3">
               <a href="{{route('Partners')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-droplet"></i>
                <div class="text">Partners</div>
              </a>
             </li>
             
             <li class="menu-item mb-3">
               <a href="{{route('EventsAndPlanning')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-rocket"></i>
                <div class="text">Events & Blogs</div>
              </a>
             </li>


            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">support</span>
            </li>

        
        
    <!-- <li class="menu-item mb-3">
               <a href="{{route('Profile')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-square-edit"></i>
                <div class="text">Profile</div>
              </a>
             </li> -->


             <li class="menu-item mb-3">
               <a href="{{route('Logout')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-carousel"></i>
                <div class="text">Logout</div>
              </a>
             </li>
        
          </ul>
        </aside>