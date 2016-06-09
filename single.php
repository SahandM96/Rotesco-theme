<?php get_header(); ?>
<div class="Main-Page-Theme">
		<div class="post_Box">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>


			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>

			<?php edit_post_link('Edit this entry','','.'); ?>
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
			
		</div>

	<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>
