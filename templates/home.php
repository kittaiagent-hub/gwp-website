<?php

/* Template Name: Home */

get_header();?>

<main id="main-container" role="main" class="container-fluid px-0">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
			<div class="entry-content">
				<?php 
					get_template_part('template-parts/home/home', 'header');
				?>
			</div>
		
		</article>
		
		<?php endwhile;?>
		<?php endif;?>
</main>

<?php get_footer();?>