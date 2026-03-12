$(document).ready(function(){
    // view partnership details
    $(document).on('click', '.partnerscall', function(){
        // $('#partners_full_lists');
         var reference_id = $(this).data('id');
          
        if(reference_id == ""){
            return false;
        }else{
            $.ajax({
                url: urlcall,
                method: "POST",
                data: {_token:csrf, reference_id:reference_id},
                success:function(response){
                    var row = "";
                    var email_Call = response.data.email_address;
                    var contactcall = response.data.contact;
                    $('#partners_full_list').empty();   

                       if(response.data.type_of_partnership === "individual"){
                          row += 
                          '<div class="pv-list-body">' +
                          '<h4 class="me-3 bvh-main">Type:</h4>'+
                           '<h4 class="me-4 bvh-small">'+response.data.type_of_partnership +"</h4>"+
                          '</div>'+

                          '<div class="pv-list-body">' +
                          '<h4 class="me-3 bvh-main">Username:</h4>'+
                           '<h4 class="me-4 bvh-small">'+response.data.username +"</h4>"+
                          '</div>'+

                          '<div class="pv-list-body">' +
                          '<h4 class="me-3 bvh-main">Contact:</h4>'+
                           '<h4 class="me-4 bvh-small">'+response.data.contact +"</h4>"+
                          '</div>'+

                          '<div class="pv-list-body">' +
                          '<h4 class="me-3 bvh-main">Email Address:</h4>'+
                           '<h4 class="me-4 bvh-small mail-fl">'+response.data.email_address +"</h4>"+
                          '</div>'+

                          '<div class="pv-container">'+
                          '<div class="pv-list-body">' +
                          '<h4 class="me-3 bvh-main">N.O.C:</h4>'+
                           '<h4 class="me-4 bvh-small">'+response.data.nature_of_collaboration +"</h4>"+
                          '</div>'+

                          '<div class="pv-container">'+
                          '<div class="pv-list-body">' +
                          '<h4 class="me-3 bvh-main">Date:</h4>'+
                           '<h4 class="me-4 bvh-small">'+response.data.date +"</h4>"+
                          '</div>'+

                          '<div class="pv-container">'+
                          '<div class="pv-list-body ">' +
                              '<a href="mailto:'+ email_Call +'" class="btn btn-dashboard py-3 w-100">Email user</a>'+
                          '</div>'+
                      '</div>'+

                        '<div class="pv-container mb-3">'+
                        '<div class="pv-list-body">' +
                            '<a href="tel:'+ contactcall +'" class="btn btn-dashboard-outline py-3 w-100">Contact user</a>'+
                            '</div>'+
                        '</div>'+
                           
                    
                        '</div>';
                       }
                       
                       else if(response.data.type_of_partnership ==="cooperate"){
                        row += 
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Type:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.type_of_partnership +"</h4>"+
                        '</div>'+

                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Username:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.username +"</h4>"+
                        '</div>'+

                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Contact:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.contact +"</h4>"+
                        '</div>'+

                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Email Address:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.email_address +"</h4>"+
                        '</div>'+

                        '<div class="pv-container">'+
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">N.O.C:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.nature_of_collaboration +"</h4>"+
                        '</div>'+

                        '<div class="pv-container">'+
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Organization Name:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.organization_name +"</h4>"+
                        '</div>'+

                        '<div class="pv-container">'+
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Organization client position:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.organization_user_position +"</h4>"+
                        '</div>'+


                        '<div class="pv-container">'+
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Date:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.date +"</h4>"+
                        '</div>'+

                        '<div class="pv-container">'+
                        '<div class="pv-list-body ">' +
                            '<a href="mailto:'+ email_Call +'" class="btn btn-dashboard py-3 w-100">Email user</a>'+
                        '</div>'+
                    '</div>'+

                      '<div class="pv-container mb-3">'+
                      '<div class="pv-list-body">' +
                          '<a href="tel:'+ contactcall +'" class="btn btn-dashboard-outline py-3 w-100">Contact user</a>'+
                          '</div>'+
                      '</div>'+
                         
                  
                      '</div>';

                       }
                       else if(response.data.type_of_partnership === "volunteer"){
                        row += 
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Type:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.type_of_partnership +"</h4>"+
                        '</div>'+

                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Username:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.username +"</h4>"+
                        '</div>'+

                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Contact:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.contact +"</h4>"+
                        '</div>'+

                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Email Address:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.email_address +"</h4>"+
                        '</div>'+

                        '<div class="pv-container">'+
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">N.O.C:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.nature_of_collaboration +"</h4>"+
                        '</div>'+


                        '<div class="pv-container">'+
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Date:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.date +"</h4>"+
                        '</div>'+

                        '<div class="pv-container">'+
                        '<div class="pv-list-body ">' +
                            '<a href="mailto:'+ email_Call +'" class="btn btn-dashboard py-3 w-100">Email user</a>'+
                        '</div>'+
                    '</div>'+

                      '<div class="pv-container mb-3">'+
                      '<div class="pv-list-body">' +
                          '<a href="tel:'+ contactcall +'" class="btn btn-dashboard-outline py-3 w-100">Contact user</a>'+
                          '</div>'+
                      '</div>'+
                         
                  
                      '</div>';

                       }else if(response.data.type_of_partnership ==="institute"){

                        row += 
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Type:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.type_of_partnership +"</h4>"+
                        '</div>'+

                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Username:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.username +"</h4>"+
                        '</div>'+

                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Contact:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.contact +"</h4>"+
                        '</div>'+

                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Email Address:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.email_address +"</h4>"+
                        '</div>'+

                        '<div class="pv-container">'+
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">N.O.C:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.nature_of_collaboration +"</h4>"+
                        '</div>'+

                        '<div class="pv-container">'+
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Organization Name:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.organization_name +"</h4>"+
                        '</div>'+

                        '<div class="pv-container">'+
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Organization client position:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.organization_user_position +"</h4>"+
                        '</div>'+


                        '<div class="pv-container">'+
                        '<div class="pv-list-body">' +
                        '<h4 class="me-3 bvh-main">Date:</h4>'+
                         '<h4 class="me-4 bvh-small">'+response.data.date +"</h4>"+
                        '</div>'+

                        '<div class="pv-container">'+
                        '<div class="pv-list-body ">' +
                            '<a href="mailto:'+ email_Call +'" class="btn btn-dashboard py-3 w-100">Email user</a>'+
                        '</div>'+
                    '</div>'+

                      '<div class="pv-container mb-3">'+
                      '<div class="pv-list-body">' +
                          '<a href="tel:'+ contactcall +'" class="btn btn-dashboard-outline py-3 w-100">Contact user</a>'+
                          '</div>'+
                      '</div>'+
                         
                  
                      '</div>';
                        
                       }

                       $('#partners_full_list').append(row);

                       $('#Partnerslist').offcanvas('show');

                }

            
            })
        }
    });




    // view delete info
    $(document).on('click', '.delete-record', function(){
      var reference_d = $(this).data('reference');
     $('#deleteid').val(reference_d);
      $('#delete_category').fadeIn();
    });


    // delete info

    $(document).on('click', '#deletecall', function(){
        var reference_delete = $('#deleteid').val();
        var button = document.getElementById('deletecall');
        if(reference_delete == ""){
          return false;
        }else{
          $.ajax({
              url: pdelete,
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
                button.textContent = "Success"
             },
          })
        }
      });

})