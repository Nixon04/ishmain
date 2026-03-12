<nav class="nav-nav">
    <div class="nav-header-flex">
        <a href="{{url('/')}}" class="">
        <div class="logo">
            <img src="{{asset('asset_images/logo_ishc.png')}}" width="80" alt="Logo">
        </div>
        </a>
        <div class="nav-view-controller">
            <ul class="ul-call-flex">
                <li class="menu-class-link dropdown-class">
                    <a href="/" class="menu-link-class footer-link">Home</a>
                </li>
                <li class="menu-class-link dropdown-class">
                   <a href="{{route('About')}}" class="menu-link-class footer-link">About</a>
                
                </li>
                <li class="menu-class-link dropdown-class">
                   <a href="javascript:void(0)" class="menu-link-class footer-link">Get Involved</a>
                   <ul class="dropdown-menu-class drop-layout-class">
                    <div class="row m-0">
                     <div class="col-lg-4 col-md-6 col-12">
                        <a href="javascript:void(0)" class="">
                        <div class="drop-sub-header">
                            <div class="icon-box-circle">
                                <li class="bx bx-badge fs-4"></li>
                            </div>
                            <a href="{{route('Participate')}}" class="footer-link">
                                <div class="drop-column">
                                <li class="text-dark menu-class-link">Participate</li>
                                <span class="ishc-little text-dark">Volunteer opportunities and application form</span>
                                </div>
                          </a>
                        </div>
                      </a>
                    </div>

                    <!--  -->

                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="#" class="">
                        <div class="drop-sub-header">
                            <div class="icon-box-circle">
                                <li class="bx bx-donate-heart fs-4"></li>
                            </div>
                            <a href="{{route('Donation')}}" class="footer-link">
                                <div class="drop-column">
                                <li class="text-dark menu-class-link">Donations</li>
                                <span class="ishc-little text-dark">Donate to help the needy whatever you can</span>
                                </div>
                          </a>
                        </div>
                      </a>
                    </div>

                    <!--  -->

                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="#" class="">
                        <div class="drop-sub-header">
                            <div class="icon-box-circle">
                                <li class="bx bx-fingerprint fs-4"></li>
                            </div>
                            <a href="{{route('FundRaising')}}" class="footer-link">
                                <div class="drop-column">
                                <li class="text-dark menu-class-link">Fundraising</li>
                                <span class="ishc-little text-dark">Fundraising campaigns and events occuring</span>
                                </div>
                          </a>
                        
                        </div>
                      </a>
                    </div>

                    </div>
                   </ul>
                </li>
                <li class="menu-class-link dropdown-class">
                   <a href="{{route('Projects')}}" class="menu-link-class footer-link">Projects</a>
                
                </li>
                <li class="menu-class-link dropdown-class">
                   <a href="javascript:void(0)" class="menu-link-class footer-link">Resources</a>
                   <ul class="dropdown-menu-class drop-layout-class">
                    <div class="row m-0">
                     <div class="col-lg-4 col-md-6 col-12">
                        <a href="#" class="">
                        <div class="drop-sub-header">
                            <div class="icon-box-circle">
                                <li class="bx bx-paste fs-4"></li>
                            </div>
                            <a href="{{route('Education')}}" class="footer-link">
                                <div class="drop-column">
                                <li class="text-dark menu-class-link">Education</li>
                                <span class="ishc-little text-dark">Educational materials and reports</span>
                                </div>
                            </a>
                        </div>
                      </a>
                    </div>

                    <!--  -->

                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="#" class="">
                        <div class="drop-sub-header">
                            <div class="icon-box-circle">
                                <li class="bx bx-carousel fs-4"></li>
                            </div>
                            <a href="{{route('BlogResources')}}" class="footer-link">
                                <div class="drop-column">
                                <li class="text-dark menu-class-link">Blogs</li>
                                <span class="ishc-little text-dark">Get latest informations around the beauty of life</span>
                                </div>
                            </a>
                        </div>
                      </a>
                    </div>

                    <!--  -->

                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="#" class="">
                        <div class="drop-sub-header">
                            <div class="icon-box-circle">
                                <li class="bx bx-group fs-4"></li>
                            </div>
                            <a href="{{route('Faq')}}" class="footer-link">
                                <div class="drop-column">
                                <li class="text-dark menu-class-link">Faqs</li>
                                <span class="ishc-little text-dark">View concurrent questions from previous donators</span>
                                </div>
                            </a>
                        
                        </div>
                      </a>
                    </div>

                    </div>
                   </ul>
                </li>

                <li class="menu-class-link dropdown-class">
                   <a href="{{route('Contact')}}" class="menu-link-class footer-link">Contact </a>
                </li>
             
            </ul>
        </div>
        <div class="d-flex">
            <div class="logo"> 
               <a href="{{route('Donation')}}" class="btn btn-ishc-donate-button me-3 ">Donate</a>
            </div>
            <a href="javascript:void(0)" class="menu-visibility menu-contain-border">
                  <li class="bx bx-menu-alt-right menu-btn-btn btn-visibility-call" ></li>
            </a>
        </div>
    </div>

    



<!-- starting call for view controller -->
    <div class="nav-view-controller-mobile">

          <div class="d-flex justify-content-between view-mobile-header mb-4">
            <div class="">
                <!-- <img src="" alt=""> -->
            </div>
            <div class="">
                <a href="javascript:void(0)" class="">
                    <li class="bx bx-x ishc-dismiss-button"></li>
                </a>
            </div>
          </div>
            <ul class="ul-call-flex-mobile">

            <div class="tabs mb-5" onclick="Toggle(1)">
                <div class="ul-body-flex">
                    <li class="menu-class-link dropdown-class-content">
                    <a href="{{route('ViewControl')}}" class="menu-link-class">Home</a>
                    </li>
                    <a href="{{route('ViewControl')}}" class="menu-link-class"> 
                       <li class="bx bx-chevron-right arrow-icon" id="arrow1"></li>
                    </a> 
                </div>                 
            </div>


            <!--  -->

            <div class="tabs mb-5" onclick="Toggle(2)">
                <div class="ul-body-flex">
                    <li class="menu-class-link dropdown-class-content">
                    <a href="{{route('About')}}" class="menu-link-class">About us</a>
                    </li>
                    <a href="{{route('About')}}" class="menu-link-class"> 
                       <li class="bx bx-chevron-right arrow-icon" id="arrow1"></li>
                    </a> 
                </div>                 
            </div>

            <!--  -->

            <div class="tabs mb-5" onclick="Toggle(3)">
                <div class="ul-body-flex">
                    <li class="menu-class-link dropdown-class-content">
                    <a href="{{route('Projects')}}" class="menu-link-class">Projects</a>
                    </li>
                    <a href="{{route('Projects')}}" class="menu-link-class"> 
                       <li class="bx bx-chevron-right arrow-icon" id="arrow1"></li>
                    </a> 
                </div>                 
            </div>

          


                <div class="tabs mb-5" onclick="Toggle(4)">
                <div class="ul-body-flex">
                    <li class="menu-class-link dropdown-class-content">
                    <a href="javascript:void(0)" class="menu-link-class">Get Involved</a>
                    </li>
                    <a href="javascript:void(0)" class="menu-link-class">
                       <li class="bx bx-chevron-down arrow-icon" id="arrow4"></li>
                    </a>
                </div>
                
                <div class="content-show" id="content4">
                  <div class="col-lg-4 col-md-6 col-12">
                        <a href="{{route('Participate')}}" class="">
                        <div class="drop-sub-header full-weight">
                            <div class="icon-box-circle">
                                <li class="bx bx-badge fs-4"></li>
                            </div>
                            <div class="drop-column">
                            <li class="text-dark menu-class-link">Participate</li>
                            <span class="ishc-little text-dark">Volunteer opportunities and application form</span>
                         </div>
                       </div>
                      </a> 
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="{{route('Donation')}}" class="">
                        <div class="drop-sub-header full-weight">
                            <div class="icon-box-circle">
                                <li class="bx bx-donate-heart fs-4"></li>
                            </div>
                            <div class="drop-column">
                            <li class="text-dark menu-class-link">Donation</li>
                            <span class="ishc-little text-dark">Donate to help the needy whatever you can</span>
                         </div>
                       </div>
                      </a> 
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="{{route('FundRaising')}}" class="">
                        <div class="drop-sub-header full-weight">
                            <div class="icon-box-circle">
                                <li class="bx bx-fingerprint fs-4"></li>
                            </div>
                            <div class="drop-column">
                            <li class="text-dark menu-class-link">Fundraising</li>
                            <span class="ishc-little text-dark">Fundraising campaigns and events</span>
                         </div>
                       </div>
                      </a> 
                    </div>


                </div>   

            </div>
                
             
        <!--  -->


        <div class="tabs mb-5" onclick="Toggle(5)">
                <div class="ul-body-flex">
                    <li class="menu-class-link dropdown-class-content">
                    <a href="javascript:void(0)" class="menu-link-class">Resources</a>
                    </li>
                    <a href="javascript:void(0)" class="menu-link-class">
                       <li class="bx bx-chevron-down arrow-icon" id="arrow5"></li>
                    </a>
                </div>
                
                <div class="content-show" id="content5">
                  <div class="col-lg-4 col-md-6 col-12">
                        <a href="{{route('Education')}}" class="">
                        <div class="drop-sub-header full-weight">
                            <div class="icon-box-circle">
                                <li class="bx bx-paste fs-4"></li>
                            </div>
                            <div class="drop-column">
                            <li class="text-dark menu-class-link">Education</li>
                            <span class="ishc-little text-dark">Education material & reports</span>
                         </div>
                       </div>
                      </a> 
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="{{route('Faq')}}" class="">
                        <div class="drop-sub-header full-weight">
                            <div class="icon-box-circle">
                                <li class="bx bx-group fs-4"></li>
                            </div>
                            <div class="drop-column">
                            <li class="text-dark menu-class-link">Faqs</li>
                            <span class="ishc-little text-dark">View concurrent questions from previous donators</span>
                         </div>
                       </div>
                      </a> 
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="{{route('BlogResources')}}" class="">
                        <div class="drop-sub-header full-weight">
                            <div class="icon-box-circle">
                                <li class="bx bx-carousel fs-4"></li>
                            </div>
                            <div class="drop-column">
                            <li class="text-dark menu-class-link">Blog</li>
                            <span class="ishc-little text-dark">Get latest informations around the beauty of life</span>
                         </div>
                       </div>
                      </a> 
                    </div>


                

                    <!--  -->

               

                    </div>                    
            </div>
                

        <!--  -->

        
           <div class="tabs mb-5">
                <div class="ul-body-flex">
                    <li class="menu-class-link dropdown-class-content">
                    <a href="{{route('Contact')}}" class="menu-link-class">Contact us</a>
                    </li>
                    <a href="{{route('Contact')}}" class="menu-link-class"> 
                       <li class="bx bx-chevron-right arrow-icon" id="arrow1"></li>
                    </a> 
                </div>                 
            </div>

            </ul>
        </div>

        <!-- end for mobile view -->
  </nav>