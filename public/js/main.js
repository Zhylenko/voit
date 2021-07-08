window.addEventListener('DOMContentLoaded', ()=>{

        accrodionMenu();
        programmMenu();
        modal('.overlay__popup','popup-btn', '.popup__close','.popup__login');
        postContactFormRequests('contact-form', '.form-control', '.form-error', config.endPoints['contact-send']);
        postLoginFormRequests('login-form', '.form-control', '.form-error' , config.endPoints['auth-login']);
        postRegisterEmailRequests('register-form', '.form-control', '.form-error', config.endPoints['auth-register']);
        addTimer('timer');
        registerModal('register-btn','.popup__reg', '.popup__login');
        mobileMenu('.menu-hamburger', '.menu', '.menu__link');
        registerWithCode('register-form', '.form-control', '.form-error', config.endPoints['auth-login']);
});


let token = 0;
if(document.querySelector('meta[name="csrf-token"]') !== null) {
        token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
}

function loadAboutPost(ext, url) {
        $.ajax({
                url: url,
                cache: false,
                success: function(html) {
                        ext.html(html);
                }
        });
}

/* ------------------------------------------------------------------------------------------------------------------ */
/* jQueary Main Function */
$(function(){

        const media = window.matchMedia('(max-width: 768px)');
        
        function scrollFixed() {
                $(window).on('scroll', function(){
                
                        if($(window).scrollTop()) {
                                if(media.matches) {
                                    $('.mobile-menu.fix').addClass('fixed');  
                                    $('.empty').addClass('active');  
                                } else {
                                        $('.header__top.fix').addClass('fixed'); 
                                        $('.fullback.fix').addClass('active');
                                        $('.article-offer.fix').addClass('active');
                                }
                        } else {
                                $('.empty').removeClass('active');
                                $('.mobile-menu.fix').removeClass('fixed');  
                                $('.header__top.fix').removeClass('fixed');
                                $('.fullback.fix').removeClass('active');
                                $('.article-offer.fix').removeClass('active');
                        }
        
                        $('a[href*="#home"]').on('click', function() {
                                $('.empty').removeClass('active');
                                $('.mobile-menu.fix').removeClass('fixed');  
                                $('.header__top.fix').removeClass('fixed');
                                $('.fullback.fix').removeClass('active');
                                $('.article-offer.fix').removeClass('active');     
                        })
                });
        }

        function slickSlider() {
                $('.feedback__slider').slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                        prevArrow: '<button class="slider-btn slider-btn__left"><img src="./img/arr-left.svg" alt=""></button>',
                        nextArrow: '<button class="slider-btn slider-btn__right"><img src="./img/arr-right.svg" alt=""></button>',
        
                        responsive: [{
        
                                breakpoint: 1440,
                                settings: {
                                        slidesToShow: 2,
                                },
        
                        }, {
                                breakpoint: 913,
                                settings: {
                                        slidesToShow: 1,
                                },
                        }],
        
                });
        }


        // loadAboutPost($('.accordion__item-desc').first(), endPoints['about-menu']);
        scrollFixed();
        slickSlider();
        
});
/* ------------------------------------------------------------------------------------------------------------------ */


function clearErrors(inputsError, labelError) {

        labelError.forEach(item => {
                item.style.display = 'none';
        });

        inputsError.forEach(item => {
                if(item.classList.contains('._error')) {
                        item.classList.remove('._error');
                }
        });
}

/* ------------------------------------------------------------------------------------------------------------------ */
/* POST Requests */
function postContactFormRequests(form, formReq, errorLabelsClass ,url) {

    const contactForm = document.getElementById(form),
          contactReq = document.querySelectorAll(formReq),
          label = document.querySelectorAll(errorLabelsClass),
          regRoad = document.querySelectorAll('.popup__reg-content'),
          check_group = document.querySelector('.form__gr-check');

    let checkDiv = createNewDiv('form-error checkbox-error');
    checkDiv.textContent = 'Необходимо заполнить пустое поле';

    if(contactForm!== null) {
        check_group.children[0].append(checkDiv);
        contactForm.addEventListener('submit', formSend);
    } 

    async function formSend(e) {
        e.preventDefault();

        const checkError = document.querySelector('.checkbox-error');
        checkError.style.display = 'none';

        clearErrors(contactReq, label);

        if(contactForm.id !== 'contact-form') {
                regRoad[0].style.display = 'none';
                regRoad[1].style.display = 'block'; 
        } 

        let formData = new FormData(contactForm); 
        contactForm.classList.add('_sending');

                let response = await fetch(url, {
                        method: 'POST',
                        body: formData,
                        headers: new Headers({
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': token
                        })
                });

                if(response.ok) {

                        contactForm.classList.remove('_sending');
                        contactForm.classList.add('active');
                        Reset(contactForm);
                        location.reload();

                } else {                       
                        let result = await response.json();
                            
                        for(let error in result.errors) {
                                
                                for(let index = 0; index < contactReq.length; index++) {

                                        if(contactReq[index].name === error) {

                                                if(error === 'checkbox') {
                                                        checkError.textContent = result.errors[error];
                                                        checkError.style.display = 'block';

                                                } else {

                                                        contactReq[index].classList.add('._error');
                                                        label[index].textContent = result.errors[error];
                                                        label[index].style.display = 'block';
                                                }  
                                        }
                                }
                        }
                        contactForm.classList.remove('_sending');
                }
        }
}

function postLoginFormRequests(formID, reqsInputs, errorLabelsClass, url) {

        const form = document.getElementById(formID),
              inputs = document.querySelectorAll(reqsInputs),
              label = document.querySelectorAll(errorLabelsClass);

        if(form !== null) form.addEventListener('submit', formSend);

        async function formSend(e) {
                e.preventDefault();

                clearErrors(inputs, label);

                let dataForm = new FormData();
                dataForm.set('email', inputs[0].value);
                dataForm.set('password', inputs[1].value);
                form.classList.add("_sending");
                       
                        let response = await fetch(url, {
                                method: 'POST',
                                body: dataForm,
                                headers: new Headers({
                                        'Accept': 'application/json',
                                        'X-CSRF-TOKEN': token
                                })
                        });
    
                        if(response.ok) {

                                form.classList.remove("_sending");
                                Reset(dataForm);
                                location.reload();

                        } else {                       
                                let result = await response.json();
                            
                                for(let error in result.errors) {
                                        
                                        for(let index = 0; index < inputs.length; index++) {

                                                if(inputs[index].name === error) {
                                                       
                                                        inputs[index].classList.add('._error');
                                                        label[index].textContent = result.errors[error];
                                                        label[index].style.display = 'block';
                                                
                                                }
                                        }
                                }
                                form.classList.remove("_sending");
                        }
        }
}

function postRegisterEmailRequests(formID, inputsReqClass, errorLabelsClass ,url) {

    const form = document.getElementById(formID),
          inputs = document.querySelectorAll(inputsReqClass),
          btns = document.querySelectorAll('.register'),
          sendCodeButton = btns[0],
          registerButton = btns[1],
          label = document.querySelectorAll(errorLabelsClass);

    if(form !== null) form.addEventListener('submit', formSend);

    async function formSend(e) {
        e.preventDefault();

        clearErrors(inputs, label);
        
                let dataForm = new FormData();
                dataForm.set('email', inputs[2].value);
                form.classList.add('_sending');

                let response = await fetch(url, {
                        method: 'POST',
                        body: dataForm,
                        headers: new Headers({
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': token
                        })
                });

                if(response.ok) {

                        form.classList.remove('_sending');

                        inputs[3].style.display = 'block';
                        sendCodeButton.style.display = 'none';
                        registerButton.style.display = 'block'; 

                        $('.js-timeout').show();
                        $('.js-timeout').text(config.password_timeout);
                        countdown();

                } else {                       
                        let result = await response.json();

                        for(let error in result.errors) {
                                
                                if(error === 'email') {
                                        inputs[2].classList.add('._error');
                                        label[2].textContent = result.errors[error];
                                        label[2].style.display = 'block';
                                } 
                        }
                        form.classList.remove('_sending');      
                }
        }
}
/* ------------------------------------------------------------------------------------------------------------------ */


function createNewDiv(setClass) {

        let newDiv = document.createElement('div');
        newDiv.setAttribute('class', setClass);
        
        return newDiv;
}

// Mobile Menu
function mobileMenu(buttonClass, menuClass, menuLinksClass) {

        const btn = document.querySelector(buttonClass),
              menu = document.querySelector(menuClass),
              links = document.querySelectorAll(menuLinksClass);

        let isOpen = true;

        btn.addEventListener('click', (e) => {
                e.preventDefault();

                if(isOpen) {
                        btn.classList.add('active');
                        menu.classList.add('active');
                        document.querySelector('body').style.overflowY = 'hidden';
                        isOpen = false;
                } else {
                        btn.classList.remove('active');
                        menu.classList.remove('active');
                        document.querySelector('body').style.overflowY = 'scroll';
                        isOpen = true;
                }
        })

        links.forEach((link) => {
                link.addEventListener('click', () => {
                        btn.classList.remove('active');
                        menu.classList.remove('active');
                        document.querySelector('body').style.overflowY = 'scroll';
                        isOpen = true;  
                });
        })
}


// Accordion About Menu
function accrodionMenu() {

        let items = document.querySelectorAll('.accordion__item');

        for (let i=0; i<items.length; i++) {
                items[i].addEventListener('click', ()=>{
                        
                        // loadAboutPost($(items[i]), endPoints['about-menu']);

                        if(!(items[i].classList.contains('active'))) {
                                let activeNode = null;
                                try{
                                        activeNode = document.querySelector('.about__accordion .active');
                                } catch(msg) {}
                                
                                items[i].classList.add('active');

                                if(activeNode) {
                                        activeNode.classList.remove('active');
                                }
                        }
                })
        }
}

// Programm Section - Sub Menu
function programmMenu() {
        
        const media = window.matchMedia('(max-width: 913px)');

        let items = document.querySelectorAll('.programm__menu-item');
        let btn = document.querySelectorAll('.programm__menu-btn');

        for (let i=0; i<btn.length; i++) {
                btn[i].addEventListener('click', ()=>{
                        
                        if(items[i].classList.contains('active')) {
                                if(!(media.matches)) {
                                        items[i].classList.remove('active');
                                }  
                        } else {
                                let activeNode = null;
                                try{
                                        activeNode = document.querySelector('.programm__menu .active');
                                        activeButton = document.querySelector('.programm__menu .up');
                                } catch(msg) {}

                                if (media.matches) {
                                        items[i].classList.add('active');
                                        btn[i].classList.add('up');
                                } else {
                                        setTimeout(()=>{
                                                items[i].classList.add('active');
                                        },800);                
                                }

                                if(activeNode) {
                                        activeNode.classList.remove('active');
                                }

                                if(activeButton) {
                                        activeButton.classList.remove('up');
                                }
                        }
                })
        }
}

// MODAL 
function modal(popup, button, closeButton, displayModal) {

        const popupWindow = document.querySelector(popup),
              popupBtn = document.getElementsByClassName(button),
              popupCls = document.querySelectorAll(closeButton),
              displayPopup = document.querySelector(displayModal);

        const header = document.querySelector('article');
        const header_top = document.querySelector('.header__top');
        const styleHeader = getComputedStyle(header);
        const scroll = calcScroll();
        const media = window.matchMedia('(max-width: 769px)');

        if(popupBtn != null && popupWindow !== null) {

                [].forEach.call(popupBtn, (btn)=>{

                        btn.addEventListener('click', (but)=>{

                                popupWindow.classList.add('active');
                                displayPopup.style.display = 'block';

                                document.body.style.overflowY = 'hidden';
                                document.body.style.marginRight = `${scroll}px`;

                               
                        });
                })
               
        }

        if(popupCls != null) {

                popupCls.forEach((item) => {
                        item.addEventListener('click', ()=>{

                                removePopup(popupWindow, styleHeader, media);
                                
                        })
                })

        }

}

// Register Popup
function registerModal(buttonID, modalClass, loginModal) {

        const openBtn = document.getElementById(buttonID),
              modal = document.querySelector(modalClass),
              login = document.querySelector(loginModal);

        if(openBtn !== null) {
                openBtn.addEventListener('click',() => {
                        login.style.display = 'none';
                        modal.style.display= 'block';
                })
        }
}

function removePopup(window, style, mediaMatch) {
        
        const popupWindow = window,
              styleHeader = style,
              media = mediaMatch;

        const regModal = document.querySelector('.popup__reg');
        const loginForm = popupWindow.children[0].children[1];
        const registerForm = popupWindow.children[1].children[1];
        const codeInput = document.querySelector('._code');
        const inputs = document.querySelectorAll('input');
        const btns = document.querySelectorAll('.register'),
              timer = document.getElementById('timer');

              inputs.forEach((input) => {
                      if(input.classList.contains('_error')) {
                              input.classList.remove('_error');
                      }
              })

              popupWindow.classList.remove('active');
              regModal.style.display = 'none';
              codeInput.style.display = 'none';
              btns[0].style.display = 'block';
              btns[1].style.display = 'none';
              timer.display = 'none';
              $('.js-timeout').text(config.password_timeout);
              $('.js-timeout').hide();
              Reset(loginForm);
              Reset(registerForm);

              if(styleHeader.minHeight === '0px') {
                      document.body.style.overflowY = 'scroll';
                      document.body.style.marginRight = '0px';
              }

              if(media.matches) {
                      document.body.style.position = 'relative';
              }

}

function calcScroll() {
        
        let div = document.createElement('div');

        div.style.width = '50px';
        div.style.height = '50px';
        div.style.overflowY = 'scroll';
        div.style.visibility = 'hidden';

        document.body.appendChild(div);

        let scrollWidth = div.offsetWidth - div.clientWidth;
        div.remove();

        return scrollWidth;
}


function Reset(form) {
        form.reset();
}


// Register with Code Function
function registerWithCode(formID, inputsReqClass, errorLabelsClass, url) {

        const form = document.getElementById(formID),
              inputs = document.querySelectorAll(inputsReqClass),
              btns = document.querySelectorAll('.register'),
              sendCodeButton = btns[0],
              registerButton = btns[1],
              label = document.querySelectorAll(errorLabelsClass);

        if(form !== null) {
                registerButton.addEventListener('click', formSend);
        }

        async function formSend(e) {
                e.preventDefault();

                label.forEach(item => {
                        item.style.display = 'none';
                })
        
                inputs.forEach(item => {
                        if(item.classList.contains('._error')) {
                                item.classList.remove('._error');
                        }
                })

                    let dataForm = new FormData();
                    dataForm.set('email', inputs[2].value);
                    dataForm.set('password', inputs[3].value);

                    let response = await fetch(url, {
                            method: 'POST',
                            body: dataForm,
                            headers: new Headers({
                                    'Accept': 'application/json',
                                    'X-CSRF-TOKEN': token
                            })
                    });
    
                    if(response.ok) {

                            inputs[3].style.display = 'none';
                            sendCodeButton.style.display = 'block';
                            registerButton.style.display = 'none'; 

                            Reset(form);
                            location.reload();

                    } else {                       
                            alert('Ошибка');
    
                                for(let key in result.errors) {
                                        
                                        if(key === 'email') {
                                                inputs[2].classList.add('._error');
                                                label[2].textContent = result.errors[key];
                                                label[2].style.display = 'block';
                                        } 
                                        if(key === 'code') {
                                                inputs[3].classList.add('._error');
                                                label[3].textContent = result.errors[key];
                                                label[3].style.display = 'block';
                                        }
        
                                }
                             
                    }
    
        }

}

function addTimer(btnID) {
        const btn = document.getElementById(btnID);
        if(btn !== null) {
                btn.addEventListener('click', () => {
                        $('.timer').hide();   
                        $('.js-timeout').show();
                        $('.js-timeout').text(config.password_timeout);
                        countdown();
                });
        }

}

var interval;

function countdown() {
  clearInterval(interval);
  interval = setInterval( function() {
      var timer = $('.js-timeout').html();
      var minutes = 0;
      if(timer > 60) {
         minutes = (timer/60).toFixed(0);
      }
      var seconds = timer;
      seconds -= 1;
      if (minutes < 0) {
        return;
      } 
      else if (seconds < 0 && minutes != 0) {
          minutes -= 1;
          seconds = 59;
      }
      else if (seconds < 10 && length.seconds != 2) seconds = seconds;

      $('.js-timeout').html(seconds);

      if (minutes == 0 && seconds == 0) {
        $('.js-timeout').hide();
        $('.timer').show();   
        clearInterval(interval);
      } 
  }, 1000);

}