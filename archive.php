<head>
	<title>Ken Yokokawa - <?php single_cat_title();?></title>
</head>

<?php get_header();?>



<div class="container">

	<div class="h1-center"><?php 
	if(single_cat_title('',false)!='Blog'){ single_cat_title('Filter: ');}?></div>


	<?php $loop=1 ?>
	<?php if (have_posts()) : while(have_posts()) : the_post();?>
		<?php if($loop!=1) : ?>
			<div class="fill10"></div>
		<?php endif; ?>
		<?php $loop++; ?>
		
		<div class ="post-container">
			<div class="title-link"><a href="<?php the_permalink();?>" style="color:inherit;text-decoration:none;"><?php the_title();?></a></div>
		<div class ="post-borders">

		<div class="post-date"><?php the_date(); ?></div>
		
			
			
		<?php $tags = wp_get_post_tags($post->ID);
			$html = '<div class="post-tags">';
			foreach ( $tags as $tag ) {
				$tag_link = get_tag_link( $tag->term_id );
			
				$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
				$html .= "{$tag->name}  </a>";
			}
			$html .= ' </div>';
			echo $html; ?>
		
		<?php the_content();?>
		<a href="<?php the_permalink();?>"> Link to Post </a>


		</div>
	    </div>
		
	<?php endwhile; endif;?>

</div>


<?php get_footer();?>