document.addEventListener('DOMContentLoaded', function(){

    var iconclicked = document.querySelector('.show-container-right');
    var password = document.getElementById('password');
    iconclicked.addEventListener('click', function(){
      const checkmate = password.getAttribute('type') == 'password' ? 'text' : 'password';
      password.setAttribute('type', checkmate);
      this.classList.toggle('bx-show');
    });
})