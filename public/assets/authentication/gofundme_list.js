$(document).ready(function(){

    $('.post-button-dismiss').on('click', function(){
       $('#gofundmelists').fadeOut('');
    });
    // Use event delegation to attach the event listener to dynamically added elements
    $(document).on('click', '.info-go-call', function(){
        var email = $(this).data('id');

        $.ajax({
           url: allgofundmessage,
           method: 'POST',
           data: {_token:csrf, email:email},
           success:function(response){
            console.log(response.data.firstname);
            $('#gofocus').text(response.data.area_of_fundraising);
            $('#gofirstname').text(response.data.firstname);
            $('#golastname').text(response.data.lastname);
            $('#gocountry').text(response.data.country);
            $('#goreason').text(response.data.reason_of_fundraising);
            $('#goamount').text(response.data.amount);
            $('#godate').text(response.data.date);
            $('#gosubject').text(response.data.subject_means);
            $('#gostatus').text(response.data.status);

            $('#gofundmelists').show('');
           }
        });
       
    });


});