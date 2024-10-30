'use strict';

// header при скролле
let header_scroll = document.querySelector('.header_scroll');
let header = document.querySelector('.header')
document.addEventListener('scroll', ()=>{
if (window.scrollY >300){
    header_scroll.classList.add('show');
}else{
    header_scroll.classList.remove('show');
}
})


 // модальное окно (c этим кодом можно добавлять много модальных окон)

let btns = document.querySelectorAll('*[data-modal-btn]');
// любой тег с таким атрибутом будет добавлятся
// для каждой кнопки должно быть такое же модальное окно с таким же атибутом (my_modal1)
for(let i = 0; i < btns.length; i++){
    btns[i].addEventListener('click', function(){
let name = btns[i].getAttribute('data-modal-btn');
let modal = document.querySelector("[data-modal-window ='"+name+"']");
modal.style.display = 'block';
document.body.classList.add('lock');

let close = modal.querySelector('.close_modal_window');
close.addEventListener('click', function(){
    modal.style.display = 'none';
    document.body.classList.remove('lock');

})
    })

}
// по клику вне модального окна оно будет закрываться
window.onclick = function(e) {
//  событие event отслеживает элменты на странице
if(e.target.hasAttribute('data-modal-window')){
// target это именно кнопка у которого есть в наличии атрибут
let modals = document.querySelectorAll("*[data-modal-window]")
// выбираем все модальные окна
for (let i = 0; i< modals.length; i++){
    modals[i].style.display = 'none';
    document.body.classList.remove('lock');
}
}
}


// подменю услуг
document.addEventListener('DOMContentLoaded', function() {
    let menuItem = document.getElementById('menu-item-45');
    let submenuContainerMain = document.querySelector('.submenu_containerMain');

    // Открытие подменю при наведении на элемент <li>
    menuItem.addEventListener('mouseover', function() {
        submenuContainerMain.classList.add('activated')
    });
    menuItem.addEventListener('mouseleave', function() {
        setTimeout(function() {
            if (!submenuContainerMain.matches(':hover')) {
                submenuContainerMain.classList.remove('activated');
            }
        }, 100);
    });
    // Закрытие подменю при уходе мыши с подменю
    submenuContainerMain.addEventListener('mouseleave', function() {
        submenuContainerMain.classList.remove('activated');
    });
});


    let firstMenuItem = document.querySelector('#menu-top_second-1 li:first-child');
    let submenuContainerMain4 = document.querySelector('.submenu_containerMain4');

    // Открытие подменю при наведении на элемент <li>
    firstMenuItem.addEventListener('mouseover', function() {
        submenuContainerMain4.classList.add('activated')
    });
// Закрытие подменю при уходе мыши с элемента
firstMenuItem.addEventListener('mouseleave', function() {
    setTimeout(function() {
        if (!submenuContainerMain4.matches(':hover')) {
            submenuContainerMain4.classList.remove('activated');
        }
    }, 100);
});
    // Закрытие подменю при уходе мыши с подменю
    submenuContainerMain4.addEventListener('mouseleave', function() {
        submenuContainerMain4.classList.remove('activated');
    });


// подменю на точки
let dots = document.querySelector('.dots');
let submenuContainerMain2 = document.querySelector('.submenu_containerMain2');
let dots2 = document.querySelector('.dots2');
let submenuContainerMain3 = document.querySelector('.submenu_containerMain3');

function setupSubmenu(dotElement, submenuContainer) {
    // Открытие подменю при наведении на элемент
    dotElement.addEventListener('mouseenter', function() {
        submenuContainer.classList.add('activated');
    });

    // Закрытие подменю при уходе мыши с элемента
    dotElement.addEventListener('mouseleave', function() {
        setTimeout(function() {
            if (!submenuContainer.matches(':hover')) {
                submenuContainer.classList.remove('activated');
            }
        }, 100);
    });

    // Закрытие подменю при уходе мыши с подменю
    submenuContainer.addEventListener('mouseleave', function() {
        submenuContainer.classList.remove('activated');
    });
}

// Настраиваем подменю для каждого элемента
setupSubmenu(dots, submenuContainerMain2);
setupSubmenu(dots2, submenuContainerMain3);


// подменю наши обьекты
let menuItem = document.querySelector('#menu-item-41');
let submenu = document.querySelector('.sub-menu');

menuItem.addEventListener('mouseenter', () => {
  submenu.classList.add('activated'); // Добавляем класс "activated"
});

menuItem.addEventListener('mouseleave', () => {
  submenu.classList.remove('activated'); // Удаляем класс "activated"
});





// подсказки на кнопки
tippy('#calck', {
    content: "Рассчитать стоимость",
    placement: 'left',
    duration:'1000'
  });

  tippy('#mail', {
    content: "Задать вопрос",
    placement: 'left',
    duration:'1000'
  });



  document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('#main-menu .menu-item');
    const submenuItems = document.getElementById('submenu-items');
    const threeDots = document.getElementById('three-dots');

    function adjustMenu() {
        const screenWidth = window.innerWidth;
        const maxVisibleItems = Math.floor(screenWidth / 120); // Измените 120 на ширину одного пункта меню

        let hiddenItems = [];

        menuItems.forEach((item, index) => {
            if (index < maxVisibleItems) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
                hiddenItems.push(item.cloneNode(true)); // Сохраняем скрытые пункты
            }
        });

        // Обновляем подменю
        submenuItems.innerHTML = ''; // Очищаем подменю
        if (hiddenItems.length > 0) {
            hiddenItems.forEach(item => {
                const newItem = document.createElement('li');
                newItem.textContent = item.textContent; // Копируем текст
                newItem.classList.add('menu-item'); // Добавляем класс для стилей
                submenuItems.appendChild(newItem);
            });
        }
    }

    // Изначальная настройка
    adjustMenu();

    // Обработчик события изменения размера окна
    window.addEventListener('resize', adjustMenu);

    // Обработчик событий для отображения подменю
    threeDots.addEventListener('mouseenter', () => {
        submenuItems.classList.add('visible');
    });

    threeDots.addEventListener('mouseleave', () => {
        submenuItems.classList.remove('visible');
    });

    submenuItems.addEventListener('mouseenter', () => {
        submenuItems.classList.add('visible');
    });

    submenuItems.addEventListener('mouseleave', () => {
        submenuItems.classList.remove('visible');
    });
});
