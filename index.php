<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
                    <h3>Мой личный блог</h3>                                    
                    <img class="avatar" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/avatar.jpg" alt="">
                    <p class="nickname">Sergey Vushnyakov</p>
                    <p class="fio">Программист, веб-разработчик</p>
                    <hr>
                    <p class="fio"></p>
                    <?php get_sidebar();?>
				</div>
			</div>
			<div class="col-sm-8 col-md-9 col-lg-9">
				<div class="main-content">				
                <main id="primary" class="site-main">
                    <?php
                    if ( have_posts() ) :                
                       
                        while ( have_posts() ) :
                            the_post();                          
                            get_template_part( 'template-parts/content', get_post_type() );
                        endwhile;
                        the_posts_navigation();
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif;
                    ?>
                    </main><!-- #main -->
				</div>
			</div>
		</div>		
	</div><!-- main -->
<?php
get_footer();
