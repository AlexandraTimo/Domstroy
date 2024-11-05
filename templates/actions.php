<?php
$category_id = get_cat_ID('акции');
$args = array(
    'cat' => $category_id,
    'posts_per_page' => -1, // Получаем все посты для обработки
);
$query = new WP_Query($args);

if ($query->have_posts()) :
    $post_counter = 1; // Счетчик для отслеживания порядкового номера поста
    $visible_posts = 2; // Количество постов, которые будут видны сразу

    while ($query->have_posts()) : $query->the_post();
        // Определяем класс в зависимости от номера поста чередуем карточки по цвету
        if ($post_counter % 3 == 1) {
            $class = 'blue-card'; // Первая карточка голубая
        } else {
            $class = 'navy-card'; // Вторая и третья карточки синие
        }

        // Задаем дату окончания акции
        $end_time_string = '2024-12-31 23:59:59'; // Дата окончания: 31 декабря 2024 года в 23:59:59
        $end_time = strtotime($end_time_string); // Преобразуем дату в Unix timestamp

        // Если время окончания акции задано
        if ($end_time) {
            $current_time = time(); // Текущее время в формате Unix timestamp
            $time_diff = $end_time - $current_time; // Разница во времени в секундах

            // Если акция еще не закончилась
            if ($time_diff > 0) {
                $days = floor($time_diff / 86400);
                $hours = floor(($time_diff % 86400) / 3600);
                $minutes = floor(($time_diff % 3600) / 60);
            } else {
                $days = $hours = $minutes = 0; // Акция закончилась
            }
        } else {
            $days = $hours = $minutes = 0; // Если время окончания акции не задано
        }

        // Выводим заголовок и ссылку на пост
        echo '<div class="post-item_actions ' . $class . '" style="' . ($post_counter > $visible_posts ? 'display:none;' : '') . '">';

        // Выводим заголовок с ссылкой на пост
        echo '<span class="size_24">' . get_the_title() . '</span>';

        // Выводим содержимое поста
        the_content();

        echo '<div class="post-item_actions__wrapper">';
        // Выводим отсчет времени до конца акции
        if ($time_diff > 0) {
            echo '<p class="time-remaining">' . $days . ' д: ' . $hours . ' ч: ' . $minutes . ' м</p>';
        } else {
            echo '<p class="time-remaining">Акция закончилась</p>';
        }
        echo '<a class="size_16" href="' . get_permalink() . '"> Подробнее </a>';
        echo '</div>';
        echo '</div>';
        $post_counter++;
    endwhile;

    // Проверяем, есть ли скрытые посты
    if ($post_counter > $visible_posts) {
        echo '<button id="show-more">Посмотреть больше</button>';
    }
    wp_reset_postdata();
else :
    echo 'Посты не найдены.';
endif;
?>

<script>

</script>




