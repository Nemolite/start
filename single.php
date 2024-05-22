<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package start
 */

get_header();
?>
<div class="main">
	<div class="row">
		<div class="col-sm-4 col-md-3 col-lg-3">

			<div class="sidebar">
				<!--
					<h3 class="title-my-blog onclose">Мой личный блог</h3>
					<div class="my-blog">
						<img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/avatar.jpg" alt="">
						<p class="nickname">Sergey Vushnyakov</p>
						<p class="fio">Программист, веб-разработчик</p>
						<hr>
						<p class="fio"></p>
					</div>
				-->
				<?php get_sidebar(); ?>
				<div class="sidebar-info">

				</div>
			</div>
		</div>
		<div class="col-sm-8 col-md-9 col-lg-9">
			<div class="main-content">

				<?php

				while (have_posts()) :
					the_post();
					the_date();

					get_template_part('template-parts/content', get_post_type());
				
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__('Предыдущая статья:', 'start') . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__('Следующая статья:', 'start') . '</span> <span class="nav-title">%title</span>',
						)
					);
				
				// If comments are open or we have at least one comment, load up the comment template.
				
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					
				endwhile; // End of the loop.
				?>

			</div>
		</div>
	</div>
</div><!-- main -->
<?php
get_sidebar();
get_footer();
