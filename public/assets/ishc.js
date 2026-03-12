
$(document).ready(function(){
$('.btn-visibility-call').on('click', function(){
    $('.nav-view-controller-mobile').show();
})  
$('.ishc-dismiss-button').on('click', function(){
    $('.nav-view-controller-mobile').hide();
})
});

var initialTab = null;

function Toggle(tabNumber){
    var contentElement = document.getElementById('content' +tabNumber);

    console.log(contentElement);

    var arrowCall = document.getElementById('arrow' +tabNumber);
  
    var tabAll = document.querySelectorAll('.content-show');
    tabAll.forEach(function(tab){
        if(tab!==contentElement){
            tab.style.display = 'none';
            tab.classList.remove('bx-chevron-down');
          
        }
    }); 

    if(contentElement.style.display=="block"){
        contentElement.style.display = 'none';
        arrowCall.classList.remove('bx-chevron-up');
    }else{
        contentElement.style.display = 'block';
        arrowCall.classList.add('bx-chevron-up');

    }


}