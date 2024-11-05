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

// табы
function showTab(tabId, tabElement) {
    // Проверяем, активна ли вкладка
    if (!tabElement.classList.contains('active')) {
        // Скрываем все контейнеры с содержимым
        const contents = document.querySelectorAll('.item-content');
        contents.forEach(content => {
            content.classList.remove('active');
        });

        // Показываем выбранный контейнер
        const activeContent = document.getElementById(tabId);
        activeContent.classList.add('active');

        // Убираем класс active у всех вкладок
        const tabs = document.querySelectorAll('.tab-links div');
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        // Добавляем класс active к текущей вкладке
        tabElement.classList.add('active');
    }
}

// Автоматически открываем первую вкладку при загрузке страницы
document.addEventListener("DOMContentLoaded", function() {
    showTab('tab1', document.querySelector('.tab-links div.active'));
});


// Показаьб больше в акциях
document.getElementById('show-more').addEventListener('click', function() {
    const hiddenPosts = document.querySelectorAll('.post-item_actions[style*="display:none"]');
    hiddenPosts.forEach(post => {
        post.style.display = 'block';
    });
    this.style.display = 'none';
});



// вопрос ответ
document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', () => {
        const content = header.nextElementSibling;
        const icon = header.querySelector('.accordion-icon');
        content.classList.toggle('open'); // Добавляем или убираем класс open

        // Переключить знак
        if (content.classList.contains('open')) {
            icon.textContent = '-';
            header.classList.add('active'); // Добавляем класс active
        } else {
            icon.textContent = '+';
            header.classList.remove('active'); // Убираем класс active
        }

        // Закрыть другие открытые разделы
        document.querySelectorAll('.accordion-content').forEach(otherContent => {
            if (otherContent !== content) {
                otherContent.classList.remove('open');
                otherContent.previousElementSibling.querySelector('.accordion-icon').textContent = '+';
                otherContent.previousElementSibling.classList.remove('active');
            }
        });
    });
});














//   document.addEventListener('DOMContentLoaded', function() {
//     const menuItems = document.querySelectorAll('#main-menu .menu-item');
//     const submenuItems = document.getElementById('submenu-items');
//     const threeDots = document.getElementById('three-dots');

//     function adjustMenu() {
//         const screenWidth = window.innerWidth;
//         const maxVisibleItems = Math.floor(screenWidth / 120);

//         let hiddenItems = [];

//         menuItems.forEach((item, index) => {
//             if (index < maxVisibleItems) {
//                 item.classList.remove('hidden');
//             } else {
//                 item.classList.add('hidden');
//                 hiddenItems.push(item.cloneNode(true));
//             }
//         });


//         submenuItems.innerHTML = '';
//         if (hiddenItems.length > 0) {
//             hiddenItems.forEach(item => {
//                 const newItem = document.createElement('li');
//                 newItem.textContent = item.textContent;
//                 newItem.classList.add('menu-item');
//                 submenuItems.appendChild(newItem);
//             });
//         }
//     }


//     adjustMenu();


//     window.addEventListener('resize', adjustMenu);


//     threeDots.addEventListener('mouseenter', () => {
//         submenuItems.classList.add('visible');
//     });

//     threeDots.addEventListener('mouseleave', () => {
//         submenuItems.classList.remove('visible');
//     });

//     submenuItems.addEventListener('mouseenter', () => {
//         submenuItems.classList.add('visible');
//     });

//     submenuItems.addEventListener('mouseleave', () => {
//         submenuItems.classList.remove('visible');
//     });
// });

