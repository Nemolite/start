<?php

/**
 * Widgets for baner
 */

defined('ABSPATH') || exit;

class postesWidget extends WP_Widget
{

    /*
	 * создание виджета
	 */
    function __construct()
    {
        parent::__construct(
            'sidebarpostes',
            'Посты в сайтбаре', // заголовок виджета
            array('description' => 'Позволяет выводить посты в сайтбар') // описание
        );
    }

    /*
	 * фронтэнд виджета
	 */
    public function widget($args, $instance)
    {
?>
        <div class="sidebar-postaes">
            <h3>Из последних:</h3>
            <hr>
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args_post = array(
                'post_type'    => 'post',
                'posts_per_page' =>  $instance['countoutpostes'],
                'paged' => $paged,
            );
            $query_post = new WP_Query($args_post);
            if ($query_post->have_posts()) {
                while ($query_post->have_posts()) {
                    $query_post->the_post();
            ?>
                    <div class="posts-item">
                        <h4><a class="posts-item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p class="posts-item-content">
                            <?php
                            $content_post = get_the_content();
                            $trimmed_content_post = wp_trim_words($content_post, 20, '<a class="posts-item-title" href="' . get_permalink() . '"> ...</a>');
                            echo $trimmed_content_post;
                            ?>
                        <p>
                        <p><span>Свежость:</span>
                            <?php
                            echo get_the_date();
                            ?>
                        </p>
                    </div>
                    <hr>
                <?php

                }
                ?>
            <?php
                wp_reset_postdata();
            } else
                echo 'Постов нет.';
            ?>
        </div>
    <?php
    }

    /*
	 * бэкэнд виджета
	 */
    public function form($instance)
    {
        if (isset($instance['countoutpostes'])) {
            $title = $instance['countoutpostes'];
        }
    ?>
        <p>
            <label for="<?php echo $this->get_field_id('countoutpostes'); ?>">Количество выводимых постов</label>
            <input class="widefat" id="<?php echo $this->get_field_id('countoutpostes'); ?>" name="<?php echo $this->get_field_name('countoutpostes'); ?>" type="text" value="<?php echo esc_attr($instance['countoutpostes']); ?>" />
        </p>
<?php
    }

    /*
	 * сохранение настроек виджета
	 */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['countoutpostes'] = (!empty($new_instance['countoutpostes'])) ? strip_tags($new_instance['countoutpostes']) : '';

        return $instance;
    }
}

/*
 * регистрация виджета
 */
function postes_widget_load()
{
    register_widget('postesWidget');
}
add_action('widgets_init', 'postes_widget_load');
?>