<?php
    $button_text_4 = get_field('button_text_4');
    $button_link_4 = get_field('button_link_4');
?>
  <?php if(!empty($button_link_4) && !empty($button_text_4)) { ?>
       <div class="row" id="video-row">
            <div class="col-md-12 text-center book">
                <a href="<?php the_field('button_link_4') ?>" id="a4-display"><?php the_field('button_text_4') ?></a>   
            </div>
        </div>  
        <?php }     
    else { ?>
    <style type="text/css">#a4-display, .book, #video-row{
    display:none;
    }</style>
    <?php } ?>

