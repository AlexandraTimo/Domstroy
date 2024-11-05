<?php
$category_id = get_cat_ID('парнеры');
$args = array(
    'cat' => $category_id,
    'posts_per_page' => -1, // Получаем все посты для обработки
);
$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <div class="swiper mySwiper4">
        <div class="swiper-wrapper">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="swiper-slide">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('full'); // Выводим изображение поста ?>
                        </div>
                    <?php endif; ?>
                    <!-- <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?> -->
                </div>
            <?php endwhile; ?>
        </div>
        <!-- Добавляем навигацию -->
        <div class="swiper-button-next"><svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1.5 11L6.5 6L1.5 1" stroke="#475467" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
      </svg></div>
        <div class="swiper-button-prev"><svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M1.5 11L6.5 6L1.5 1" stroke="#475467" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
      </svg></div>
    </div>
<?php
else :
    echo 'Посты не найдены.';
endif;

wp_reset_postdata();
?>


