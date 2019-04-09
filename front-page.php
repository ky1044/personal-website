<head>
	<title>Ken Yokokawa - <?php the_title();?></title>
	<link rel="icon" href="/wp-content/uploads/2019/03/favicon.png" type="image/x-icon" />
</head>

<img src="/wordpress/wp-content/uploads/2019/03/tesselate-small.png"  
style="object-fit: cover;object-position: 20% 80%;height: 90vh;width:100vw;" margin-right:calc(-20vw) id="NYC-small">


<div style="height:calc(10vh - 39px);"></div>

<a NAME="top"></a>
<?php get_header();?>

<div class="container">
	<div class="fill10"></div>

	<div class="h2-center" >My name is Ken Yokokawa. Welcome to my website!</div>

	<div class="fill10"></div>



	<div class="row" >
		

		<div class="col" >
			<div class="h2-center" >Why a website?</div>
		</div>


		

		<div class="col">
			<p>I've always had an interest in coding. Although I started taking computer science classes in highschool, I felt like I lacked a long term project where I could journal my development in coding ability. I landed on a personal website, where I want to showcase my personality, my interest for data, and keep a record of my programming endeavours. I've done as much of the coding on this website as possible, so please bear with me if you encounter any bugs on the website.  </p>
		</div>
	</div>

	<div class="fill10"></div>

	<div class="container" style="width:60%;">
	<div class="h2-center" >Recent Posts</div>
	<?php
	$args = array( 'numberposts' => 3 );
	$lastposts = get_posts( $args );
	foreach($lastposts as $post) : setup_postdata($post); ?>
		
	<div class="front-page-title-link" ><a href="<?php the_permalink(); ?>" style="color:inherit;text-decoration:none;"><?php the_title(); ?></a></div>
		
	<div class="light-text"><?php the_date(); ?></div>
	<?php the_excerpt(); ?>
	<?php endforeach; ?>
	</div>



	



	<div class="fill10"></div>

	<div class="h2-center" >The rest is under contruction! Check back soon. </div>


	<?php if (have_posts()) : while(have_posts()) : the_post();?>
		<?php the_content();?>
	<?php endwhile; endif;?>

	

</div>


<?php get_footer();?>



<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

</script>