<?php 
/*
Template Name: About Template
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
   
<div class="container-fluid">
     <?php get_template_part( 'template-parts/_hero' ); ?>
     
     <div class="row table1">
        <?php get_template_part( 'template-parts/_block_right_1' ); ?> 
        <?php get_template_part( 'template-parts/_block_left_2' ); ?> 
    </div>
     
     <div class="row table1">
         <?php get_template_part( 'template-parts/_block_right_2' ); ?>
         <?php get_template_part( 'template-parts/_block_left_1' ); ?>
    </div>
    
    <div class="row">
        <div class="col-md-12 text-center reviews cf">
            <h4>Reviews</h4>
            <hr/>
            <p>“Good food, Good service, good selection of drinks the waiters really took care of us. We will for sure return to Sheba if we come back to Brick Lane.” <span>Marco L.</span>  </p>
            <img class="img-responsive" id="circles" src="images/circles.png" alt="">
            <img class="img-responsive" src="images/tripadvisor.png" alt="">
        </div>
    </div>  

    <?php get_template_part( 'template-parts/_book' ); ?>
      

</div>



<?php get_footer(); ?>