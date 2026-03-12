$(document).ready(function(){
    $('#submit').on('click', function(){
      var category_list = $('#categorylist').val();
      var email = $('#email_address').val();
      var name = $('#name').val();
      var contact = $('#phoneNumberInput').val();
      var noc = $('#noc').val();
      var organization = $('#organization').val();
      var country = $('#Countryid').val();
      var position = $('#position').val();
      var button = document.getElementById('submit');

      // var validationStatus = document.getElementById('validationStatus');
      // var set = validationStatus.textContent;

      // if(!set == 'Valid phone number'){
      //   console.log('Email not verified')
      //   $('.toast').toast('show');
      //   $('#error_message').html('Invalid Contact Number')
      //   return false;
      // }


      function dismisstimer(){
        $('.participate_container-pv').fadeOut();
      }


      if(contact.length < 8  && isNaN(contact)){
        console.log('Number isnt valid');
        return false
      }

      if(category_list == "institute" || category_list == "cooperate"){ 
        if(!EmailCheck(email)){
            $('.toast').toast('show');
            $('#email_error').html('Business mail Address not valid');
            return false
        }else if(email==""|| organization=="" || position==""){
            console.log('Business email needed');
        }
      }

      if(category_list == "volunteer" || category_list =="individual"){
        if(!UsualEmail(email)){
            $('.toast').toast('show');
            $('#email_error').html('Email address invalid');
            $('#error_message').html('Email Adress not valid');
            return false;
        }else{
          $('#email_error').html('');
        }

      }
      if(category_list == "" || email=="" || contact=="" || name=="" || noc==""){
        return false;
      }
    
      else{
        $.ajax({
            url: submitparticipate,
            method: 'POST',
            data:{_token: csrf, category_list:category_list, email:email, name:name,
            contact:contact,noc:noc, country:country,
            organization:organization, position:position},
            beforeSend:function(){
             button.disabled = true;
             button.textContent = "";
            },
            success:function(response){

              if(response.status == "success"){
                var count = 10;
                var countdown = setInterval(function(){
                   $('#timer').text('This modal will deactivate in the next  ' +count);
                   count--;
          
                   if(count==-1){
                    clearInterval(countdown);
                    dismisstimer();
                   }
                }, 1000);
                
                  console.log(response.message);
                  $('.div-content-send-alert').fadeIn();
              }
            },
            complete:function(){
                button.disabled = false;
                button.textContent = "upload information";
            }

      })
      }
    });

    function EmailCheck(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var freeEmailProviders = ['gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com', 'aol.com']; // Add more free email providers as needed

    if (!emailRegex.test(email)) {
        console.log('Please enter a valid email');
        return false;
    }

    var domain = email.split('@')[1];
    if (freeEmailProviders.includes(domain)) {
        console.log('Please use a professional email address');
        return false;
    }

    return true;
}

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
})