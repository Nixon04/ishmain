<div class="post-listing-container">
    <div class="post-listing-header"></div>

        <div class="post-listing-body">
            <div class="post-header-main">
               <span></span>
                <div class="post-box">
                <a href="javascript:void(0)" class="post-button-dismiss">
                  <li class="bx bx-x post-icon-large"></li>
                </a>      
             </div>
           </div>


             <div class="content-post-fill">

                  <div class="mb-4">
                        <label for="image-reviews" class="u-e-upload">Upload image</label> 
                        <input type="file" image="*" id="image-reviews"  alt="" hidden>
                  </div>
                  <img src="#" id="imageviews" alt="">

                 </div>

                <div class="label-main mb-3 w-100">
                    <input type="text" placeholder=" " value='{{$category}}' class="form-control py-3  w-100" id="category" readonly>
                    <span>Category</span>
                 </div>  


                 <div class="label-main mb-3">
                    <input type="text" placeholder=" " value='{{$title}}' class="form-control py-3" id="title">
                    <span>Title</span>
                 </div>  

                 <div class="title-description-container">
                  <label for="" class="mt-4">Description</label>
                    <textarea id="title-description-header" class="textarea-fill">{{$sub_content}}</textarea>
                    <span class="d-flex justify-content-end p-3">less than 150 words</span>
                 </div>

                 <div class="button-container-post">
                    <a href="javascript:void(0)" id="submitreview" class="btn btn-dashboard py-2">
                        Continue
                    </a>
                 </div>
                </div>

                             
            </div>
        </div>

</div>