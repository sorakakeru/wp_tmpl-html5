<?php get_header(); ?>

<?php get_sidebar(); ?>

<main role="main">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
	<article>
		<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
		<time datetime="<?php echo get_post_time('Y.m.d(D)'); ?>"><?php echo get_post_time('Y.m.d(D)'); ?></time>
		<span><?php the_category(' ');?></span>
		<div>
			<?php the_content(); ?>
		</div>
	</article><!-- end_article-->
	
	<?php endwhile; ?>
	
	<?php else : ?>
	<p>記事がないよ</p>
	<?php endif; ?>

	<nav>
		<ul>
			<li><?php previous_posts_link('prev') ?></li> 
			<li><?php next_posts_link('next') ?></li>
		</ul>
	</nav><!-- end_nav -->

</main><!-- end_main -->


<?php get_footer(); ?>