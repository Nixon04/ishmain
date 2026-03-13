document.addEventListener('DOMContentLoaded', function(){
    const currenturl = window.location.pathname;
    const currentUrlString = window.location.href;

    console.log('current link '+ currenturl);
    var menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(function(foreachentry){
        var link = foreachentry.querySelector('.menu-link');
        console.log(link)

        if(link) {
            const href = link.getAttribute('href');
            const linkText = link.querySelector('.text')?.textContent || '';
            
            // Check if current URL ends with the href OR 
            // if we're on an editblog page AND this is the Events & Blogs menu item
            if(href.endsWith(currenturl) || 
               (currentUrlString.includes('/editblog/') && linkText.includes('Events & Blogs'))) {
               foreachentry.classList.add('active-link-circle');
               console.log('Active class added to:', linkText);
            } else {
               foreachentry.classList.remove('active-link-circle');
            }
        }
    })
    console.log(window.location.href);
});