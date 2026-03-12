// document.addEventListener('DOMContentLoaded', function(){
//     var image = document.getElementById('HeroImage');
//     var imagenames = ['reaching_out.png', 'image3.png'];

//     var index = 0;

//     function fadeOutAndIn(){
//         image.style.transition ='opacity 3s';
//         image.style.opacity = 0;

//         setTimeout(function(){
//           index = (index + 1) % imagenames.length;
//           image.src=imageurl + imagenames[index];
//           console.log(index)
          
//           image.style.opacity = 1;
//           image.style.zIndex=-1;
//         }, 5000);
//     }

//     setInterval(fadeOutAndIn, 3000);
// })