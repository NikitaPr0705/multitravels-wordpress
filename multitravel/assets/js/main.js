/**
  * название функции
  *
  * @param {number} first - первое число
  * @returns {number}
  */


 
 

document.querySelectorAll('.tabs-triggers__item').forEach((item) =>
  item.addEventListener('click', function (e) {

    if(item.classList.contains('no-scroll-js')) {
        e.preventDefault();
        const id = e.target.getAttribute('href').replace('#', '');


        document.querySelectorAll('.tabs-triggers__item').forEach((child) => 
        child.classList.remove('tabs-triggers__item--active'))
        document.querySelectorAll('.tabs-content__item').forEach((child) => 
        child.classList.remove('tabs-content__item--active'))
    
        item.classList.add('tabs-triggers__item--active');
        document.getElementById(id).classList.add('tabs-content__item--active');
    } 
   
  })
 );

 document.querySelector('.tabs-triggers__item').click();

 



 let scrollToTop = document.getElementById("myBtn");

 window.onscroll = function() {scrollFunction()};
 
 function scrollFunction() {
     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
         scrollToTop.style.display = "block";
     } else {
         scrollToTop.style.display = "none";
     }
 }
 
 
 // When the user clicks on the button, scroll to the top of the document
 // function topFunction() {
 //     document.body.scrollTop = 0;
 //     document.documentElement.scrollTop = 0;
 // }



 
 function animateToTop() {
   
    window.scroll({ top: 0, left: 0, behavior: 'smooth' });
}


scrollToTop.addEventListener('click', animateToTop());



let openModalBtn = document.querySelectorAll('.open-modal-js');
let modalWindow = document.querySelector('.modal-outer');
let closeModal = document.querySelector('.close');
let closeModalLink = document.querySelector('.close-btn');

openModalBtn.forEach((btn) => {
    btn.addEventListener('click', (e) => {
        modalWindow.classList.add('__visible');
    })
})

closeModal.addEventListener('click', (e) => {
    modalWindow.classList.remove('__visible');
})

closeModalLink.addEventListener('click', (e) => {
  modalWindow.classList.remove('__visible');
})


let tabsTrigger = document.querySelectorAll('.tabs-triggers__item');

$(document).ready(function(){
  // Добавить плавную прокрутку до всех ссылок
  $("a").on('click', function(event) {

      for(let i = 0; i < tabsTrigger.length; i++) {
          if(event.target.classList.contains('tabs-triggers__item') || event.target.classList.contains('fancybox-link')) {
              return;
          }
      }
      // Убедись в этом что .hash имеет значение перед переопределением поведения по умолчанию
      if (this.hash !== "") {
          // Запретить поведение щелчка якоря по умолчанию
          event.preventDefault();

          // Хранить хэш
          var hash = this.hash;

          // Использование метода animate() jQuery для добавления плавной прокрутки страницы
          // Необязательное число (800) указывает количество миллисекунд, необходимых для прокрутки до указанной области
          $('html, body').animate({
              scrollTop: $(hash).offset().top
          }, 800, function(){

              // Добавить хэш (#) для URL-адреса после завершения прокрутки (поведение щелчка по умолчанию)
              window.location.hash = hash;
          });
      } // Конец, если
  });
});
//# sourceMappingURL=main.js.map



let formSentBlock = document.querySelector('.ready-form.__reviews-form');
let formSentBlockModal = document.querySelector('.ready-form.__modal');
let formReviewsBlock = document.querySelector('.form-block__inner-wrapper.__reviews-form');
let formModalBlock = document.querySelector('.form-block__inner-wrapper.__modal');

let checkboxWrapper = document.querySelectorAll('.form-block__checkbox-wrapper');
let checkInput = document.querySelectorAll('.check__input');

for(let i = 0; i <checkInput.length; i++) {
    checkInput[i].addEventListener('click', function() {
    for(let i = 0; i <checkboxWrapper.length; i++) {
        checkboxWrapper[i].classList.toggle('__checked');
        }
    })
}



document.addEventListener('wpcf7mailsent', function (event) {
	if ('37' == event.detail.contactFormId) {
        formSentBlock.classList.remove('visually-hidden');
        formReviewsBlock.classList.add('visually-hidden');
		// $('.form-success').addClass('show');

	} else if ('38' == event.detail.contactFormId) {
        formSentBlockModal.classList.remove('visually-hidden');
        formModalBlock.classList.add('visually-hidden');
		// $('.form-success').addClass('show');

	}
}, false);


function copytext(el) {
    var $tmp = $("<textarea>");
    $("body").append($tmp);
    $tmp.val($(el).text()).select();
    document.execCommand("copy");
    $tmp.remove();
}

let burgerItem = document.querySelectorAll('.hamburger-menu .menu__item');

for(let i = 0; i < burgerItem.length; i++) {
    burgerItem[i].addEventListener('click', function() { 
        document.querySelector('.hamburger-menu input').checked = false;
    
    }) 
}


let acc = document.getElementsByClassName("accordion");



for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        [].forEach.call(acc, function(el) {
            el.classList.remove("active");
            let panel = el.nextElementSibling;
            panel.style.maxHeight = null;
        });

        this.classList.toggle("active");

        let panel = this.nextElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}
