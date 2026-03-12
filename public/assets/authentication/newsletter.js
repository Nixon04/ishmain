$(document).ready(function(){
    $('#updatecall').on('click', function(){
       var username = $('#lusername').val();
       var email  = $('#lemail').val();
       var button = document.getElementById('updatecall');

       if(username == "" || email==""){
        $('.flash-alert').show();
        $('#responsealert').html('Required field empty');
        return false;
       }

         else if(!UsualEmail(email)){
            $('.flash-alert').show();
            $('#responsealert').html('Invalid Email Address');
          return false;
       }

      else{
        $.ajax({
            url:newsletter,
            method: 'POST',
            data: {_token:csrf, username:username, email:email},
            beforeSend:function(){
             button.disabled = true;
             button.textContent = "";
            },
            success:function(response){
                $('.flash-alert').show();
                $('#responsealert').html(response.message);
                console.log(response.message);
            },
            complete:function(){
                button.disabled= false;
                button.textContent = "Subscribe";
          }
        })
       }
    });
})

function UsualEmail(email){
    var emailRegexcheck = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!emailRegexcheck.test(email)){
     console.log('email address not valid')
     $('.toast').toast('show');
     $('#error_message').html('Email Adress not valid');
     return false;
    }
    return true;
 }