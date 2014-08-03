<?php get_header(); ?>

<?php get_sidebar(); ?>

<main role="main">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

	<section>
		<h1><?php the_title(); ?></h1>
		<div>
			<?php the_content(); ?>
		</div>
	</section><!-- end_section -->
		
	<?php endwhile; ?>
	
	<?php else : ?>
	<p>記事がないよ</p>
	<?php endif; ?>

</main><!-- end_main -->


<?php get_footer(); ?>