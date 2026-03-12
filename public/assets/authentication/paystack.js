
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack() {

   var monthly = $('input[name="radio"]:checked').val();
   var email_send = $('#email').val();
   var firstname = $('#first-name').val();
   var deposit = $('#donateamount').val();
   var ref_id = ''+Math.floor((Math.random() * 1000000000) + 1)
   var contactnumber = $('#contactnumber').val();
   
   function validatePhoneNumber(contactnumber) {
    // Regular expression to match phone numbers with optional country code
    var regex = /^(\+\d{1,3})?[- ]?\d{6,14}$/;

    // Test the input phone number against the regular expression
    return regex.test(contactnumber);
}

if (validatePhoneNumber(contactnumber)) {
    
    console.log("Valid phone number");
} else {
    $('.toast').toast('show');
         $('#error_message').html('Invalid Contact Number');
    return false;
}
   
   var country = $('#countrymode').val();
  
   if(monthly == "once" || monthly == "monthly" || contactnumber==""){
       
   }else{
         $('.toast').toast('show');
         $('#error_message').html('Choose either once or recurring monthly');
        return false
   }
   
       
 
   if(email_send == "" || monthly == "" || firstname == "" || deposit ==""){
    $('.toast').toast('show');
    $('#error_message').html('Please select payment means');
    return false;
   }else{
    $.ajax({
       url: paymentupdate,
       method: 'POST',
       data: {_token: csrf, email_send:email_send,
         firstname:firstname, ref_id:ref_id, country:country,
         monthly:monthly, deposit:deposit, contactnumber:contactnumber},
         beforeSend:function(){

         },
         success:function(response){
          $('.paymentviewcollection').fadeOut();
          console.log(response.message);
         }
    });
   }
   
//   e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_cbd2e3f400d5a661c40dfa7eea0ba6cfc1ffd41a', // Replace with your public key
    email: document.getElementById('email').value,
    currency: 'NGN',
    amount: document.getElementById('donateamount').value * 100,
    ref: ref_id , // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    onClose: function(){
     $('.toast').toast('show');
     $('#error_message').html('session destroyed, transaction denied!');
    },
    callback: function(response){
      $('.thankyoudonor_container').fadeIn();
    }

  });
  handler.openIframe();

}
