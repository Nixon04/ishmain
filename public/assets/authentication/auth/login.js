



      // insert into database


      
      $(document).ready(function(){
        $('#auth').click(function(){
      
            var button = document.getElementById('auth');
            var username= $('#username').val();
            var password = $('#password').val(); 
            if(username == "" || password=="" )
            {
               $('.toast').toast('show');
              $('#error_message').html("Required fields empty!");
              return false;
            }
   
            else{
                $.ajax({
                 url: loginurl,
                 method: 'POST',
                 data:{_token:csrf, username:username, password:password},
                   beforeSend:function(){
                    button.disabled = true;
                    button.textContent = "";
                 },
                 success:function(data){
                    $('.toast').toast('show');
                    $('#error_message').html(data.message);
                      if(data.status=='success')
                      {
                        window.location.href='../dashboard/home';
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
      
      
    