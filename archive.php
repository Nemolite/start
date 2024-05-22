<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                        <img class="avatar" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/avatar.jpg" alt="">
                        <p class="nickname">Sergey Vushnyakov</p>
                        <p class="fio">Программист, веб-разработчик</p>
                        <hr>                    
                        <p class="fio"></p>
                    </div>
					-->
                    <?php get_sidebar();?>
                    <div class="sidebar-info">
                        
                    </div>
				</div>
			</div>
			<div class="col-sm-8 col-md-9 col-lg-9">
				<div class="main-content">


		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			
				<?php
				the_archive_title( '<h1 class="page-title">Статьи по теме  ', '</h1>' );
				//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();	

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
			</div>
		</div>		
	</div><!-- main -->
<?php
get_sidebar();
get_footer();
