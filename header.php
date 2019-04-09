<!DOCTYPE html>
<html>
		<head>
			<?php wp_head();?>


		</head>

<body <?php body_class();?>>




<header class="sticky-top" id="Header">


	<div class="container">

		<span class = "logo"><li><a href="<?php echo home_url(); ?>">Ken Yokokawa</a></li></span>


		<span class ="top-menu-right">
		<?php wp_nav_menu(
				array(

					'theme_location'=> 'top-menu', 
					'menu_class'=>'navigation'
				)


		);?>

	</span>

	</div>
	</div>

</header>  

