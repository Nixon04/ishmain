$(document).ready(function(){
 $('#paste').on('click', function(){
    cname = $('#cname').val();
    email = $('#cemail').val();
    contact = $('#ccontact').val();
    message = $('#cmessage').val();
    var button = document.getElementById('paste');
    if(cname=="" || email=="" || contact=="" || message==""){
        $('.toast').toast('show');
        $('#error_message').html('Required input field empty');
        console.log('Required Field empty');
        return false;
    }else{
        $.ajax({
            url: email_link,
            method: 'post',
            data: {_token:csrf, cname:cname, email:email, contact:contact, message:message},
            beforeSend:function(){
             button.disabled = true;
             button.textContent = "";
            },
            success:function(response){
                $('.toast').toast('show');
                $('#error_message').html(response.message);
                console.log(response.message)
            },
            complete:function(){
             button.disabled=false;
             button.textContent = "Submit";
            }
        })
    }
 });
})