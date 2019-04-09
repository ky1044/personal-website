<head>
	<title>Ken Yokokawa - <?php the_title();?></title>
</head>

<?php get_header();?>



<div class="container">

	<div class="h1-center"> <?php the_title();?> </div>

	<?php if (have_posts()) : while(have_posts()) : the_post();?>
		<?php the_content();?>
	<?php endwhile; endif;?>

</div>


<?php get_footer();?>