$(document).ready(function () {

    // Preview main image
    $('#image-review').on('change', function () {
        const input = this;
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                $('#imageview').attr('src', e.target.result).show();
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            $('#imageview').hide(); // optional: hide preview if cleared
        }
    });

    // Use jQuery object for the button from the start
    const $submitBtn = $('#submit');

    $submitBtn.on('click', function (e) {
        e.preventDefault(); // prevent any default if it's a button inside form

        const category       = $('#categoryid').val().trim();
        const title          = $('#titleid').val().trim();
        const content_header = $('#content_header').val().trim();
        const minutes_header = $('#minutes_header').val().trim();
        const content        = $('#full-editor .ql-editor').html().trim();
        const mainImageFile  = $('#image-review')[0].files[0]; // File or undefined

        // Better client-side validation
        if (!title || !content || !content_header || !minutes_header || !category || !mainImageFile) {
            $('.toast').toast('show');
            $('#error_message').html('Please fill all required fields and select a main image.');
            return;
        }

        const imageArray = [];
        let uniqueCounter = 1;

        // Replace inline base64 images
        const processedContent = content.replace(
            /<img src="data:image\/([^;]+);base64,([^"]+)"/g,
            function (match, type, base64) {
                const extension = type === 'jpeg' ? 'jpg' : type; // better mapping
                const filename  = `image_${generateUniqueIdentifier()}.${extension}`;

                imageArray.push({
                    filename: filename,
                    fileContent: base64
                });

                const imageUrl = `${window.location.origin}/blog_top_images/${filename}`;
                console.log('Replacement URL:', imageUrl);

                return `<img class="img-blog-contain" src="${imageUrl}"`;
            }
        );

        const formData = new FormData();
        formData.append('category', category);
        formData.append('title', title);
        formData.append('content_header', content_header);
        formData.append('minutes_header', minutes_header);
        formData.append('content', processedContent);
        formData.append('imageArray', JSON.stringify(imageArray));
        formData.append('image_top', mainImageFile);
        formData.append('_token', csrf); 

        $submitBtn
            .prop('disabled', true)
            .text('Uploading...');

        $.ajax({
            url: urlcall, 
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            success: function (response) {
                console.log('Success response:', response);

                $('.toast').toast('show');
                $('#error_message').html(response.message || 'Blog posted!');

                if (response.status === 'success') {
                    setTimeout(() => {
                        window.location.href = ''; 
                    }, 1500);
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
            complete: function () {
                $submitBtn
                    .prop('disabled', false)
                    .text('Upload Blog Post');
            }
        });
    });

    function generateUniqueIdentifier() {
        return Date.now() + '_' + uniqueCounter++ + '_' + Math.floor(Math.random() * 10000);
    }
});