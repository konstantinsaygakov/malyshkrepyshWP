window.addEventListener('DOMContentLoaded', () => {
    'use strict';
    //hamburger
    const list = document.querySelector('.header__list'),
        menuItem = document.querySelectorAll('.header__item'),
        hamburger = document.querySelector('.hamburger');

    function toggleClassActive () {
        hamburger.classList.toggle('hamburger_active');
        list.classList.toggle('header__list_active');
    }

    hamburger.addEventListener('click', toggleClassActive);

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            toggleClassActive();
        });
    });

    list.addEventListener('touchenter', (e) => {
        if(e.target === list) {
            toggleClassActive();
        }
    });

    //tabs 

    const tabsParents = document.querySelector('.catalog__tabs'),
          catalogTab = document.querySelectorAll('.catalog__tab'),
          catalogContent = document.querySelectorAll('.catalog__content_active'),
          adressPageCatalog = document.location.pathname;

    /* if(!tabsParents) { 
        return;
    } */ //проверка есть ли этот элемент сейчас на странице, эта проверка нужна для устранения ошибок на страницах где не используется скрипт

    function hideTabs () {
        catalogContent.forEach(item => {
            item.classList.add('hide');
            item.classList.remove('show');
        });

        catalogTab.forEach(item => {
            item.classList.remove('catalog__tab_active');
        });
        
    }

    function showTabs (i = 0) {
            catalogContent[i].classList.add('show');
            catalogContent[i].classList.remove('hide');

            catalogTab[i].classList.add('catalog__tab_active');
    }

    if(adressPageCatalog == '/katalog/') {
        hideTabs();
        showTabs();
    }
    
    if(adressPageCatalog == '/katalog/') { //проверка если строка пути совпадает с каталог то назначить обработчик
        tabsParents.addEventListener('click', (event) => {
            const target = event.target;
    
            if(target && target.classList.contains('catalog__tab')) {
                catalogTab.forEach((item, i) => {
                    if(target == item) {
                        hideTabs();
                        showTabs(i);
                    }
                });
            }
        });
    }
    
    //Modal

    const btnConsult = document.querySelectorAll('[data-modal="consultation"]'),
          btnClose = document.querySelectorAll('.modal__close'),
          overlay = document.querySelector('.overlay'),
          main = document.querySelector('#main'),
          btnOrder = document.querySelectorAll('[data-button="btn"]'),
          modal = document.querySelectorAll('.modal'),
          catalogTitle = document.querySelectorAll('.catalog__title'),
          modalDescr = document.querySelectorAll('.modal__descr'),
          btnMiniParent = document.querySelectorAll('.catalog__item-footer');

    function modalOpen (elem) {
        overlay.style.display = 'block';
        elem.style.display = 'block';
        main.classList.add('body-disactive');
    }

    function getText (i, modal) {
        modalDescr[modal].innerText = catalogTitle[i].textContent;
    }

    function modalClose () {
        overlay.style.display = 'none';
        modal.forEach(item => {
            item.style.display = 'none';
        });
        main.classList.remove('body-disactive');
    }

    btnConsult.forEach(item => {
        item.addEventListener('click', () => {
            modalOpen(modal[0]);
        });
    });

    btnMiniParent.forEach((item, i) => {
        item.addEventListener('click', (e) => {
            const target = e.target;

            if(target && target.classList.contains('button_mini')) {
                btnOrder.forEach((item, i) => {
                    if(item === target) {
                        modalOpen(modal[1]);
                        getText(i, 0);
                    }
                });
            } else if(target && target.classList.contains('button_lacquer')) {
                btnOrder.forEach((item, i) => {
                    if(item === target) {
                        modalOpen(modal[2]);
                        getText(i, 1);
                    }
                });
            } else if(target && target.classList.contains('button_color')) {
                btnOrder.forEach((item, i) => {
                    if(item === target) {
                        modalOpen(modal[3]);
                        getText(i, 2);
                    }
                });
            } else if(target && target.classList.contains('button_swing')) {
                btnOrder.forEach((item, i) => {
                    if(item === target) {
                        modalOpen(modal[4]);
                        getText(i, 3);
                    }
                });
            }
        });
    });

    btnClose.forEach(item => {
        item.addEventListener('click', () => {
            modalClose();
        });
    });

    overlay.addEventListener('click', (e) => {
        if(e.target === overlay) {
            modalClose();
        }
    });
    
});

jQuery(document).ready(function($) {

    //slider-reviews
    $('.slider-reviews__content').slick({
        speed:1200,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="50" viewBox="0 0 31 50"><defs><image id="2mkab" width="31" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAyCAYAAACknADRAAACQklEQVRYR82YPWsUURSGnzNhBRtbf4SlIQmIYhZMoVGwSJpUdopaKxaChcRaJJWVaKWghQo22mUmAdEi2tn4AYJYiJAUyr4yiyM3m132fszsuOXsnXne894zd845RoO/Ag7L7A5wCHhv0sU5eF0hrSl2AfMyewIccBjbmXR6Fl6W1xqBb0C3Z/YU2D8kuJ1MWiwF1A4fA6607Ji0UCt8A071zB6OiHiXCQZva4PncAazR0DHM49+1gKPAJfJ9iIZvg5LZvYgIOLSmC896UgSPIcVzO4BmafV5bIPv6XuUfgYDY8Fm3R8Dj5Hv+cFnJPZ3dCIXXAUPIcLmK0F2Ny3ehAcDI8Eb01JJ2bg66Bg7z3P4TJmtwMj3voldY/Bt2H3ecELuCqz1TrBXrY3BR4Lz+EaZjcDI97MpJOz8H3cfSNtz7PsFtKVcQ8Y+H+zIy1Mww+f+4bCJwHeY7vAiixbbTriPWXUX/Aa0nkfy5w1rzrSWV+r3Wf3bU8EL07DdqDg/nJrC9yHr8N1M7sRqLy0Ojrif3uem5Vn7kFfuODZPmk51updex4KB553pKVa4K3a3mrCtfqqVQmQ6ED8IeNm4KTO9ZGf1EkJ+P8+qdU2tFZMVAJaK6OaFuBVvZYiWiudnRyI6VbSm4ZEAentkpMD7TSKjgNRvXlyi5wqYEqan4FP3tk+qtLJYRmz+xMfizgOhE6i6hkIJQioZxRWCQgZAgJvkvd8MBdaG386DrQz+B0Q8HjiI2/nJHSH/e9MuuQO+/8APxJMvKuFb74AAAAASUVORK5CYII="/><clipPath id="2mkaa"><path d="M0 50V0h31v50z"/></clipPath><clipPath id="2mkac"><path fill="#fff" d="M0 50V0h31v50z"/></clipPath></defs><g><g><g clip-path="url(&quot;#2mkaa&quot;)"><use xlink:href="#2mkab"/></g><path fill="none" stroke="#707070" stroke-miterlimit="20" stroke-width="2" d="M0 50v0V0v0h31v50z" clip-path="url(&quot;#2mkac&quot;)"/></g></g></svg></button>',
        nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="50" viewBox="0 0 31 50"><defs><image id="jldzb" width="30" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAyCAYAAABLXmvvAAAB6klEQVRYR9XYL08cQRjH8e+PZAUpoIpqahokKEhQRRBKTYMiFTSp5a2geBEIBMGBKG2ABLFHwbW8A1yrCAmiR/che+yR6x3Lzc7sn3LqxOx8dp75s888oud3CsuJtCl4DRy2zdYX4Hdvm7L+q9tRC1aQdoGop/OLttliFXgHzkG7fiW4vsNiIn3pG2l/REvH1ZJ+ADMOc1cqnsLXwJgDnDb5GZm9nYMrx/a5zVL4G7BUoKOzyGw5FNc5vLmVToBXdeKdVR3DlKQYmKwLf9jHMcxIOgJe1oE/wNnIffA4Mns3BzcFXph/4AD8ODL7UAQfgFP8FGbtPuwTBUZRCH8Uzo7ReaSvVeG5cNX4k3APfgi8cA274GDMbGUa/uQ9MxROH8w+JPvAqCsO7I2brebhTnAVuDNcNl4Izvb5e0l7Q77f/TMyEPbCsEPG8vgykHYuk2TtI/xNG3jBAfj2ZZJ8TnFvOBQPgjP8E9IWMOK61UzaCIY98V/PF25B/aEechHI21adle0d6hDUezt5omEHSAz1H5llfh6d57hM1PmsLht1gluQJn31pj4ZWkmm+X+lt40k9J6Xt0K3iIHF5YmGXdo8Ue/qQHMX88ZKEY0VX5osNzVTYGuspOiQmJdaSuwmYs2WjbtvUWeh/A5Dhzui592UyAAAAABJRU5ErkJggg=="/><clipPath id="jldza"><path d="M0 50V0h31v50z"/></clipPath><clipPath id="jldzc"><path fill="#fff" d="M0 50V0h31v50z"/></clipPath></defs><g><g><g clip-path="url(&quot;#jldza&quot;)"><use transform="matrix(1.03333 0 0 1.03333 0 -.833)" xlink:href="#jldzb"/></g><path fill="none" stroke="#707070" stroke-miterlimit="20" stroke-width="2" d="M0 50v0V0v0h31v50z" clip-path="url(&quot;#jldzc&quot;)"/></g></g></svg></button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 2
                }
            
            },
            {
                breakpoint: 400,
                settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
                }
            
            }
        ]
    });
});