<head>
	<title>Ken Yokokawa - <?php the_title();?></title>
</head>

<?php get_header();?>



<div class="container">

	
		
	
	
	<div class ="post-container">
	<div class="title"><?php the_title();?></div>
	<div class ="post-borders">

	<?php if (have_posts()) : while(have_posts()) : the_post();?>
		<div class="post-date"><?php the_date(); ?></div>
		
		<?php $tags = wp_get_post_tags($post->ID);
			$html = '<div class="post-tags">';
			foreach ( $tags as $tag ) {
				$tag_link = get_tag_link( $tag->term_id );
			
				$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
				$html .= "{$tag->name}  </a>";
			}
			$html .= ' </div>';
			echo $html; 
			?>
		
		
		<?php the_content();?>
	<?php endwhile; endif;?>
	
	</div>
	</div>
		

</div>


<?php get_footer();?>