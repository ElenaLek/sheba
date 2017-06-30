<?php 
/*
Template Name: Menu Template
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
         <?php get_template_part( 'template-parts/_block_left_1' ); ?>
         
    </div>
    
     <div class="row table1" >
         <?php get_template_part( 'template-parts/_block_right_2' ); ?>
         <div class="col-md-6 right-menu-2 padding-0 cf" style="background-image:url('<?php the_field('image_5') ?>');height:39em">
        </div>
     </div>

    <div class="row">
        <?php get_template_part( 'template-parts/_reviews' ); ?>
    </div>  

    <?php get_template_part( 'template-parts/_book' ); ?>
      

</div>



<?php get_footer(); ?>
