<div class="participate_container-pv" id="participate_container">
    <div class="participate-header">
        <div class="p-v-flex">
            <span></span>
            <li class="bx bx-x p-v-large" id="dismiss-participate"></li>
          </div>
        </div>

        <div class=" ">
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="img-field-container">
                  <img src="{{asset('asset_images/hero_images/images/volunteer_together.png')}}" class="img-pv-auto" alt="">
                </div>
            </div>
            <div class="col-lg-6">
             <div class="participate-header-card">
                    <h4>Participate</h4>
                    <span>Join us today making a difference to the world with the 
                      area you best fit in, we are always happy having you with us..
                    </span>
                </div>
                      <div class="participate-body-scroll" style="height:500px">
                          <form action="" method="post">
                          <div class="label-main m-3 d-none">
                          <input type="text"  placeholder=" " id="Countryid" class="form-control py-3" readonly/>
                            <span>Country</span>
                        </div>
                    <div class="label-float m-3">
                      <select name="" id="categorylist" class="form-select py-3">
                        <option value="" selected default>--Select Category --</option>
                        <option value="individual">individual</option>
                        <option value="volunteer">Volunteer</option>
                        <option value="cooperate">Cooperate</option>
                        <option value="institute">Institute</option>
                      </select>
                    </div>
                  <div id="participate_population">
                </form>
             </div>
            </div>
            <div class="participate-form-send m-3">
                <button id="submit" class="btn btn-ishc-donate-button button-custom">
                   Upload Information
                </button>
             </div>

             <div class="countdown-timer m-3">
               <div id="timer"></div>
             </div>

             
             <div class="div-content-send-alert m-3">
                   <span>Thanks for registering with us, we are more than happy,
                    our team shall get back to you shortly, meanwhile you can read more
                    about our partnership terms and privacy notice.
                   </span>

                   <div class="prv-text">
                    <a href="{{route('TermsAndConditions')}}" class="prv-link-text">Privacy and terms</a>
                   </div>
                </div>



                </div>
          </div>



        </div>
    </div>