$(document).ready(function(){

    $('.btn-show-category').on('click', function(){

        $('.post-listing-container').fadeIn();
     })

   $('.post-button-dismiss').on('click', function(){

      $('.post-listing-container').fadeOut();
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


   $('#submitcall').on('click', function(){

    console.log('touched');
    var title_header = $('#title').val();
    var category_header =$('.full-list').val();
    var contents = $('#title-description-header').val();
    var minutesread = $('#minutesread').val();
  
    console.log('cat' +category_header)
    console.log('title: ' + title_header + 'category' + category_header + 'contents' + contents + 'minutes ' + minutesread);

   $('#title_header').text(title_header);
   $('#category_header').text(category_header);
 

   $('#titleid').val(title_header);
   $('#categoryid').val(category_header);
   $('#content_header').val(contents);
   $('#minutes_header').val(minutesread);

   console.log(contents);

    $('.post-listing-container').fadeOut();
   })
})