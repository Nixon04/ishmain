 

$(document).ready(function(){
    $('.post-dismiss-cat').on('click', function(){
        $('#edit_category').fadeOut();
    })
    $('.drop-cat-link').on('click', function(){
       var id = $(this).data('id');
        $.ajax({    
            url: viewid,
            method: 'POST',
            data: {_token: csrf, id:id},
            beforeSend:function(){
        
                $('.toast').toast('show');
                $('#error_message').html('loading...');
            }, 
            success:function(response){   
                console.log('first intake  ' +response.data.title);
                $('#title_input').val(response.data.title);
                $('#uid').val(id);
                
                $('#edit_category').fadeIn();
            }
        })
    });

    // view deleted option
    $('.post-dismiss-calling').on('click', function(){
        $('.edit-container-category').fadeOut();
    })
   

    $('.drop-delete-sub').on('click', function(){
        var id = $(this).data('reference');

         $('#deleteid').val(id);
        $('#delete_category').fadeIn();
     });
    // end of deleted option

    
    // delete action 
    $('#deletecall').on('click', function(){
        var delid = $('#deleteid').val().trim();
         var button = document.getElementById('deletecall');
        if (delid === "") {
            $('.toast').toast('show');
            $('#error_message').html('Title required');
             // Re-enable the button if validation fails
            return false;
        } 
        else {
            $.ajax({
                url: deletecall,
                method: 'POST',
                data: { delid:delid, _token: csrf},
                beforeSend: function(){
                    button.disabled = true;
                    button.textContent = "";           
                    // No need to disable the button again here
                },
                success: function(response){
                    $('.toast').toast('show');
                    $('#error_message').html(response.message);
                    window.location.href="";
                },
                error: function(xhr, status, error) {
                    // Handle error case if needed
                },
                complete: function(){
                    button.disabled = false;
                    button.textContent = "Continue";
                    // window.location.href="";
                     // Re-enable the button after AJAX request completes
                }
            });
        }
    });

    // end



    // update the title header 

    $('#updatecall').on('click', function(){
        var title_input = $('#title_input').val().trim();
        var uuid = $('#uid').val().trim();
         var button = document.getElementById('updatecall');
        if (title_input === "") {
            $('.toast').toast('show');
            $('#error_message').html('Title required');
             // Re-enable the button if validation fails
            return false;
        } 
        else {
            $.ajax({
                url: updatecall,
                method: 'POST',
                data: {title_input: title_input, uuid:uuid, _token: csrf},
                beforeSend: function(){
                    button.disabled = true;
                    button.textContent = "";           
                    // No need to disable the button again here
                },
                success: function(response){
                    $('.toast').toast('show');
                    $('#error_message').html(response.message);
                    window.location.href="";
                },
                error: function(xhr, status, error) {
                    // Handle error case if needed
                },
                complete: function(){
                    button.disabled = false;
                    button.textContent = "Continue";
                    // window.location.href="";
                     // Re-enable the button after AJAX request completes
                }
            });
        }
    });


    // delete

    // $('#deletecall').on('click', function(){
  
    //     var title_input = $('#title_input').val().trim();
    //      var button = document.getElementById('deletecall');
    //     if (title_id === "") {
    //         $('.toast').toast('show');
    //         $('#error_message').html('Title required');
    //          // Re-enable the button if validation fails
    //         return false;
    //     } 
    //     else {
    //         $.ajax({
    //             url: deletecall,
    //             method: 'POST',
    //             data: {title_id: title_id, _token: csrf},
    //             beforeSend: function(){
    //                 button.disabled = true;
    //                 button.textContent = "";           
    //                 // No need to disable the button again here
    //             },
    //             success: function(response){
    //                 $('.toast').toast('show');
    //                 $('#error_message').html(response.message);
    //             },
    //             error: function(xhr, status, error) {
    //                 // Handle error case if needed
    //             },
    //             complete: function(){
    //                 button.disabled = false;
    //                 button.textContent = "Continue";
    //                 // window.location.href="";
    //                  // Re-enable the button after AJAX request completes
    //             }
    //         });
    //     }
    // });


    // delete





    // end of updating title header

    $('.drop-call-dotted').on('click', function(){
      var visibility = $(this).closest('.drop-cat').find('.drop-visibility');
      $('.drop-visibility').not(visibility).fadeOut();
        visibility.fadeToggle();
    });
 
    $('.btn-show-category').on('click', function(){
        $('.post-listing-container').fadeIn();
     })

   $('.post-button-dismiss').on('click', function(){

      $('.post-listing-container').fadeOut();
   });


   $('#submit').on('click', function(){
  
    var title = $('#title').val().trim();
     var button = document.getElementById('submit');


    if (title === "") {
        $('.toast').toast('show');
        $('#error_message').html('Title required');
         // Re-enable the button if validation fails

        return false;
    } 
    
    else {
        $.ajax({
            url: linkpage,
            method: 'POST',
            data: {title: title, _token: csrf},
            beforeSend: function(){
                button.disabled = true;
                button.textContent = "";           
                // No need to disable the button again here
            },
            success: function(response){
                $('.toast').toast('show');
                $('#error_message').html(response.message);
            },
            error: function(xhr, status, error) {
                // Handle error case if needed
            },
            complete: function(){
                button.disabled = false;
                button.textContent = "Continue";
                // window.location.href="";
                 // Re-enable the button after AJAX request completes
            }
        });
    }
});

  


})