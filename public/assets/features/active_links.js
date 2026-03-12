document.addEventListener('DOMContentLoaded', function(){
    const currenturl = window.location.pathname;

    console.log('current link '+ currenturl);
    var menuItems = document.querySelectorAll('.menu-item');


    menuItems.forEach(function(foreachentry){
        var link = foreachentry.querySelector('.menu-link');
        console.log(link)

        if(link.getAttribute('href').endsWith(currenturl)){
           foreachentry.classList.add('active-link-circle');
        
            // alert('information is true')
        }else{
            foreachentry.classList.remove('active-link-circle')
            // alert('information is true')
        }
    })
    console.log(window.location.href);
})