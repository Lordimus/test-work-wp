<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo( 'name' ); wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width+device-width, initial-scale=1" >
		
<?php wp_head(); ?>
</head>

<body>

<header>
	<div class="container">
		<div class="content">
			<div class="logo">
				<a href="<?php echo esc_url(home_url()); ?>">
					<?php theme_get_custom_logo(); ?>
				</a>
			</div>
			<div class="nav">
				<?php
				wp_nav_menu(array('theme_location' => 'header-menu'));
				?>
			</div>
		</div>
	</div>
</header>