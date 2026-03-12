$(document).ready(function(){
  $(document).on('click', '.item-edit', function(){
    var reference = $(this).data('reference');
    $('#gofundid').val(reference);
    $('#goidreview').text(reference);

    $.ajax({
      url: isactivelink,
      method: 'POST',
      data: {_token:csrf, reference:reference},
      success:function(response){
        console.log(response.data);
        // Check if response data is 'true' (as a string)
        var isactivetoggle = response.data === 'true';
        $('#toggle').prop('checked', isactivetoggle);

      }
    });
    $('#offcanvasEnd').offcanvas('show');

  });

  $('.toggle-checkbox').change(function() {
    var gofundid = $('#gofundid').val();
    var isChecked = $(this).is(':checked');

    $.ajax({
        url: activegofundme, // Assuming you have a route named 'toggle.save'
        method: 'POST',
        data: {
            '_token': csrf,
            'gofundid': gofundid,
            'status': isChecked ? "true" : "false" // Convert true/false to 1 or 0
        },
        success: function(response) {
           $('.toast').toast('show');
           $('#error_message').html(response.message);
        },
        error: function(xhr, status, error) {
            // Handle error if needed
        }
    });
  });
});
