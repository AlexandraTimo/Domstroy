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
<div class="menu-container">
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
                <!-- SVG для трех точек -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="2" fill="black"/>
                    <circle cx="6" cy="12" r="2" fill="black"/>
                    <circle cx="18" cy="12" r="2" fill="black"/>
                </svg>
            </div>
            <ul id="submenu-items" class="hidden"></ul>
        </div>
    </div>


</section>



<?php get_footer();
?>