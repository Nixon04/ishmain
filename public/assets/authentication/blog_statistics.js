$(document).ready(function(){
   $('.post-dismiss-cat').on('click', function(){
      $('#blog_statistics').fadeOut();
   });

  $('.blog_stat-call').on('click', function(){
    $('#blog_statistics').fadeIn();
  });
});