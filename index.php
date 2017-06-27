<?php get_header(); ?>

<section>
	<div class="wrapper">
	 <!-- Start the Loop. -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="post">
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>	
			<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
			<div class="entry">
				<?php the_content(); ?>
			</div>
			<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
		</div> <!-- /.post -->
		
		<?php endwhile; ?>
		
		<?php post_pagination(); /* Post pagination */ ?>
		
		<?php else : ?>	
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>		
		<?php endif; ?>
		
		<?php get_sidebar(); ?>

	</div> <!-- /.wrapper -->
</section>

<?php get_footer(); ?>