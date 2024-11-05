<!-- Вывод самой записи отдельной страницей -->

<?php get_header(); ?>
<section class="single"> 
<div class="wrapper_container"> 
<div class="single-post-container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <header class="post-header">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-meta">
                        <p>Опубликовано: <?php echo get_the_date(); ?></p>
                        <p>Автор: <?php the_author(); ?></p>
                    </div>
                </header>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <footer class="post-footer">
                    <div class="post-tags">
                        <?php the_tags('<p>Теги: ', ', ', '</p>'); ?>
                    </div>
                </footer>
            </article>

            <?php
            // Включаем комментарии, если они разрешены
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile;
    else :
        echo '<p>Запись не найдена.</p>';
    endif;
    ?>
</div>
</div>
</section>
<?php get_footer(); ?>

