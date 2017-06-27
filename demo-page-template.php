<?php 
/*
Template Name: Demo Template
*/
	/*
	 * add our custom body classes,
	 * these can be used to conditionally load scripts, styles etc...
	 * 
	 **************************************************************/
	add_action( 'body_class', 'add_my_bodyclass'); 
	function add_my_bodyclass( $classes ) {
		
		// each class requires a new $classes[] = '';
		$classes[] = 'ADD_CLASS'; 
		return $classes; 
	} 

?>

<?php get_header(); ?>

<section>
	<div class="wrapper">
	 <!-- Start the Loop. -->
	<?php 
			/**
			 *
			 * https://codex.wordpress.org/Class_Reference/WP_Query
			 * https://generatewp.com/wp_query/
			 *
			 */
			
			// WP_Query arguments
		$args = array(
			'post_type'              => array( 'post_type_name' ),
			'nopaging'               => false,
			'posts_per_page'         => '10',
			'order'                  => 'DESC',
			'orderby'                => 'date',
		);

		// The Query
		$post_query = new WP_Query( $args );

		// The Loop
		if ( $post_query->have_posts() ) :
			while ( $post_query->have_posts() ) :
				$post_query->the_post();
				// do something
			endwhile;
		else : 
			// no posts found
		endif;

		// Restore original Post Data
		wp_reset_postdata();
	 ?>
	</div> <!-- /.wrapper -->
</section>

<?php get_footer(); ?>