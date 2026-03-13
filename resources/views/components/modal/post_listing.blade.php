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

                <div class="mb-3">

                <label for="image-review" class="u-e-upload">Upload image</label> 
                    <input type="file" image="*" id="image-review"  alt="" hidden>
                </div>

                <img src="#" id="imageview" alt="">

                <div class="label-main fill-main-container mb-1">
                    <select name="" id="category" class="form-select py-3 full-list">
                        <option value="" selected default>--SELECT--</option>
                        @if(count($category)> 0)
                           @foreach($category as $entry)
                           <option value="{{$entry->title}}">{{$entry->title}}</option>
                           @endforeach
                        @endif                      
                    </select>
                    <span class="fill-main-top">Category</span>
                </div>
                
                 <div class="label-main mb-1">
                    <input type="text" placeholder=" " class="form-control py-3" id="title">
                    <span>Title</span>
                 </div> 
                 
                  <div class="label-main mb-1">
                    <input type="text" placeholder=" " class="form-control py-3" id="minutesread">
                    <span>Minutes read</span>
                 </div> 

                 <div class="title-description-container">
                    <label for="label-description" class="mb-2">Description</label>
                    <textarea id="title-description-header" id="contents_details" class="textarea-fill"></textarea>
                    <span class="d-flex justify-content-end p-3">less than 150 words</span>
                 </div>

                 <div class="button-container-post">
                    <a href="javascript:void(0)" id="submitcall" class="btn btn-dashboard py-2">
                        Continue
                    </a>
                 </div>
                </div>

                             
            </div>
        </div>

</div>