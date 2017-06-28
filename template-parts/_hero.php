<?php 

$title = get_field('title');
if (!empty($title)) : ?>


        <div class="row ">
             <div class="col-md-12 padding-0 dis-table banner" style="background-image:url('<?php the_field('banner_image') ?>')">
                <div class="text-center table-div">
                     <h2 class="text-center"><?php the_field('title') ?></h2>
                     <div class="table-img" style="background-image:url('<?php the_field('banner_image_1') ?>')"></div>
                     <h4><?php the_field('small_title') ?></h4> 
                 </div>
             </div>
         </div>
         
<?php endif; ?>