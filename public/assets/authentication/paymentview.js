  // Get the custom input field
  var customInput = document.getElementById("custom_call");
  // Get all radio buttons with class "pay-form"
  var radioButtons = document.querySelectorAll(".pay-form");
  // Add event listener to each radio button
  radioButtons.forEach(function(radioButton) {
      radioButton.addEventListener("change", function() {
        //  customInput.value = "";
      });
  });
  // Add event listener to the custom input field
  customInput.addEventListener("input", function() {
      // If the custom input field has any value, unselect all radio buttons
      radioButtons.forEach(function(radioButton) {
          radioButton.checked = false;
      });
  });

  $('.fw-left-dismiss').on('click', function(){
     $('.thankyoudonor_container').fadeOut();
  })
  $('.thanksforall').on('click', function(){
    $('.thankyoudonor_container').fadeOut();
 })


$(document).ready(function(){
    
    
       // Fetch user's country based on IP using ipapi API
              fetch('https://ipapi.co/json/')
              .then(response => response.json())
              .then(data => {
                  const userCountry = data.country_name || 'Unknown';
                  $('#countrymode').val(userCountry);

              })
              .catch(error => console.error('Error fetching user country:', error));
              
       $('#previewdonate').on('click', function(){
         var id_donate = $('.pay-form:checked').val();
         if(id_donate === undefined){
           var customAmount = $('#custom_call').val().trim();
           if(customAmount === ""){
           $('.toast').toast('show');
           $('#error_message').html('Amount needed');
          console.log('response not valid')
          return false;
           }else{
            $('#donateamount').val(customAmount);
            $('.paymentviewcollection').fadeIn();
           }
         }else{
           $('#donateamount').val(id_donate);
          $('.paymentviewcollection').fadeIn();
         }
       });

        $('#fil').on('click', function(){
           console.log('clicked');
         $('.paymentviewcollection').fadeOut();
       });
    })
