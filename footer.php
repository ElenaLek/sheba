	
<?php
    $footer_info = get_field('footer_info');
    $tfooter_copyright = get_field('footer_copyright');
    $button_link_1_footer = get_field('button_link_1_footer');
    $button_image_1_footer = get_field('button_image_1_footer');
    $button_link_2_footer = get_field('button_link_2_footer');
    $button_image_2_footer =  get_field('button_image_2_footer');
    $text_link_1_footer = get_field('text_link_1_footer');
    $button_text_1_footer =  get_field('button_text_1_footer');
?>
   
		
			
	<footer id="site-footer">
		<div style="background:#212121">
			<div class="container footer">
                  <div class="row">
                      <div class="col-xs-12 col-sm-8 col-md-8">
                          <ul class="text-left list-unstyled footer-left">
                               
                                <li><h4><?php the_field('footer_info','option') ?></h4></li>
                                
                                <li><h5>&copy; <?php the_field('footer_copyright','option') ?></h5></li>
                                
                                <li>
                                
                                    <a href="<?php the_field('button_link_1_footer','option') ?>"><img src="<?php the_field('button_image_1_footer','option') ?>" alt=""></a> 

                                    <a href="<?php the_field('button_link_2_footer','option') ?>"><img src="<?php the_field('button_image_2_footer','option') ?>" alt=""></a>
                                </li>
                                
                                <li><a href="<?php the_field('text_link_1_footer','option') ?>"><h5><?php the_field('button_text_1_footer','option') ?></h5></a></li>
                            </ul>
                      </div>
                      <div class="col-xs-4 col-sm-4 col-md-4 footer-right">
                          <h4>follow us on Instagram</h4>
                          
                          <?php echo do_shortcode('[enjoyinstagram_mb_grid]'); ?>
                          
                      </div>
                  </div>
              </div>
            </div>    
		</footer>

		<?php wp_footer(); ?>
		<script src="<?php bloginfo('template_directory'); ?>/js/wp.js"></script>

	</body>
</html>

