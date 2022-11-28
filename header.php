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
					<!-- PHP -->
					<ul class="nav navbar-nav">					  					  
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PHP<span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="#">PHP</a></li>						  
						  <li role="separator" class="divider"></li>
						  <li><a href="#">WordPress</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="#">Laravel</a></li>
						</ul>
					  </li>
					</ul>
					
					<!-- Python -->
					<ul class="nav navbar-nav">					  					  
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Python<span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="#">Python</a></li>							
							<li role="separator" class="divider"></li>
							<li><a href="#">Django</a></li>
							
						  </ul>
						</li>
					  </ul>

					<!-- Аутентификация -->
					<ul class="nav navbar-nav navbar-right">	  
					  <li class="dropdown">
						<a href="#" 
						   class="dropdown-toggle" 
						   data-toggle="dropdown" 
						   role="button" 
						   aria-haspopup="true" 
						   aria-expanded="false">Аутентификация<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						  <li><a href="#">Вход</a></li>
						  <li><a href="#">Регистрация</a></li>						  
						  <li role="separator" class="divider"></li>
						  <li><a href="#">Если вы забыли пароль?</a></li>
						</ul>
					  </li>
					</ul>
					
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
