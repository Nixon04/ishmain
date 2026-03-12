$(document).ready(function(){


    $('#image-review').change(function(){
       var input = this;
       if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
         $('#imageview').attr('src', e.target.result).show();
        }
        reader.readAsDataURL(input.files[0]);
    }
    });


    $('#submit').on('click', function(){
        var button = document.getElementById('submit');
        var category = $('#categoryid').val();
        var title = $('#titleid').val();
        var content_header = $('#content_header').val();
        var minutes_header = $('#minutes_header').val();
        var image_top = document.getElementById('image-review').files[0];
        var content = $('#full-editor .ql-editor').html();
        var imageArray = [];
        var formData = new FormData();

        if(content=="" || title=="" || content_header=="" || minutes_header==""|| image_top=="" || content==""){
            $('.toast').toast('show');
            $('#error_message').html('Required field empty');
            return false;
        }

        uniqueCounter = 1;

        content = content.replace(/<img src="data:image\/([^;]+);base64,([^"]+)"/g, function (match, type, base64) {
         var filename = 'image_' + generateUniqueIdentifier();
         var extension = 'png';
         imageArray.push({
            filename: filename + '.' + extension,
            fileContent: base64,
         });

         var imageurl = 'http://ishcommunity.org/blog_stored_images/' + filename + '.' + extension;

         console.log(imageurl);
           
         return '<img class="img-blog-contain" src="'+ imageurl +'"';
        });

        formData.append('imageArray', JSON.stringify(imageArray));
        formData.append('category', category);
        formData.append('title', title);
        formData.append('content_header', content_header);
        formData.append('_token', csrf);
        formData.append('content', content);
        formData.append('minutes_header', minutes_header);
        formData.append('image_top', image_top);
        $.ajax({
            url: urlcall,
            method: 'POST',
            data: formData,
            contentType:false,
            processData:false,
            beforeSend:function(){
            button.disabled=true;
            button.textContent= "";
            },
            success:function(response){
               $('.toast').toast('show');
               $('#error_message').html(response.message);
             console.log(response.message);
            },
            complete:function(){
                button.disabled=false;
                button.textContent = "Upload post"
            }
        })
    });

    function generateUniqueIdentifier() {
        // Implement your logic to generate a unique identifier (timestamp, random string, etc.)
        return Date.now().toString() + '_' + uniqueCounter++ + '_' + Math.floor(Math.random() * 1000);
    }

})