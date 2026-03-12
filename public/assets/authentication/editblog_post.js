$(document).ready(function(){
   // view 
    $(document).on('click', '.event-del', function(){
        var blogde = $(this).data('id');
        $('#deleteid').val(blogde);
        $('#delete_category').fadeIn();
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

    $('#updatecall').on('click', function(){
        var button = document.getElementById('updatecall');
        var category = $('#categoryid').val();
        var title = $('#titleid').val();
        var content_header = $('#contentsid').val();
        var content = $('#full-editor .ql-editor').html();
        var imageArray = [];
        var formData = new FormData();
    

        if(content==""){
            $('.toast').toast('show');
            $('#error_message').html('Content is empty');
            return false;
        }
        if(category == "" || title=="" || content_header== ""){
            $('.toast').toast('show');
            $('#error_message').html('Required field missing');
            return false;
        } 

        uniqueCounter = 1;
        content = content.replace(/<img src="([^"]+)"/g, function (match, src) {
          var filename;
          var extension;
          var classAttribute = 'class="img-blog-contain" ';
          // Check if the src is a base64-encoded data URL
          if (src.startsWith('data:image')) {
              // If it's a base64-encoded image, generate a unique filename and extension
              filename = 'image_' + generateUniqueIdentifier();
              extension = 'png';
               var base64 = src.split(',')[1];
              imageArray.push({
                  filename: filename + '.' + extension,
                  fileContent: base64, // Since it's already base64-encoded, we don't need to re-encode it
              });
          } else {
              // If it's a regular image URL, no need to process it further
              // Simply add the img-blog-contain class
              return '<img ' + classAttribute + 'src="' + src + '"';
          }
          // Construct the image URL for both base64-encoded and regular images
          var imageurl = 'http://ishcommunity.org/blog_stored_images/' + filename + '.' + extension;
      
          console.log(imageurl);
      
          // Ensure the replaced image element retains the original class and HTML structure
          return '<img ' + classAttribute + 'src="' + imageurl + '"';
      });
      

        formData.append('imageArray', JSON.stringify(imageArray));
        formData.append('category', category);
        formData.append('title', title);
        formData.append('content_header', content_header);
        formData.append('_token', csrf);
        formData.append('content', content);
        formData.append('reference_log', reference_log);

        $.ajax({
            url: urlcall,
            method: 'POST',
            data: formData,
            contentType:false,
            processData:false,
            beforeSend:function(){
                button.disabled = true;
                button.textContent =  "";
            },
            success:function(response){
              $('.toast').toast('show');
              $('#error_message').html(response.message);
              console.log(response.message);
            },
            complete:function(){
                button.disabled = false;
                button.textContent =  "Update blog";
            }
        })
    });

    function generateUniqueIdentifier() {
        // Implement your logic to generate a unique identifier (timestamp, random string, etc.)
        return Date.now().toString() + '_' + uniqueCounter++ + '_' + Math.floor(Math.random() * 1000);
    }

})