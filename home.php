<?php
/*
Template Name: Home
*/
?>

<?php get_header();
?>
<section class = "hero">
<?php echo get_template_part('templates/heroSwiper'); ?>
</section>
<!--  -->
<section class ="second">
    <div class="wrapper_container">
        <div class="second_wrapper_main">
            <div class="second_wrapper_main__header">
                <a href="<?php echo get_permalink(17); ?>" class ="size_48">Наши услуги</a>
                 <div class = "tab-links" id="tabs_tabs">
		            <div onclick="showTab('tab1',this)" class="active"> Электроснабжение   </div>
		            <div onclick="showTab('tab2',this)">Вентиляция</div>
		            <div onclick="showTab('tab3',this)">Отопление</div>
                    <div onclick="showTab('tab4',this)">Водоснабжение</div>
            </div>
                <a href="<?php echo get_permalink(17); ?>"  class="second_wrapper_main__header_button">
                <span class = "size_16">Все услуги</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="#0040C1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
            </div>
            <!-- контейнер табов карточек -->
             <div class="tabs-content">
                 <div class="item-content active" id="tab1">
                    <a href="<?php echo get_permalink(13); ?>"   class="item-content_card montage">
                        <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Монтаж электропроводки</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                   </a>
                    <a href="<?php echo get_permalink(13); ?>"  class="item-content_card light">
                         <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Наружное освещение</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                     </a>
                    <a href="<?php echo get_permalink(13); ?>" class="item-content_card electro">
                         <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Резервное электроснабжение</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo get_permalink(13); ?>" class="item-content_card energy">
                        <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Бесперебойное питание</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                     </a>
                 </div>
                 <div class="item-content" id="tab2">
                     <a href="<?php echo get_permalink(13); ?>"  class="item-content_card montage">
                        <div class="item-content_card_container">
                            <span class ="size_18">Электромон</span>
                            <span class ="size_24">Монтаж электропроводки</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                     </a>
                    <a href="<?php echo get_permalink(13); ?>" class="item-content_card light">
                         <div class="item-content_card_container">
                            <span class ="size_18">Электромон</span>
                            <span class ="size_24">Наружное освещение</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo get_permalink(13); ?>" class="item-content_card electro">
                         <div class="item-content_card_container">
                            <span class ="size_18">Электромон</span>
                            <span class ="size_24">Резервное электроснабжение</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                     </a>
                    <a href="<?php echo get_permalink(13); ?>" class="item-content_card energy">
                         <div class="item-content_card_container">
                            <span class ="size_18">Электромон</span>
                            <span class ="size_24">Бесперебойное питание</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                   </a>
                 </div>
                 <div class="item-content" id="tab3">
                 <a href="<?php echo get_permalink(13); ?>" class="item-content_card montage">
                        <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Монтаж электропроводки</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                </a>
                    <a href="<?php echo get_permalink(13); ?>" class="item-content_card light">
                        <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Наружное освещение</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                     </a>
                    <a href="<?php echo get_permalink(13); ?>" class="item-content_card electro">
                         <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Резервное электроснабжение</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                     </a>
                    <div class="item-content_card energy">
                         <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Бесперебойное питание</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="item-content" id="tab4">
                 <a href="<?php echo get_permalink(13); ?>" class="item-content_card montage">
                        <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Монтаж электропроводки</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                </a>
                    <a href="<?php echo get_permalink(13); ?>" class="item-content_card light">
                        <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Наружное освещение</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                     </a>
                    <a href="<?php echo get_permalink(13); ?>" class="item-content_card electro">
                         <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Резервное электроснабжение</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                     </a>
                    <div class="item-content_card energy">
                         <div class="item-content_card_container">
                            <span class ="size_18">Электромонтаж</span>
                            <span class ="size_24">Бесперебойное питание</span>
                            <div class="item-content_card_container__description">
                            Спроектируем схему подключений, подберем необходимые устройства для постройки резерва и установим резервные системы электроснабжения в частных домах.   <br></br>
                            Подбор материалов:  Да
                            </div>
                        </div>
                    </div>

                 </div>

            <!-- конец контейнера табов карточек -->
        </div>
    </div>
    <!-- <div class="menu-container">
        <ul id="main-menu">
            <li class="menu-item">Пункт 1</li>
            <li class="menu-item">Пункт 2</li>
            <li class="menu-item">Пункт 3</li>
            <li class="menu-item">Пункт 4</li>
            <li class="menu-item">Пункт 5</li>
            <li class="menu-item">Пункт 6</li>
        </ul>
        <div class="submenu">
            <div class="three-dots" id="three-dots">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="2" fill="black"/>
                    <circle cx="6" cy="12" r="2" fill="black"/>
                    <circle cx="18" cy="12" r="2" fill="black"/>
                </svg>
            </div>
            <ul id="submenu-items" class="hidden"></ul>
        </div>
    </div> -->
</section>

<section class="third">
    <div class="wrapper_container">
      <div class="third_wrapper_container">
        <div class="third_wrapper_container_flex">
            <span class="size_60">400+</span>
            <span class="size_18">Гарантия качества и признания клиентов с 2004 года</span>
        </div>
        <div class="third_wrapper_container_flex">
        <span class="size_60">100%</span>
        <span class="size_18">Сюрпризов не будет: соблюдаем условия договора</span>
        </div>
        <div class="third_wrapper_container_flex">
        <span class="size_60">24/7</span>
        <span class="size_18">Отвечаем на все вопросы до и поле выполнения работ</span>
        </div>
        <div class="third_wrapper_container_flex">
        <span class="size_60">365</span>
        <span class="size_18">Согласовываем сроки и сдаем работы вовремя</span>
        </div>
      </div>
    </div>
</section>
<!--  -->
<section class="fourth">
    <div class="wrapper_container">
        <div class="second_wrapper_main__header">
                <a href="<?php echo get_permalink(9); ?>" class ="size_48">Максимум выгоды</a>

                <a href="<?php echo get_permalink(9); ?>"  class="second_wrapper_main__header_button">
                <span class = "size_16">Все акции</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="#0040C1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
        </div>
        <div class="wrapper_container_flex">
        <?php echo get_template_part('templates/actions'); ?>
        </div>
    </div>
</section>
<section class="fifth">
    <div class="wrapper_container">
            <div class="second_wrapper_main__header">
                <a href="<?php echo get_permalink(9); ?>" class ="size_48">Нам доверяют</a>
                <a href="<?php echo get_permalink(9); ?>"  class="second_wrapper_main__header_button">
                <span class = "size_16">Все отзывы</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="#0040C1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
            </div>
            <div class="review_container">
              <?php echo get_template_part('templates/reviewSwiper'); ?>
            </div>
    </div>
</section>
<section class="six">
           <div class="wrapper_container">
           <div class="wrapper_container_box">
            <div class="wrapper_container_box_mini navy">
                <p>Гарантированное обслуживание</p>
                <span class="size_18">Можно короткий текстМожно короткий текстМожно короткий текстМожно короткий текст
                </span>
                <a  class="blue_button" href="#"> Подробнее</a>

            </div>
            <div class="wrapper_container_box_mini img">
            </div>
           </div>
           </div>
</section>
<section class="seven">
    <div class="wrapper_container">
    <div class="second_wrapper_main__header">
                <a href="<?php echo get_permalink(9); ?>" class ="size_48">Наша команда</a>

                <a href="<?php echo get_permalink(9); ?>"  class="second_wrapper_main__header_button">
                <span class = "size_16">Вся команда</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="#0040C1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
        </div>
         <div class="ourTeam_container">
         <?php echo get_template_part('templates/ourTeamSlider'); ?>
        </div>
    </div>
</section>
<section class="eight">
    <div class="wrapper_container">
    <a href="<?php echo get_permalink(9); ?>" class ="size_48">О компании</a>
     <div class="about_container">
          <div class="about_container_box">
            <span class="size_16">
            Работаем с 2004 года и специализируемся на инженерных услугах — водоснабжении, отоплении, вентиляции и автономной канализации. Проектируем структуру проекта, поставляем необходимое оборудование и проводим монтажные работы быстро, качественно и без грязи. Берёмся за проекты любой сложности — от частных домов до крупных предприятий <br></br>
Адаптируемся к изменениям на рынке, применяем в работе актуальные инструменты, материалы и оборудование. Берём в работу только те проекты, которые выполним на 100%.<br></br>
Проектируем инженерные системы для загородных домов, офисов и коммерческих зданий. Не важен размер, в основе стоят цели и задачи проектов.<br></br>
Качественно монтируем оборудование и налаживаем инженерные системы.<br></br>
Доставляем оборудование в срок, даже если на трассе снежная буря или дороги закрыты.<br></br>
Качеством работы мы заслужили признание и доверие сотен клиентов. Доверьтесь и вы!
            </span>
            <a href="<?php echo get_permalink(23); ?>" class ="white_button">Подробнее</a>
          </div>
          <div class="about_container_box">
          <img src="<?php bloginfo('template_url'); ?>/assets/image/aboutcompany.webp" alt="aboutcompany">
          </div>
     </div>
    </div>
</section >
<section class="nine">
    <div class="wrapper_container">
        <div class="second_wrapper_main__header">
                <a href="<?php echo get_permalink(9); ?>" class ="size_48">Вопрос-ответ</a>

                <a href="<?php echo get_permalink(9); ?>"  class="second_wrapper_main__header_button">
                <span class = "size_16">Вся команда</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="#0040C1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
        </div>
        <div class="accord_container">
<div class="accordion">
    <div class="accordion-header size_24">
        <span> Предоставляете ли вы гарантию на монтаж оборудование?</span>
        <span class="accordion-icon">+</span>
   </div>
    <div class="accordion-content">
        <p class="size_18">Предоставляем гарантийное обслуживание в течение 3 лет. Если установленное оборудование сломается или начнет некорректно работать, заменим агрегат на новый. Выезд специалиста и ремонтные работы за наш счет.</p>
        <div class="blue_button popmake-69">Задать вопрос</div>
    </div>

    <div class="accordion-header size_24">
        <span> Несёте ли вы материальную ответственность после установки вашего оборудования?</span>
        <span class="accordion-icon">+</span>
   </div>

    <div class="accordion-content">
    <p class="size_18">Предоставляем гарантийное обслуживание в течение 3 лет. Если установленное оборудование сломается или начнет некорректно работать, заменим агрегат на новый. Выезд специалиста и ремонтные работы за наш счет.</p>
    <div class="blue_button popmake-69">Задать вопрос</div>
    </div>

    <div class="accordion-header size_24">
        <span> Как заказать услугу?</span>
        <span class="accordion-icon">+</span>
   </div>

    <div class="accordion-content">
    <p class="size_18">Предоставляем гарантийное обслуживание в течение 3 лет. Если установленное оборудование сломается или начнет некорректно работать, заменим агрегат на новый. Выезд специалиста и ремонтные работы за наш счет.</p>
    <div class="blue_button popmake-69">Задать вопрос</div>
    </div>
</div>
    </div>
    <!-- аккордион -->
     </div>
</section>
<section class="ten">
     <div class="wrapper_container">
        <div class="second_wrapper_main__header">
                <a href="<?php echo get_permalink(9); ?>" class ="size_48">Наши  проекты</a>

                <a href="<?php echo get_permalink(9); ?>"  class="second_wrapper_main__header_button">
                <span class = "size_16">Наши  проекты</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="#0040C1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
        </div>
     <!--  -->
       <div class="partner_container">
       <a  class="partner_container_mini" href="<?php echo get_permalink(9); ?>">
             <picture>
                <source media="(max-width: 1024px) and (min-width: 769px)" srcset="<?php bloginfo('template_url'); ?>/assets/image/ourProj_1024.webp" alt="ourProj_1024">
                <source media="(max-width: 768px) and (min-width: 569px)" srcset="<?php bloginfo('template_url'); ?>/assets/image/ourProj_768.webp" alt="ourProj_768">
                <source media="(max-width: 568px)" srcset="<?php bloginfo('template_url'); ?>/assets/image/ourProj_mobile.webp" alt="ourProj_mobile">
                <img src="<?php bloginfo('template_url'); ?>/assets/image/ourProj.webp" alt="ourProj">
            </picture>

           <div class="partner_container_mini__titleBox">
            <span class ="size_18">Электромонтаж</span>
            <span class ="size_24">Квартира в новостройке  50 кв.м</span>
            <span class = "size_16">Подробнее</span>
           </div>
       </a>
       <a  class="partner_container_mini" href="<?php echo get_permalink(9); ?>">
       <picture>
                <source media="(max-width: 1024px) and (min-width: 769px)" srcset="<?php bloginfo('template_url'); ?>/assets/image/ourProg2_1024.webp" alt="ourProg2_1024">
                <source media="(max-width: 768px) and (min-width: 569px)" srcset="<?php bloginfo('template_url'); ?>/assets/image/ourProg2_768.webp" alt="ourProg2_mobile">
                <source media="(max-width: 568px)" srcset="<?php bloginfo('template_url'); ?>/assets/image/ourProg2_mobile.webp" alt="ourProg2_mobile">
                <img src="<?php bloginfo('template_url'); ?>/assets/image/ourProg2.webp" alt="ourProg2">
            </picture>


       <div class="partner_container_mini__titleBox">
            <span class ="size_18">Водоснабжение</span>
            <span class ="size_24">Водоснабжение в доме 250 кв.м.</span>
            <span class = "size_16">Подробнее</span>
           </div>
       </a>
       </div>
    </div>
</section>
<section class="eleven">
     <div class="wrapper_container">
     <div class="second_wrapper_main__header">
                <a href="<?php echo get_permalink(9); ?>" class ="size_48">Наши партнеры</a>

                <a href="<?php echo get_permalink(9); ?>"  class="second_wrapper_main__header_button">
                <span class = "size_16">Все партнеры</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="#0040C1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
        </div>
        <!--  -->
<div class="partner_container">
    <!-- вывод партнеров через рубрики в админке -->
<?php echo get_template_part('templates/partnerSwiper'); ?>
</div>
     </div>
</section>
<section class="twelve">
     <div class="wrapper_container">
         <div class="second_wrapper_main__header">
                <a href="<?php echo get_permalink(9); ?>" class ="size_48">Контакты</a>
        </div>
          <!--  -->
        <div class="map_container">
             <div class="map_container_right">
                <ul class="map_container_right_mini .size_20">
                    <li>
                        <div class="map_container_right_mini_title">
                          <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="4" width="48" height="48" rx="24" fill="#D1E0FF"/>
                            <rect x="4" y="4" width="48" height="48" rx="24" stroke="#EFF4FF" stroke-width="8"/>
                            <path d="M18 23L26.1649 28.7154C26.8261 29.1783 27.1567 29.4097 27.5163 29.4993C27.8339 29.5785 28.1661 29.5785 28.4837 29.4993C28.8433 29.4097 29.1739 29.1783 29.8351 28.7154L38 23M22.8 36H33.2C34.8802 36 35.7202 36 36.362 35.673C36.9265 35.3854 37.3854 34.9265 37.673 34.362C38 33.7202 38 32.8802 38 31.2V24.8C38 23.1198 38 22.2798 37.673 21.638C37.3854 21.0735 36.9265 20.6146 36.362 20.327C35.7202 20 34.8802 20 33.2 20H22.8C21.1198 20 20.2798 20 19.638 20.327C19.0735 20.6146 18.6146 21.0735 18.327 21.638C18 22.2798 18 23.1198 18 24.8V31.2C18 32.8802 18 33.7202 18.327 34.362C18.6146 34.9265 19.0735 35.3854 19.638 35.673C20.2798 36 21.1198 36 22.8 36Z" stroke="#0040C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                          <span class="size_20">Email</span>
                        </div>
                        <a class ="size_16" href="mailto:123596@yandex.ru">123596@yandex.ru</a>
                    </li>
                    <li>
                    <div class="map_container_right_mini_title">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="4" y="4" width="48" height="48" rx="24" fill="#D1E0FF"/>
<rect x="4" y="4" width="48" height="48" rx="24" stroke="#EFF4FF" stroke-width="8"/>
<path d="M28 28.5C29.6569 28.5 31 27.1569 31 25.5C31 23.8431 29.6569 22.5 28 22.5C26.3431 22.5 25 23.8431 25 25.5C25 27.1569 26.3431 28.5 28 28.5Z" stroke="#0040C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M28 38C30 34 36 31.4183 36 26C36 21.5817 32.4183 18 28 18C23.5817 18 20 21.5817 20 26C20 31.4183 26 34 28 38Z" stroke="#0040C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                          <span class="size_20">Офис</span>
                        </div>
                        <span class="size_16_grey">г. Челябинск, ул. Энтузиастов, д. 30</span>
                        <span class="size_16">Пн-Пт с 08:00 до 17:00</span>
                    </li>
                    <li>
                    <div class="map_container_right_mini_title">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="4" y="4" width="48" height="48" rx="24" fill="#D1E0FF"/>
<rect x="4" y="4" width="48" height="48" rx="24" stroke="#EFF4FF" stroke-width="8"/>
<path d="M28 28.5C29.6569 28.5 31 27.1569 31 25.5C31 23.8431 29.6569 22.5 28 22.5C26.3431 22.5 25 23.8431 25 25.5C25 27.1569 26.3431 28.5 28 28.5Z" stroke="#0040C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M28 38C30 34 36 31.4183 36 26C36 21.5817 32.4183 18 28 18C23.5817 18 20 21.5817 20 26C20 31.4183 26 34 28 38Z" stroke="#0040C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                          <span class="size_20">Телефон</span>
                        </div>
                        <span class="size_16_grey">Пн-Пт с 08:00 до 17:00</span>
                        <a class = "size_16" href="tel:+7 4832 33 33 33">+7 4832 33 33 33</a>
                        <div class="blue_button popmake-69">Заказть звонок</div>
                    </li>
                </ul>
            </div>
            <div class="map_container_right map">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A44101f361042be995287079549bdf76e1b6e591a786ee6ed851f3f0cac6d1469&amp;source=constructor" width="100%" height="100%" frameborder="0" scroll = 'false'></iframe>
            </div>
        </div>
     </div>
</section>
<section class="thirteen">
   <div class="wrapper_container">
     <div class="form_container">
        <div class="form_container__title">
             <div class="form_container__title_box">
             <span class="size_36">Расчет стоимости работы</span>
             <span class="size_18">Перезвоним в течение 10 минут. Обсудим задачи, найдем оптимальное решение и запланируем работы. Ответим на вопросы и расскажем подробнее о действующих акциях. Будем на связи!</span>
             </div>
        </div>
        <div class="form_container__title">
        <?php
       echo do_shortcode('[contact-form-7 id="da656a0" title="Расчет стоимости работ"]');
         ?>
        </div>
     </div>
   </div>
</section>
<?php get_footer();
?>