<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start
 */

?>

<footer class="footer">
	<div class="footer-content">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
				<div class="footer-content-left">
					<p>
					<?php
					echo esc_html( 'Сайт веб-разработчика и программиста' );
					?>
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-7 col-lg-7">
				<div class="footer-content-middle">
					<p>
					<?php
					echo esc_html( 'На этом сайте вы можете найти для себя поезную информацию из мира веб-разработки, програмирования и не только.Любая информация с этого сайта может быть скопирована и использована свободно, без каких-либо ограничений со стороны автора.Комментарии к статьям отключены ' );
					?>
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<div class="footer-content-right">
					<p>
						<?php
							echo esc_html( 'E-mail:' );
						?>					 
						<i class="bi bi-envelope"></i> 
						<a href="<?php echo esc_url('mailto:g25092011@mail.ru'); ?>" target="_blank">
						<?php
							echo esc_html( 'Напишите' );
						?>
						</a>
					</p>
						<p>
						<?php
							echo esc_html( 'GitHub:' )
						?>						 
						<i class="bi bi-github"></i> 
						<a href="<?php echo esc_url('https://github.com/Nemolite'); ?>" target="_blank">
						<?php
							echo esc_html( 'Nemolite' );
						?>	
						</a>
					</p>
				</div>

			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>