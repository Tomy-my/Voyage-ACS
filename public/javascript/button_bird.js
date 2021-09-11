document.addEventListener("DOMContentLoaded", function(){
    var el = document.querySelector(".button-bird");
    var cache = document.querySelector(".cache");
    var text = document.querySelector(".button-bird__text");
        el.addEventListener('click', function() {
          el.classList.toggle('active');
          cache.classList.toggle('active');

          if(el.classList.contains('active')){
              console.log('true');
              text.innerHTML = '';
          }else{
              text.innerHTML = '';
          }
      });
  });