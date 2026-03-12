



      // insert into database


      
$(document).ready(function(){
  $('#auth').click(function(){

      var button = document.getElementById('auth');
      var role = $('#role').val();
      var fullname= $('#fullname').val();
      var username = $('#username').val();
      var email = $('#email').val();
      var contact = $('#contact').val();
      var password = $('#password').val(); 
      
   
      if(username == "" || password=="" || email == "" || role=="" || contact == "" )
      {
         $('.toast').toast('show');
        $('#error_message').html("Required fields empty!");
        return false;
      }

      else if(!validateEmail(email)){
        $('.toast').toast('show');
        $('#error_message').html("Email incorrect");
        return false;
      }

      
      else{
          $.ajax({
           url: loginurl,
           method: 'POST',
           data:{_token:csrf, fullname:fullname, role:role,
               contact:contact, email:email, username:username, password:password},
             beforeSend:function(){
              button.disabled = true;
              button.textContent = "";
           },
           success:function(data){
              $('.toast').toast('show');
              $('#error_message').html(data.message);
                if(data.status=='success')
                {
                  window.location.href='login';
                }
           },
           complete:function(){
              button.disabled = false;
              button.textContent = "Login";
           }
          });
      }
  });
  
  });


  
$(document).ready(function(){
  $('#password').on('input', function(){
    validatepassword();
  });

  function validatepassword(){
    var password = $('#password').val();

    var errorpassword = $('#errorpass');

    if(password.length >= 8){
      errorpassword.text('');
    }
    else if(password.length < 8){
       errorpassword.text('password length must be 8');
     }
     
  }
});


function validateEmail(email) {
var re = /\S+@\S+\.\S+/;
return re.test(email);
}

$(document).ready(function() {
        $('#fullname').on('input', function() {
            Validatefullname();
        });
    });
    function Validatefullname() {
        var fullname = $('#fullname').val();
        var errormessage = $('#error');

        var parts = fullname.split(' ');

        console.log('parts ' +parts);
        if (parts.length >= 2) {
            var firstname = parts[0];

            console.log('first  ' +firstname);
            var lastname = parts.slice(1).join(' ');

            console.log('last name ' +lastname)

            // Check if both first and last names have a minimum length of 3 characters
            if (firstname.length >= 3 && lastname.length >= 3) {
                errormessage.text('');
                return true;
            } else {
                errormessage.text('Both first name and last name must have a minimum length of 3 characters.');
                return false;
            }
        } else {
            errormessage.text('Must have a length of 3 and above');
            return false;
        }
    }




