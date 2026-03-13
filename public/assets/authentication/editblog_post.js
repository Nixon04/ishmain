$(document).ready(function(){
   // view 
    $(document).on('click', '.event-del', function(){
        var blogde = $(this).data('id');
        $('#deleteid').val(blogde);
        $('#delete_category').fadeIn();
    });

     // Preview main image
     $('#image-reviews').on('change', function () {
      const input = this;
      if (input.files && input.files[0]) {
          const reader = new FileReader();
          reader.onload = function (e) {
              $('#imageviews').attr('src', e.target.result).show();
          };
          reader.readAsDataURL(input.files[0]);
      } else {
          $('#imageviews').hide(); // optional: hide preview if cleared
      }
  });


   $('.post-dismiss-calling').on('click', function(){
       $('#delete_category').fadeOut();
   });
    
    $('.btn-show-category').on('click', function(){

        $('.post-listing-container').fadeIn();
     })

   $('.post-button-dismiss').on('click', function(){

      $('.post-listing-container').fadeOut();
   });



   $(document).on('click', '#deletecall', function(){
    var reference_delete = $('#deleteid').val();
    var button = document.getElementById('deletecall');
    if(reference_delete == ""){
      return false;
    }else{
      $.ajax({
          url: deleteevents,
          method: 'post',
          data: {_token: csrf, reference_delete:reference_delete},
          beforeSend:function(){
             button.disabled= true;
             button.textContent = ""
          },
          success:function(response){
             $('.toast').toast('show');
             $('#error_message').html(response.message);
             if(response.status == "success"){
               window.location.href = "";
             }
          },
          error: function (xhr, status, errorThrown) {
            console.error('AJAX Error:', { status, errorThrown, response: xhr.responseText });
            let msg = 'Something went wrong! Please try again.';
            try {
                const json = JSON.parse(xhr.responseText);
                msg = json.message || msg;
                if (json.errors) {
                    msg = Object.values(json.errors).flat().join(' • ');
                }
            } catch {}

            $('.toast').toast('show');
            $('#error_message').html(msg);
        },
          complete:function(){
            button.disabled= false;
            button.textContent = "deleted"
         },
      })
    }
  });


    $('#title-description-header').on('input', function(){
        var content = $(this).val().trim();
        var count = content.length;
        if(count > 150){
            $(this).val(content.substring(0, 150));
            count = 150;
            $('.title-description-container span').html('<i class="bx bx-check-circle"></i> Complete');
        }
        $('.title-description-container span').text('remaining ' + (150 - count));
       });
    

   $('#submitreview').on('click', function(){

     var titlereview = $('#title').val();
     var categoryreview =  $('#category').val();
     var contentreview = $('#title-description-header').val();

     console.log(contentreview);
    //  val input forms
     $('#category_header').text(categoryreview);
     $('#title_header').text(titlereview);
     $('#contents_details').text(contentreview);
     

     $('#titleid').val(titlereview);
     $('#categoryid').val(categoryreview);
     $('#contentsid').val(contentreview);
     $('.post-listing-container').fadeOut();
   });

   $('#updatecall').on('click', function () {
    const $button = $('#updatecall'); // ← use jQuery object from start
    const category       = $('#categoryid').val()?.trim() || '';
    const title          = $('#titleid').val()?.trim() || '';
    const content_header = $('#contentsid').val()?.trim() || '';
    // Add minutes_header if it exists in edit form
    const minutes_header = $('#minutes_header').val()?.trim() || ''; 
    const contentRaw     = $('#full-editor .ql-editor').html() || '';
    const mainImageFile  = $('#image-reviews')[0]?.files?.[0]; // may be undefined = keep old

    // Basic client validation
    if (!title || !category || !content_header || !contentRaw.trim()) {
        $('.toast').toast('show');
        $('#error_message').html('Required fields are missing');
        return;
    }

    const imageArray = [];
    let uniqueCounter = 1;

    // ───────────────────────────────────────────────
    // Improved: Only process NEW base64 images — keep existing URLs untouched
    // ───────────────────────────────────────────────
    const processedContent = contentRaw.replace(
        /<img[^>]*src="([^"]+)"[^>]*>/gi,
        function (match, src) {
            // Already a saved image URL → just ensure class is there
            if (!src.startsWith('data:image')) {
                if (!match.includes('class="img-blog-contain"')) {
                    return match.replace('<img', '<img class="img-blog-contain"');
                }
                return match;
            }
            // New pasted/dropped base64 image
            const base64 = src.split(',')[1] || '';
            if (!base64) return match; // invalid

            const extension = src.includes('jpeg') || src.includes('jpg') ? 'jpg' : 'png';
            const filename = `image_${generateUniqueIdentifier()}.${extension}`;

            imageArray.push({
                filename: filename,
                fileContent: base64
            });

            const finalUrl = `${window.location.origin}/blog_top_images/${filename}`;
            console.log('New image will be saved as:', finalUrl);
            return `<img class="img-blog-contain" src="${finalUrl}"`;
        }
    );

    const formData = new FormData();
    formData.append('category', category);
    formData.append('title', title);
    formData.append('content_header', content_header);
    formData.append('minutes_header', minutes_header);
    formData.append('content', processedContent);
    formData.append('image_top',mainImageFile)
    formData.append('imageArray', JSON.stringify(imageArray));
    formData.append('_token', csrf);
    formData.append('reference_log', reference_log); 

    $button
        .prop('disabled', true)
        .text('...');

    $.ajax({
        url: urlcall,
        method: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        success: function (response) {
            $('.toast').toast('show');
            $('#error_message').html(response.message || 'Updated!');

            if (response.status === 'success') {
                setTimeout(() => {
                    window.location.reload(); 
                }, 1200);
            }
        },
        error: function (xhr) {
            console.error('Update failed:', xhr.responseText);
            let msg = 'Update failed – please try again';
            try {
                const json = JSON.parse(xhr.responseText);
                msg = json.message || msg;
                if (json.errors) {
                    msg = Object.values(json.errors).flat().join(' • ');
                }
            } catch {}

            $('.toast').toast('show');
            $('#error_message').html(msg);
        },
        complete: function () {
            $button
                .prop('disabled', false)
                .text('Update blog');
        }
    });

    function generateUniqueIdentifier() {
        // Implement your logic to generate a unique identifier (timestamp, random string, etc.)
        return Date.now().toString() + '_' + uniqueCounter++ + '_' + Math.floor(Math.random() * 1000);
    }


});

   
})