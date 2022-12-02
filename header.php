<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class();?> >
<?php //wp_body_open(); ?>

<header class="header">
	<div class="header-content navbar-fixed-top">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				 
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand cst-brand" href="#">nemolite</a>
				  </div>		  
				  
				  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<!-- Главное меню-->
					  <?php 
							wp_nav_menu( array(
								'menu' => 'top_menu',
								'theme_location'  => 'top_menu', 
								'depth' =>  2,
								'container' => false,
								'strcasecmp' => 1,
								'menu_class' => 'nav navbar-nav',
								'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
								'walker' => new wp_bootstrap_navwalker())
							);
						?>
						<!-- Меню для регистрации, авторизации-->
						<?php 
							wp_nav_menu( array(
								'menu' => 'top_menu',
								'theme_location'  => 'auth_menu', 
								'depth' =>  2,
								'container' => false,
								'strcasecmp' => 1,
								'menu_class' => 'nav navbar-nav navbar-right',
								'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
								'walker' => new wp_bootstrap_navwalker())
							);
						?>	
						<!-- Поиск -->
						<form class="navbar-form navbar-right">
							<div class="form-group">
							<input type="text" class="form-control" placeholder="Что искать?">
							</div>
							<button type="submit" class="btn btn-default">Поиск по сайту</button>
						</form>	
				  </div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			  </nav>			
		</div>
	</header>
